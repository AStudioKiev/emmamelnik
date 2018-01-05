<?php

Auth::routes();

Route::get('/', 'MainController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

});