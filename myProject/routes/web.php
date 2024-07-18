<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('myhome');
// Route::get('/post', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/test', function () {
//     return view('about');
// })->name('myabout');
// Route::redirect('/about', 'test', 301);

// Route::prefix('page')->group(function () {
//     Route::get('/about', function () {
//         return view('welcome');
//     })->name('myhome');

//     Route::get('/gallery', function () {
//         return view('welcome');
//     })->name('gallery');

//     Route::get('/post', function () {
//         return view('post');
//     })->name('post');
// });

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $commentid = null) {
//     if ($id) {
//         return "<h1>Post ID:" . $id . " </h1><h2>Comment ID:" . $commentid . "</h2>";
//     } else {
//         return view('post');
//     }
// });

// Route::get('/post/{id}', function (string $id = null) {
//     if ($id) {
//         return "<h1>Post ID:" . $id . " </h1>";
//     } else {
//         return view('post');
//     }
// })->where('id', '[a-zA-Z]+');

// Route::get('/post/{id}/comment/{commentid}', function (string $id, string $commentid) {
//     return "<h1>Post ID: " . htmlspecialchars($id) . "</h1><h2>Comment ID: " . htmlspecialchars($commentid) . "</h2>";
// })->where('id', '[0-9]+')->whereAlpha('commentid');


// Route::view('/post', 'post');


// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

// Route::fallback(function () {
//     return "<h1>Page Note Found.</h1>";
// });

// passing props
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/post', function () {
    return view('post');
});
