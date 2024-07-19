<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
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

Route::get('/contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');

Route::get('/student', [StudentsController::class, 'create'])->name('student.create');
Route::post('/student', [StudentsController::class, 'store'])->name('student.store');

Route::get('/teacher', [TeachersController::class, 'create'])->name('teacher.create');
Route::post('/teacher', [TeachersController::class, 'store'])->name('teacher.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [PagesController::class, 'admin'])->name('admin');

    Route::resource('post', PostsController::class)->except(['show']);
    Route::resource('tag', TagsController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);

    Route::get('/contact/{slug}-{contact}', [ContactsController::class, 'show'])->name('contact.show')->where([
        'contact' => '[0-9]+',
        'slug' => '[0-9a-z\-]+'
    ]);
});
