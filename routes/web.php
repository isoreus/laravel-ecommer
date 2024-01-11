<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
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

Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');

Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');
Route::get('/urun/detay', [PageController::class, 'urunDetay'])->name('urunDetay');

Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');

Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

Route::get('/sepet',[PageController::class, 'basket'])->name('sepet');