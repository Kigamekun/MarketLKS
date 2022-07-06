<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController,CategoryController,TransactionController};
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
});


Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');


require __DIR__.'/auth.php';


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');


    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class,'index'])->name('category.index');
        Route::post('/store', [CategoryController::class,'store'])->name('category.store');
        Route::post('/update/{id}', [CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class,'destroy'])->name('category.delete');
    });
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class,'index'])->name('product.index');
        Route::post('/store', [ProductController::class,'store'])->name('product.store');
        Route::post('/update/{id}', [ProductController::class,'update'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class,'destroy'])->name('product.delete');
    });

    Route::prefix('transaction')->group(function () {
        Route::get('/', [TransactionController::class,'index'])->name('transaction.index');
        Route::post('/store', [TransactionController::class,'store'])->name('transaction.store');
        Route::post('/update/{id}', [TransactionController::class,'update'])->name('transaction.update');
        Route::get('/delete/{id}', [TransactionController::class,'destroy'])->name('transaction.delete');
    });
});






Route::get('/detail-product', [MarketController::class,'detailProduct'])->name('detail-product');
Route::get('/more', [MarketController::class,'more'])->name('more');
Route::post('/add-cart', [MarketController::class,'addCart'])->name('add-cart');
Route::get('/my-cart', [MarketController::class,'myCart'])->name('my-cart');
Route::post('/checkout', [MarketController::class,'checkout'])->name('checkout');
Route::get('/invoice', [MarketController::class,'invoice'])->name('invoice');
Route::get('/history-transaction', [MarketController::class,'historyTransaction'])->name('history-transaction');
