<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/product', [AdminController::class, 'product']);

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::get('/showproduct', [AdminController::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class, 'updateview']);

Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::get('/search', [HomeController::class, 'search']);

Route::post('/add-to-cart/{id}', [HomeController::class, 'addcart'])->middleware('auth');

Route::get('/showcart', [HomeController::class, 'showcart']);

Route::get('/remove_cart/{id}', [HomeController::class, 'removecart']);

Route::post('/checkout', [HomeController::class, 'confirmorder']);

Route::get('/showorder', [AdminController::class, 'showorder']);

Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

Route::get('/products', [HomeController::class, 'products']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');

});

Route::middleware(['auth'])->group(function () {

    Route::get('/account', [AccountController::class, 'index'])->name('account');

    Route::post('/account/update', [AccountController::class, 'update'])
        ->name('account.update');

});

Route::get('/aboutus', function () {
    return view('user.aboutus');
});

Route::get('/optimize', function () {
    Artisan::call('optimize:clear');
    return 'Cleared!';
});

Route::get('/migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Migration completed';
});
