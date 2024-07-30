<?php

use Illuminate\Support\Facades\Route;

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

//---------------------------------------HomePage---------------------------------------//

Route::get('/', App\Livewire\Admin\Home\Index::class)->name('admin.home');


// //---------------------------------------Settings---------------------------------------//
// //Settings Footer ETC
Route::get('/settings/footer/label', App\Livewire\Home\Admin\Settings\Footer\Lable::class)->name('admin.settings.footer.label');
Route::get('/settings/footer/social', App\Livewire\Home\Admin\Settings\Footer\Social::class)->name('admin.settings.footer.social');
Route::get('/settings/footer/logo', App\Livewire\Home\Admin\Settings\Footer\Logo::class)->name('admin.settings.footer.logo');



// //------------------------------------------Logs--------------------------------------------//
Route::get('/logs', App\Livewire\Admin\Logs\Index::class)->name('admin.logs');

//---------------------------------------Permissions---------------------------------------//
Route::get('/permissions', App\Livewire\Admin\permissions\Index::class)->name('admin.permissions');
Route::get('/permissions/edit/{permission}', App\Livewire\Admin\permissions\Edit::class)->name('admin.permissions.edit');
Route::get('/permissions/trashed', App\Livewire\Admin\Permissions\Trash::class)->name('admin.permissions.trash');
//---------------------------------------Roles---------------------------------------//
Route::get('/roles', App\Livewire\Admin\Roles\Index::class)->name('admin.roles');
Route::get('/roles/edit/{role}', App\Livewire\Admin\Roles\Edit::class)->name('admin.roles.edit');
Route::get('/roles/trashed', App\Livewire\Admin\Roles\Trash::class)->name('admin.roles.trash');
