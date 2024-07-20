<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

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
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/post', function () {
//     return view('post');
// });
// Route::get('/test', function () {
//     return view('test');
// });

function getUsers()
{
    return  [
        1 => ['name' => 'Amitabh', 'phone' => '9123456789', 'city' => 'Goa'],
        2 => ['name' => 'Salman', 'phone' => '9123456789', 'city' => 'Delhi'],
        3 => ['name' => 'Sunny', 'phone' => "9123456789", 'city' => 'Mumbai'],
        4 => ['name' => 'Akshay', 'phone' => '9123456789', 'city' => 'Agra'],
    ];
}
// Route::get('/users', function () {
// $name = "Nabin";
// return view('users', [
//     'user' => $name,
//     'city' => '<script>alert("Hello")</script>'
// ]);

// return view("users")->with("user", $name)->with("city", "Delhi");

// return view('users')
//     ->withUser($name)
//     ->withCity('KTM');

//     $names = getUsers();
//     return view('users', [
//         'users' => $names,
//         'city' => 'Delhi'
//     ]);
// });

// Route::get('/user/{id}', function ($id) {

//     $users = getUsers();
//     abort_if(!isset($users[$id]), 404);
//     $user = $users[$id];
//     return view('user', ['id' => $user]);
// })->name("view.user");


// Route::get("/", [PageController::class, 'showHome'])->name('home');
// Route::get("/blog", [PageController::class, 'showBlog'])->name('blog');
// Route::get("/user/{id}", [PageController::class, 'showUser'])->name('user');

// route group
Route::controller(PageController::class)->group(function () {
    Route::get("/", 'showHome')->name('home');
    Route::get("/blog", 'showBlog')->name('blog');
    Route::get("/user/{id}", 'showUser')->name('user');
});

Route::get('/testing', TestingController::class)->name('testing');
