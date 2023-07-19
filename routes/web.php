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

Route::get('/', function () {
    return view('welcome', ['welcome_message' => 'Hey there mmbk fan!']);
});

// Route::get('/', 'App\Http\Controllers\HomeController@index');
// Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);
// Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']); //shows create post form
Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); //commits edited post to the database 
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); //deletes post from the database

Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']); //Shows blog
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']); //Shows blogpost. blogPost, not blogpost


Route::get('/database_test', [\App\Http\Controllers\BlogPostController::class, 'database_test']); //Test database