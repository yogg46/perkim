<?php

use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserMentController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Livewire\Pengajuan;
use App\Http\Livewire\Pengajuan\Index as PengajuanIndex;
use App\Http\Livewire\UserManagement\Index;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dark-mode-switcher/{id}', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'checkRole:2');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
//Route::get('/user-management', [App\Http\Controllers\UserMentController::class, 'index'])->name('usermanagement')->middleware('auth', 'checkRole:2');

Route::resource('user', UserMentController::class)->middleware('auth', 'checkRole:2');
// Route::resource('user', UserMentController::class)->middleware('auth', 'checkRole:2');

Route::any('/users', Index::class)->middleware('auth', 'checkRole:2')->name('users');

// Route::resource('pengajuan', PengajuanController::class)->middleware('auth');
//For adding an image
Route::get('/add-image', [ImageUploadController::class, 'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image', [ImageUploadController::class, 'storeImage'])
    ->name('images.store');

//For showing an image
Route::get('/view-image', [ImageUploadController::class, 'viewImage'])->name('images.view');

Route::any('/pengajuans', PengajuanIndex::class)->middleware('auth');
Route::get('/pengajuans/{slug}', Pengajuan::class)->middleware('auth');