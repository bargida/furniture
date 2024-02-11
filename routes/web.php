<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */
// Route::prefix('pages')->name('pages.')->group(function(){
//     Route::get('/about', [PagesController::class, 'about'])->name('about');
//     Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
//     Route::get('/design', [PagesController::class, 'design'])->name('design');
//     Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
// });


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('tags', TagController::class);
    
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

   
