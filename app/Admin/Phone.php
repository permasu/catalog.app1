<?php
use App\Models\Company;
use App\Models\Phone;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Phone::class, function (ModelConfiguration $model) {
    $model->setTitle('Телефоны');

    $model->onDisplay(function(){
        $display = AdminDisplay::datatablesAsync()->setColumns([
            AdminColumn::text('id')->setLabel('#')->setWidth('20px'),

            AdminColumn::custom( 'Тип', function ($phone) {
                    switch ( $phone->type ){
                        case 'm':
                            return 'Моб.';
                            break;
                        case 'w':
                            return 'Раб.';
                            break;
                        case 'f':
                            return 'Факс';
                            break;
                        default:
                            return '';

                    }
                })->setLabel('Тип')->setWidth('40px'),

            AdminColumn::link('number')->setLabel('Номер'),
            AdminColumn::text('company.short_name')->setLabel('Компания'),
            AdminColumn::text('desc')->setLabel('Описание'),
        ]);

        $display->paginate(25);

        return $display;
    });

    //CreateEdit
    $model->onCreateAndEdit( function ($id = null){
        return AdminForm::panel()->addBody(
            AdminFormElement::selectajax('company_id', 'Компания')
                ->setModelForOptions(new Company())
                ->setDisplay('short_name'),
            AdminFormElement::text('number', 'Номер'),
            AdminFormElement::text('desc', 'Описание'),
            AdminFormElement::select('type', 'Тип')->setOptions([
                'm'=>'Мобильный',
                'w'=>'Рабочий',
                'f'=>'Факс',
            ])
        );
    });
})
->addMenuPage(Phone::class, 1)
->setIcon('fa fa-phone');