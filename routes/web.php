<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QrcodeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/**
 * Profile
 * @return view
 */
Route::get('profile/{name}', [ProfileController::class, 'getProfile']);
Route::get('create', [ProfileController::class, 'createProfile']);
Route::post('save', [ProfileController::class, 'saveData']);

/**
 * Qrcode
 * @return view
 */
Route::get('edit', [QrcodeController::class, 'editData']);
Route::get('scan', [QrcodeController::class, 'scanQrcode'])->name('scan');
Route::get('create/qrcode', [QrcodeController::class, 'createQrcode']);
