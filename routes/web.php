<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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


// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('/events', function () {
//     return view('events');
// });
// Route::get('/about-us', function () {
//     return view('about-us');
// });
// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/speakers', function () {
//     return view('speakers');
// });
 Route::resource('posts','\App\Http\Controllers\PostsController');

//  Route::get('/posts',[PostsController::class,'index']);

//  Route::get('/create',[PostsController::class,'create']);


