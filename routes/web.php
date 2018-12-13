<?php

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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
// Foros
Route::get('/', 'ForumController@index');
Route::get('/forums/{forum}', 'ForumController@show');
Route::post('/forums', 'ForumController@store');

// Posts
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store')->name('newpost');

// Images
Route::get('/images/{path}/{attachment}', function ($path, $attachment){
    // Lo siguiente devuelve el Path absoluto de "Storage"
    $storagePath = Storage::disk($path)->getDriver()->getAdapter()->getPathPrefix();
    $imageFilePath = $storagePath . $attachment;
    if(File::exists($imageFilePath)) {
        return Image::make($imageFilePath)->response();
    }
});

// Replies
Route::post('/replies', 'ReplyController@store');

Auth::routes();
