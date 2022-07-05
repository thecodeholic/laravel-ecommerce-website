<?php
/**
 * User: Zura
 * Date: 7/4/2022
 * Time: 4:16 AM
 */


use Illuminate\Support\Facades\Route;

//Route::middleware('admin')->group(function() {
Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/login', [\App\Http\Controllers\Admin\LoginController::class, 'form']);
    Route::post('/login', [\App\Http\Controllers\Admin\LoginController::class, 'login'])
        ->name('admin.login');
});
//});
