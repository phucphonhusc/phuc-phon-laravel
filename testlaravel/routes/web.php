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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    
    Route::prefix('post')->group(function () {
        Route::get('/',[
            'as' =>  'post.index',
            'uses' => 'PostController@index'
        ]);
        Route::get('/create',[
            'as' =>  'post.create',
            'uses' => 'PostController@create'
        ]);
        Route::post('/store',[
            'as' =>  'post.store',
            'uses' => 'PostController@store'
        ]);
        Route::get('/edit/{id}',[
            'as' =>  'post.edit',
            'uses' => 'PostController@edit'
        ]);
        Route::post('/update/{id}',[
            'as' =>  'post.update',
            'uses' => 'PostController@update'
        ]);
        Route::get('/delete/{id}',[
            'as' =>  'post.delete',
            'uses' => 'PostController@delete'
        ]);
        
       
    });
    Route::get('/login',[
        'as' =>  'admin.login',
        'uses' => 'PostController@viewlogin'
    ]);
    Route::post('/login',[
        'as' =>  'admin.login',
        'uses' => 'PostController@login'
    ]);
   
});
