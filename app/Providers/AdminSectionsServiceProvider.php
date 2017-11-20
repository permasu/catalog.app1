<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Setting;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        Company::class => 'App\Admin\Company',
        Setting::class => 'App\Admin\Setting'
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
        parent::boot($admin);

    }

}
