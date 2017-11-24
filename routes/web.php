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


Route::get('test/{string}', 'ParserController@getList');
Route::get('test/id/{id}', 'ParserController@getCompany')->where('id', '\d+');


//Маршрут для ajax запросов
Route::group(['prefix'=>'ajax'], function () {
    Route::group(['prefix'=>'search'], function() {

        Route::get('address', 'AjaxController@searchAddress')
            ->name('ajax.search.address');

        Route::get('company', 'AjaxController@searchCompany')
            ->where('limit', '\d{1,2}')
            ->name('ajax.search.company');

        Route::get('opf', 'AjaxController@searchOpf')
            ->where('limit', '\d{1,2}')
            ->name('ajax.search.opf');

    });
});

Route::group(['prefix'=>'company'], function () {

    Route::get('{id}', 'CompanyController@view')
        ->where('id', '\d+')
        ->name('company.view');

    Route::get('add', 'CompanyController@create')
        ->name('company.view.create');

    Route::post('add', 'CompanyController@store')
        ->name('company.store');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
