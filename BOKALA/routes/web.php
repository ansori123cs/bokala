<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TempatController;
use App\Models\category;
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

Route::get('/', function (category $category) {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'category' => category::all(),
        'tempat' => category::all(),
    ]);
});
Route::get('/tempat', [TempatController::class, 'index']);
Route::get('/detail/{tempat}', [TempatController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/category/{category:namaKategori}', function (category $category) {
    return view('category', [
        'title' => $category->namaKategori,
        'active' => 'categories',
        'category' => $category->namaKategori,
        'tempat' => $category->tempats,

    ]);
});
