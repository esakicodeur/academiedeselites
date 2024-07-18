<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');

Route::get('/contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');
