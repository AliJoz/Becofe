<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('home',
    [HomeController::class, 'create'])
    ->name('home');


Route::middleware('web')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    // مسیرهای وب اضافی
});

// Route::middleware(['web', 'auth'])->prefix('management')->group(function () {
//     // مسیرهای ادمین
//     require base_path('/routes/admin.php');
// });

