<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-email', [HomeController::class, 'getCheckEmail']);
Route::post('/check-email', [HomeController::class, 'postCheckEmail'])->name('post-check-email');
Route::get('/add-new-email', [HomeController::class, 'addNewEmail']);
Route::get('/view-emails', [HomeController::class, 'viewEmails']);
Route::get('/single-email/{id}', [HomeController::class, 'checkSingleEmail']);
