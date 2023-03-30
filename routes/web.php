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

// Route::get('/', function () {
//     return view('welcome');
// });



/**
 * Home
 * @return view
 */
Route::get('/', function () {
    return view('home');
});


/**
 * Profile
 * @return view
 */
Route::get('profile', [ProfileController::class, 'getProfile']);
Route::get('create', [ProfileController::class, 'createProfile']);

/**
 * Qrcode
 * @return view
 */
Route::get('edit', [QrcodeController::class, 'editData']);
Route::get('scan', [QrcodeController::class, 'scanQrcode']);


Route::get('create/qrcode', [QrcodeController::class, 'createQrcode']);

Route::post('save', [ProfileController::class, 'saveData']);
