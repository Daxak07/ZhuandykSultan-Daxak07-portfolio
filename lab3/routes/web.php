<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichreate something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/example', function () {
	return "Web programming back end";
});

Route::get('hello', function () {
	return redirect('/contact');
});

Route::redirect('salam', '/about');

Route::get('/post/{id}', function ($id) {
	return "id number is : " . $id;
});

Route::get('/user/{name?}', function ($name=null) {
	return $name;
})->where('name','[a-zA-Z]+');

Route::get('/post', 'App\Http\Controllers\PostsController@index');

Route::get('maaa/{tel}', 'App\Http\Controllers\PostsController@reverse_number');

