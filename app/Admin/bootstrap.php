<?php

// PackageManager::load('admin-default')
//    ->css('extend', public_path('packages/sleepingowl/default/css/extend.css'));
//PackageManager::add('App\Misc\FormElements\AutocompleteText')
//    ->js('typeahead.bundle',asset('js/libs/typeahead.bundle.js'), 'admin-default', true)



PackageManager::add('autocomplete')
    ->js('jquery.suggestion',asset('//cdn.jsdelivr.net/npm/suggestions-jquery@latest/dist/js/jquery.suggestions.min.js'), 'admin-default', true)
    ->css('jquery.suggestion',asset('//cdn.jsdelivr.net/npm/suggestions-jquery@latest/dist/css/suggestions.min.css'));

Meta::assets()->addJs('admin-custom', asset('js/admin/app.js'), 'admin-default');
Meta::assets()->addCss('admin-custom', asset('css/admin/app.js'), 'admin-default');