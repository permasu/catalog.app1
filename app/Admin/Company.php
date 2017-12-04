<?php

use App\Models\Company;
use App\Models\Opf;
use App\Models\Phone;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Company::class, function (ModelConfiguration $model) {
    $model->setTitle('Компании');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('short_name')->setLabel('Название')->setWidth('400px'),
            AdminColumn::text('address')->setLabel('Адрес')
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
                            AdminFormElement::text('short_name', 'Название')->required(),
                            AdminFormElement::text('full_name', 'Название')->required(),
                            AdminFormElement::select('opf_id', 'Тип организации')->setModelForOptions(new Opf())->setDisplay('full'),
                            AdminFormElement::text('inn', 'ИНН'),
                        ];
                    }, 6)
                    ->addColumn(function(){
                        return [
                            AdminFormElement::text('web', 'Сайт'),
                            AdminFormElement::text('email', 'Эл. Почта'),
                            AdminFormElement::text('address', 'Адрес строкой')
                                ->setHtmlAttribute('id', 'address')
                                ->withPackage('autocomplete')
                        ];
                    }, 6)
                    ->addColumn(function() {
                        return [
                            AdminFormElement::textarea( 'description', 'Описание')->setRows(2)
                        ];
                    }, 12)
            );

            $tabs[] = AdminDisplay::tab($form)->setLabel('Основные сведения')->setActive(true);

            return $tabs;
        });

        return $display;
    });
})
    ->addMenuPage(Company::class, 0)
    ->setIcon('fa fa-bank');