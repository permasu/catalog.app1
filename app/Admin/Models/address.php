<?php
/**
 * Created by PhpStorm.
 * User: rozhi
 * Date: 09.09.2017
 * Time: 16:10
 */

use App\Models\Address\Address;
use App\Models\Company;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Address::class, function (ModelConfiguration $model) {
    $model->setTitle('Адрес');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('address')->setLabel('Адрес')
        ]);

        $display->paginate(15);

        return $display;
    });

    // Create And Edit
    $model->onCreateAndEdit(function( $id = null) {

        $companyId = Request::input('company_id');

        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('address', 'Адрес')->required()->unique()
        );

        if (! is_null($companyId)) {

            $form->addbody(
                AdminFormElement::multiselect('company', 'Компании')->setModelForOptions(new Company)->setDisplay('name')->setDefaultValue('бла бла')
            );
        } else {
            $form->addbody(
                AdminFormElement::multiselect('company', 'Компании')->setModelForOptions(new Company)->setDisplay('name')
            );
        }

        return $form;
    });
})
    ->addMenuPage(Address::class, 0)
    ->setIcon('fa fa-bank');