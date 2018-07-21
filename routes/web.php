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
Route::any('/', 'IndexController@about');

Route::get('/test', 'IndexController@testGet')->name('route1');

Route::post('/test', 'IndexController@testPost')->name('route2');

Route::get('/news/{slug}.{id}', 'IndexController@getNews')
    ->where(['id' => '[0-9]+',
             'slug' => '[a-zA-Z0-9-_]+'   
            ]);


// Route::get('/', function () {
//      return view('welcome');
//  });

// Route::post('/', function () {
//     return 'This is post';
// });
 