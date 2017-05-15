<?php

Route::group(['middleware' => 'web', 'prefix' => 'financeiro', 'namespace' => 'Financeiro\Financeiro\Http\Controllers'], function()
{
//    Route::get('/', 'FinanceiroController@index');
    Route::get('/', 'CategoriasController@index');
});
