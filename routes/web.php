<?php

use App\Http\Controllers\CauseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

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
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PagesController::class, 'index'])->name('homepage');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::get('blog', [PagesController::class, 'show_blogs'])->name('blog');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/blog/details/{id}', [PagesController::class, 'details'])->name('detals');

Route::resource('volunteers', VolunteerController::class);
Route::resource('contacts', ContactController::class);


Route::group(['middleware' =>['auth']], function(){
    
    Route::resource('galleries', GalleryController::class);
    Route::resource('causes', CauseController::class);
    Route::get('blog/admin', [BlogController::class, 'index'])->name('blogadmin');
    Route::get('blog/create', [BlogController::class, 'create'])->name('create-form');
    Route::post('blog/store', [BlogController::class, 'store'])->name('add.blog');
    Route::get('/admin/bloglist', [BlogController::class, 'show'])->name('bloglist');
    
    Route::get('/admin/edit/{id}', [BlogController::class, 'edit'])->name('editblog');
    Route::put('/admin/update/{id}', [BlogController::class, 'update'])->name('update');
    Route::delete('/admin/delete-blog/{id}', [BlogController::class, 'destroy'])->name('deleteblog');
    Route::delete('/admin/delete-request/{id}', [VolunteerController::class, 'destroy'])->name('delete_request');
    
});