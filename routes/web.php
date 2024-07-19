<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
})->name('home');




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

    // Route::middleware('web')->group(function () {
    //     Route::get('/', function () {
    //         return view('welcome');
    //     });

    //     // مسیرهای وب اضافی
    // });
// Route::get('/home', [HomeController::class, 'index'])->name('web');


// Route::middleware(['web', 'auth'])->prefix('management')->group(function () {
//     // مسیرهای ادمین
//     require base_path('/routes/admin.php');
// });


\Auth::routes();

Route::get('/home', App\Livewire\Home\Home\Index::class)->name('home');
Route::get('/register', App\Livewire\Home\User\Register::class)->name('register');
