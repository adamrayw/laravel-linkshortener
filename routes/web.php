<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShortLinkController;
use App\Models\Shortlink;
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

Route::get('/', [ShortLinkController::class, 'index']);

Route::get('/pages/about', [HomeController::class, 'about']);
Route::get('/pages/contact', [HomeController::class, 'contact']);
Route::get('/generate', [ShortLinkController::class, 'index']);
Route::post('/generate-link', [ShortLinkController::class, 'store']);

Route::get('/{code}', [ShortLinkController::class, 'shortenLink']);
