<?php

Auth::routes();

Route::get('/', 'MainController@index');
Route::get('/blog', 'MainController@blog');
Route::get('/article/{id}', 'MainController@article');
Route::get('/consultancies', 'MainController@consultancies');
Route::post('/get-page-comment', 'MainController@getComments');
Route::post('/contactForm', 'MainController@contactForm');

Route::group(['prefix' => 'trainings'], function (){
    Route::get('/', 'TrainingsController@trainings');

    Route::get('/body', 'TrainingsController@body');
    Route::get('/business', 'TrainingsController@business');
    Route::get('/identification', 'TrainingsController@identification');
    Route::get('/femininity', 'TrainingsController@femininity');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
    Route::get('/', 'Admin\IndexController@index');

    /* Блог */
    Route::group(['prefix' => 'post'], function (){
        Route::get('/', 'Admin\PostController@index');

        Route::get('/add', 'Admin\PostController@addIndex');
        Route::post('/add', 'Admin\PostController@add');

        Route::get('/edit/{id}', 'Admin\PostController@editIndex');
        Route::post('/edit/{id}', 'Admin\PostController@edit');

        Route::post('/delete', 'Admin\PostController@delete');

        // Корзина блога
        Route::group(['prefix' => 'basket'], function (){
            Route::get('/', 'Admin\PostController@basketIndex');
            Route::post('/delete', 'Admin\PostController@basketDelete');
            Route::post('/recover', 'Admin\PostController@basketRecover');
            Route::post('/clear', 'Admin\PostController@basketClear');
        });
    });

    /* Коментарии на странице */
    Route::group(['prefix' => 'page-comments'], function (){
        Route::get('/', 'Admin\PageCommentsController@index');

        Route::get('/add', 'Admin\PageCommentsController@addIndex');
        Route::post('/add', 'Admin\PageCommentsController@add');

        Route::get('/edit/{id}', 'Admin\PageCommentsController@editIndex');
        Route::post('/edit/{id}', 'Admin\PageCommentsController@edit');

        Route::post('/delete', 'Admin\PageCommentsController@delete');

        // Корзина коментариев на странице
        Route::group(['prefix' => 'basket'], function(){
            Route::get('/', 'Admin\PageCommentsController@basketIndex');
            Route::post('/delete', 'Admin\PageCommentsController@basketDelete');
            Route::post('/recover', 'Admin\PageCommentsController@basketRecover');
            Route::post('/clear', 'Admin\PageCommentsController@basketClear');
        });
    });
});
