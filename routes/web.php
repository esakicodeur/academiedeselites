<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\JourController;
use App\Http\Controllers\Admin\MatiereController;
use App\Http\Controllers\Admin\NiveauController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

// Front Office routes
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}-{post}', [BlogController::class, 'show'])->name('blog.show')->where([
    'post' => $idRegex,
    'slug' => $slugRegex
]);
Route::get('/category/{slug}-{category}', [BlogController::class, 'byCategory'])->name('by-category')->where([
    'slug' => $slugRegex,
    'category' => $idRegex,
]);
Route::get('/tag/{slug}-{tag}', [BlogController::class, 'byTag'])->name('by-tag')->where([
    'slug' => $slugRegex,
    'tag' => $idRegex,
]);

// Contact routes
Route::get('/contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');

// Student routes
Route::get('/student', [StudentsController::class, 'create'])->name('student.create');
Route::post('/student', [StudentsController::class, 'store'])->name('student.store');

// Teacher routes
Route::get('/teacher', [TeachersController::class, 'create'])->name('teacher.create');
Route::post('/teacher', [TeachersController::class, 'store'])->name('teacher.store');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [PagesController::class, 'admin'])->name('admin');

    Route::resource('user', \App\Http\Controllers\Admin\UserController::class)->except(['show']);

    Route::resource('post', PostsController::class)->except(['show']);
    Route::resource('tag', TagsController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
    Route::resource('role', RoleController::class)->except(['show']);
    Route::resource('information', InformationController::class)->except(['show']);
    Route::resource('jour', JourController::class)->except(['show']);
    Route::resource('matiere', MatiereController::class)->except(['show']);
    Route::resource('niveau', NiveauController::class)->except(['show']);

    Route::get('/contact/{slug}-{contact}', [ContactsController::class, 'show'])->name('contact.show')->where([
        'contact' => '[0-9]+',
        'slug' => '[0-9a-z\-]+'
    ]);

    Route::get('/student', [StudentsController::class, 'index'])->name('student.index');
    Route::get('/student/{slug}-{student}', [StudentsController::class, 'show'])->name('student.show')->where([
        'student' => '[0-9]+',
        'slug' => '[0-9a-z\-]+'
    ]);

    Route::get('/teacher', [TeachersController::class, 'index'])->name('teacher.index');
    Route::get('/teacher/{slug}-{teacher}', [TeachersController::class, 'show'])->name('teacher.show')->where([
        'teacher' => '[0-9]+',
        'slug' => '[0-9a-z\-]+'
    ]);
});

// Auth routes
// Show register form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
//Create new user
Route::post('/users', [UserController::class, 'store'])->name('users');
// Log out user
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
