<?php

use App\Http\Controllers\landingController;
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

// Route::get('/', function () {
//     return view('landing.home');
// });

Route::get('/', [landingController::class, 'index'])->name('index');
Route::get('/pertandingan', [landingController::class, 'pertandingan'])->name('pertandingan');
Route::get('/support', [landingController::class, 'support'])->name('support');
Route::get('/blog', [landingController::class, 'blog'])->name('blog');
Route::get('/tentang-kami', [landingController::class, 'tentang_kami'])->name('tentang_kami');