<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SasaranKerjaPegawaiController;
use App\Http\Controllers\KKPAktivitasController;
use App\Http\Controllers\KKPIKUController;
use App\Http\Controllers\RealisasiAnggaranController;
use App\Http\Controllers\PerilakuController;
use App\Http\Controllers\KKPIKIController;
use App\Http\Controllers\KKPIKPController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/**
 * /dashboard/sasaran_kerja_pegawai/skp            (GET)
 * /dashboard/sasaran_kerja_pegawai/skp/create     (GET)
 * /dashboard/sasaran_kerja_pegawai/skp            (POST)
 * /dashboard/sasaran_kerja_pegawai/skp/{skp}      (GET)
 * /dashboard/sasaran_kerja_pegawai/skp/{skp}/edit (GET)
 * /dashboard/sasaran_kerja_pegawai/skp/{skp}      (PUT/PATCH)
 * /dashboard/sasaran_kerja_pegawai/skp/{skp}      (DELETE)
 */
Route::resource('dashboard/sasaran_kerja_pegawai/skp', SasaranKerjaPegawaiController::class);

/**
 * /dashboard/komponen_penilaian_pekerjaan/aktiv            (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktiv/create     (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktiv            (POST)
 * /dashboard/komponen_penilaian_pekerjaan/aktiv/{aktiv}      (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktiv/{aktiv}/edit (GET)
 * /dashboard/komponen_penilaian_pekerjaan/aktiv/{aktiv}      (PUT/PATCH)
 * /dashboard/komponen_penilaian_pekerjaan/aktiv/{aktiv}      (DELETE)
 */
Route::resource('dashboard/komponen_penilaian_pekerjaan/aktiv', KKPAktivitasController::class);

/**
 * /dashboard/skp            (GET)
 * /dashboard/skp/create     (GET)
 * /dashboard/skp            (POST)
 * /dashboard/skp/{skp}      (GET)
 * /dashboard/skp/{skp}/edit (GET)
 * /dashboard/skp/{skp}      (PUT/PATCH)
 * /dashboard/skp/{skp}      (DELETE)
 */
Route::resource('dashboard/komponen_penilaian_pekerjaan/iku', KKPIKUController::class);

/**
 * /dashboard/skp            (GET)
 * /dashboard/skp/create     (GET)
 * /dashboard/skp            (POST)
 * /dashboard/skp/{skp}      (GET)
 * /dashboard/skp/{skp}/edit (GET)
 * /dashboard/skp/{skp}      (PUT/PATCH)
 * /dashboard/skp/{skp}      (DELETE)
 */
Route::resource('dashboard/komponen_penilaian_pekerjaan/realisasi_anggaran', RealisasiAnggaranController::class);

/**
 * /dashboard/skp            (GET)
 * /dashboard/skp/create     (GET)
 * /dashboard/skp            (POST)
 * /dashboard/skp/{skp}      (GET)
 * /dashboard/skp/{skp}/edit (GET)
 * /dashboard/skp/{skp}      (PUT/PATCH)
 * /dashboard/skp/{skp}      (DELETE)
 */
Route::resource('dashboard/komponen_penilaian_pekerjaan/perilaku', PerilakuController::class);

/** indikator_kinerja_individu
 * /dashboard/skp            (GET)
 * /dashboard/skp/create     (GET)
 * /dashboard/skp            (POST)
 * /dashboard/skp/{skp}      (GET)
 * /dashboard/skp/{skp}/edit (GET)
 * /dashboard/skp/{skp}      (PUT/PATCH)
 * /dashboard/skp/{skp}      (DELETE)
 */
Route::resource('dashboard/komponen_penilaian_pekerjaan/iki', KKPIKIController::class);

/** indikator_kinerja_individu
 * /dashboard/skp            (GET)
 * /dashboard/skp/create     (GET)
 * /dashboard/skp            (POST)
 * /dashboard/skp/{skp}      (GET)
 * /dashboard/skp/{skp}/edit (GET)
 * /dashboard/skp/{skp}      (PUT/PATCH)
 * /dashboard/skp/{skp}      (DELETE)
 */
Route::resource('dashboard/komponen_penilaian_pekerjaan/ikp', KKPIKPController::class);
