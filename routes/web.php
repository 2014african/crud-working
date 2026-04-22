<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/colors', function () {
    $colors = ['red', 'blue', 'green', 'yellow'];

    return view('colors', ['colors' => $colors]);
});
Route::get('/display/car', function () {
    $car = Car::create(BMW, 6767, 1233123);
    echo "<p>Marka: </p>";
    echo "<p>Gads: </p>";
    echo "<p>Nobraukums: </p>";
});

Route::put('posts/{post}/status', [PostController::class, 'statusUpdate'])->name('status.update');
Route::view('/about', 'about.about')->name('about');
Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('contacts', [ContactController::class, 'index'])->name('contact_index');
Route::get('contact/create', [ContactController::class, 'create'])->name('contact_create');
Route::get('posts', [PostController::class, 'index'])->name('index');
Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::post('posts', [PostController::class, 'store'])->name('store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('edit');
Route::put('posts/{post}/update', [PostController::class, 'update'])->name('update');
Route::delete('posts/{post}/destroy', [PostController::class, 'destroy'])->name('destroy');
Route::get('posts/{post}', [PostController::class, 'show'])->name('show');
