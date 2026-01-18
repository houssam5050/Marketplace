<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PRoductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


Route::get('/PRoduct/index', [PRoductController::class, "index"])->name('products.index');
Route::get("/details/{id}", [PRoductController::class, "ProductId"]);


Route::get('/introduction', function (){
    return view('introduction');
} );
Route::get('/introduction', [IntroductionController::class, 'intro']);


Route::get('/test', [TestController::class, 'enter']);

Route::post('/logout', [LogoutController::class, 'out'])->name('logout');

//cart
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/add/{id}', [CartController::class, 'add']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove']);
});

Route::get('/order/{id}', [OrderController::class, 'store'])
    ->middleware('auth');



Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/home', function () {

    if (Auth::user() != null)
        return view('index');
    else
        return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::post('/favorits/toggle/{product}', [FavoriteController::class, 'toggle'])->name('favorits.toggle');
    Route::get('/favorits', [FavoriteController::class, 'list'])->name('favorits.list');
});

Route::get('/PRoduct/index', [FavoriteController::class, 'index'])->name('home');