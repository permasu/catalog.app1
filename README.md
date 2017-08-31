# Laravel Skeleton
[![Packagist Version](https://img.shields.io/packagist/v/rulweb/laravel-skeleton.svg)](https://packagist.org/packages/rulweb/laravel-skeleton)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://packagist.org/packages/laravelrus/skeleton)

<p align="center">
    <strong>Скелет приложения на базе Laravel 5.4</strong>
</p>

#### Установка:
```shell
composer create-project rulweb/laravel-skeleton
```

#### Изменения:

* режим ротации логов по умолчанию `daily` настройка в `.env`
* добавлены русские языковые файлы
* `locale` приложения по умолчанию`ru`
* `fallback_locale` приложения по умолчанию`ru`
* временная зона по умолчанию`Europe/Moscow` настройка в `.env`
* создал папку для моделей (`App\Models`) и перенёс туда `User`
* подключены пакеты:
  * [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) (работает только в `dev` режиме)
  * [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) (работает только в `dev` режиме)
  * [doctrine/dbal](https://github.com/doctrine/dbal)
* подключён файл `helpers.php` в котором удобно создавать вспомогательные функции
* подключён middleware `OnEnter` в котором осуществляется очистка кеша шаблонов в случае `dev` режима
