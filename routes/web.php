<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}-{post}', [BlogController::class, 'show'])->name('blog.show')->where([
    'post' => $idRegex,
    'slug' => $slugRegex
]);

Route::get('/admin', [PagesController::class, 'admin'])->name('admin');

Route::get('/contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('post', PostsController::class)->except(['show']);
    Route::resource('tag', TagsController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
});
