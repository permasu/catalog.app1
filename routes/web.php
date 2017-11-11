<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Company;

Route::get('/', function () {
    return view('index');
});


Route::get('search', function() {
    $company = new Company;
    return $company->searchAddress('Добрянка Энгельса 5-15', 10);
});


//Маршрут для ajax запросов
Route::group(['prefix'=>'ajax'], function () {
    Route::group(['prefix'=>'address'], function() {
       Route::get('search/{string?}/{limit?}', 'AjaxController@get_company_address_search')
            ->name('get_ajax_address_search');
       Route::post('search/{limit?}', 'AjaxController@post_company_address_search')
           ->name('post_ajax_address_search');
    });

    Route::group(['prefix'=>'company'], function() {
        Route::get('search/{string?}', 'AjaxController@get_company_search')
            ->name('get_ajax_company_search');
    });
});

Route::group(['prefix'=>'company'], function () {
    Route::get('{id}', 'CompanyController@view')
        ->where('id', '\d+')
        ->name('company_view');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
