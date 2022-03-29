<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedisController;
use App\Http\Controllers\FormController;
use App\Models\Dokter;
use App\Models\Pasien;

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

Route::get('/rekamMedis', [MedisController::class, 'index']);

Route::get('/rekamMedis', [MedisController::class, 'index']) 
    ->middleware(['auth'])->name('rekamMedis');

Route::get('/rekamMedis/{rekamMedis:slug}', [MedisController::class, 'content']);

Route::get('/dokter/{dokter:slug}', function(Dokter $dokter){
    return view('rekamMedis',[
        'title' => 'Rekam Medis',
        'rekamMedis' => $dokter->rekamMedis,
        'name' => $dokter->name,
    ]);
});
Route::get('/pasien/{pasien:slug}', function(Pasien $pasien){
    return view('rekamMedis',[
        'title' => 'Rekam Medis',
        'name' => $pasien->name,
        'rekamMedis' => $pasien->rekamMedis,
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/confirm-password', function () {
    return view('auth.confirm-password');
})->middleware('auth')->name('password.confirm');


Route::get('/formulir', [FormController::class, 'input'])
    ->middleware(['auth'])->name('formulir');
    
Route::post('/proses', [FormController::class, 'proses']);

require __DIR__.'/auth.php';