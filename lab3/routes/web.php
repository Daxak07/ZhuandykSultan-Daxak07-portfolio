<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailSendController;
use GuzzleHttp\Psr7\UploadedFile;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichreate something great!
|
*/

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('main');
});


Route::get('post/create', function () {
    DB::table('posts')->insert([
        'title' => 'Tincho',
        'body' => 'Kadyr'
    ]);
});

Route::get('post', function () {
    $post = Post::find(1);
    return $post;
});


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/example', function () {
//     return "Web programming back end";
// });

// Route::get('hello', function () {
//     return redirect('/contact');
// });

// Route::redirect('salam', '/about');

// Route::get('/post/{id}', function ($id) {
//     return "id number is : " . $id;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return $name;
// })->where('name','[a-zA-Z]+');

// Route::get('/post', 'App\Http\Controllers\PostsController@index');

// Route::get('maaa/{tel}', 'App\Http\Controllers\PostsController@reverse_number');

Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add_blog');

Route::get('post/{id}', [BlogController::class, 'get_post']);


Route::get('/sendmail', [MailSendController::class, 'index']);
Route::post('/sendmail/send', [MailSendController::class, 'send'])->name('add-user');
