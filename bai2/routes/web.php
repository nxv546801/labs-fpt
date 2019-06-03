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

Route::get('/home/', 'homeController@index');

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function(){
    $news_list = [
        ['title' => 'Bài viết số 1', 'content' => 'Nội dung bài viết 1', 'post_date' => '2017-01-04'],
        ['title' => 'Bài viết số 2', 'content' => 'Nội dung bài viết 2', 'post_date' => '2017-01-03'],
        ['title' => 'Bài viết số 3', 'content' => 'Nội dung bài viết 3', 'post_date' => '2017-01-03'],
        ['title' => 'Bài viết số 4', 'content' => 'Nội dung bài viết 4', 'post_date' => '2017-01-03']
    ];
    return view('pages.news')->with(compact('news_list'));
  });

Route::get('/', 'ValidationController@create');
Route::post('/phone', 'ValidationController@store');
