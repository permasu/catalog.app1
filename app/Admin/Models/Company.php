<?php
/**
 * Created by PhpStorm.
 * User: rozhi
 * Date: 07.09.2017
 * Time: 10:54
 */

use App\Models\Company;
use App\Models\Opf;
use App\Models\Address\Address;
use App\Models\Phone;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Company::class, function (ModelConfiguration $model) {
    $model->setTitle('Companies');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id', '#')->setWidth('30px'),
            AdminColumn::link('short_name')->setLabel('Кор')->setWidth('100px'),
            AdminColumn::link('full_name')->setLabel('Полное')->setWidth('400px'),
            AdminColumn::text('opf.full')->setLabel('ОПФ'),
//            AdminColumn::text('opf.short')->setLabel('ОПФ'),
        ]);

        $display->paginate(15);

        return $display;
    });

    // Create And Edit
    $model->onCreateAndEdit(function($id = null) {
        $display = AdminDisplay::tabbed();

        $display->setTabs(function() use ($id) {
            $tabs = [];
            $form = AdminForm::panel();
            $form->addBody(
                AdminFormElement::columns()
                    ->addColumn(function(){
                        return [
                            AdminFormElement::text('short_name', 'Наименование')->required()->unique(),
                            AdminFormElement::text('full_name', 'Полное наименование'),
                            AdminFormElement::select('opf_id', 'Форма собственности')->setModelForOptions(new Opf)->setDisplay('full'),
                            AdminFormElement::textarea('description', 'Описание')->setRows(2)
                        ];
                    })
                    ->addColumn(function(){
                        return [
                            AdminFormElement::text('web', 'Сайт'),
                            AdminFormElement::text('email', 'Эл. Почта'),
                            AdminFormElement::multiselect('address', 'Адреса')->setModelForOptions(new Address)->setDisplay('address')
                        ];
                    })
            );

            $tabs[] = AdminDisplay::tab($form)->setLabel('Основные сведения')->setActive(true);

            if (! is_null($id)) {
                $addresses = AdminSection::getModel(Address::class)->fireDisplay();

                $addresses->getScopes()->push(['withCompany', $id]);
                $addresses->setParameter('company_id', $id);
                $tabs[] = AdminDisplay::tab($addresses)->setLabel('Адреса');

                $phone = AdminSection::getModel(Phone::class)->fireDisplay();
                $phone->getScopes()->push(['withCompany', $id]);
                $tabs[] = AdminDisplay::tab($phone)->setLabel('Телефоны');
            }

            return $tabs;
        });

        return $display;
    });
})
    ->addMenuPage(Company::class, 0)
    ->setIcon('fa fa-bank');