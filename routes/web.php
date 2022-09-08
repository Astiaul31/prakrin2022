<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
Route::get('/about', 'MyController@showAbout');
//     Route::get('/about', function () {
//         return view('about');
//         // .'Selamat datang di webapp saya<br>'
//         // .'Laravel, emang keren.';
// });
    Route::get('/testmodel', function () {
        $query = Post::all();
        return $query;
});
   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middlewere' => ['auth'], 'prefix' => 'client-area'], function (){
});

Route::group(['prefix' => 'admin', 'middlewere' => ['auth', 'isAdmin']], function (){
    Route::get('profile', function () {
        return view('profile');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/about', function () {
        return view('about');
    });
});


Route::get('/errors', function () {
    return view('403');
});

Route::get('/test-admin', function(){
    return view('layouts.admin');
});
