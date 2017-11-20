<?php

use App\Models\Setting;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Setting::class, function (ModelConfiguration $model) {
    $model->setTitle('Настройки');

    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('Параметр'),
            AdminColumn::text('var')->setLabel('Ключ'),
            AdminColumn::text('value')->setLabel('Значение'),
            AdminColumn::text('description')->setLabel('Описание'),

        ]);

        $display->paginate(15);

        return $display;
    });

    $model->onCreate(function () {
       return AdminForm::form([
           AdminFormElement::text('name', 'Название настройки')->required(),
           AdminFormElement::text('var', 'Постоянный системный код')->required(),
           AdminFormElement::text('value', 'Значение')->required(),
           AdminFormElement::textarea('description', 'Описание'),
       ]);
    });

    $model->onEdit(function () {
       return AdminForm::form([
           AdminFormElement::text('name', 'Название настройки')->required(),
           AdminFormElement::text('var', 'Постоянный системный код')->setReadonly(true),
           AdminFormElement::text('value', 'Значение')->required(),
           AdminFormElement::textarea('description', 'Описание'),
           AdminFormElement::text('id', 'ID')->setReadonly(1),
           AdminFormElement::text('created_at')->setLabel('Создано')->setReadonly(true),
       ]);
    });

})
    ->addMenuPage(Setting::class, 1)
    ->setIcon('fa fa-cogs');