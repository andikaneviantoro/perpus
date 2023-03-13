<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudsController;
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

Route::get('/', [CrudsController::class, 'indexdua'])->name('cruds.indexdua');
Route::get('/cari',[CrudsController::class, 'cari'])->name('cruds.cari');


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Andika",
        "email" => "neviantoro2006.com@gmail.com",
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Auth::routes();


Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [CrudsController::class, 'index'])->name('cruds.index');
    Route::resource('/cruds', CrudsController::class);
    Route::get('/cruds', [CrudsController::class, 'create'])->name('cruds.create');
    Route::get('/cruds/show',[CrudsController::class, 'show'])->name('cruds.show');
    Route::get('/cruds/{id}/edit', [CrudsController::class, 'edit'])->name('cruds.edit');
    Route::post('/cruds/{id}/update', [CrudsController::class, 'update'])->name('cruds.update');
    Route::get('/cruds/{id}/destroy', [CrudsController::class, 'destroy'])->name('cruds.destroy');


});
