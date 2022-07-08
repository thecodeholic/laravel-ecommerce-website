<?php
/**
 * User: Zura
 * Date: 7/4/2022
 * Time: 4:16 AM
 */


use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
        Route::resource('products',ProductController::class);
    });
    Route::middleware(['admin.guest'])->group(function () {
        Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class, 'form'])->name('admin.login');
        Route::post('/login', [\App\Http\Controllers\Admin\LoginController::class, 'login']);
    });
});
