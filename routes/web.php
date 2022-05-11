<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardConttroller;
use App\Http\Controllers\Dataagama;
use App\Http\Controllers\DataKelas;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Datasiswa;
use App\Http\Controllers\Datajurusan;
use App\Http\Controllers\Dataperiode;

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


Route::middleware(['guest'])->group(function () {
    Route::view('/', 'auth.login')->name('login');
    Route::post('/auth-login', [HomeController::class, 'authenticate'])->name('auth-login');
});

Route::get('/coba', [HomeController::class,"coba"])->name('coba');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', "HomeController@dashboard");

    // Admin conttroller
    Route::prefix('admin')->group(function () {
        Route::any('/logout', [DashboardConttroller::class, 'logout'])->name('logout');

        Route::get('cobaexpreint',[Datasiswa::class,'cobaexpreint']);
        Route::get('dashboard', [DashboardConttroller::class, 'index'])->name('dashboard.index');

        Route::get('datasiswa',[Datasiswa::class,'index'])->name('dashboard.datasiswa');

        Route::any('datasiswaget',[Datasiswa::class,'datasiswaget'])->name('datasiswa.get');
        Route::any('datasiswaadd',[Datasiswa::class,'datasiswaadd'])->name("datasiswa.add");
        Route::any('datasiswadelete',[Datasiswa::class,'datasiswadelete'])->name('datasiswa.delete');
        Route::any('datasiswaupdate/{id}',[Datasiswa::class,'datasiswaupdate'])->name('datasiswa.update');

        Route::get('datakelas',[DataKelas::class,'index'])->name('datakelas.datakelas');

        Route::any('datakelasget',[DataKelas::class,'datakelasget'])->name('datakelas.get');
        Route::any('datakelasadd',[DataKelas::class,'datakelasadd'])->name('datakelas.add');
        Route::any('datakelasupdate/{id}',[DataKelas::class,'datakelasupdate'])->name('datakelas.update');
        Route::any('datakelasdelete',[DataKelas::class,'datakelasdelete'])->name('datakelas.delete');

        Route::get('datagama',[Dataagama::class,'index'])->name('datagama.datagama');
        
        Route::any('dataagamaget',[Dataagama::class,'dataagamaget'])->name('dataagama.get');
        Route::any('datagamaadd',[Dataagama::class,'dataagamaadd'])->name('dataagama.add');
        Route::any('dataagamaupdate/{id}',[Dataagama::class,'dataagamaupdate'])->name('dataagama.update');
        Route::any('dataagamadelete',[Dataagama::class,'dataagamadelete'])->name('dataagama.delete');

        Route::get('datajurusan',[Datajurusan::class,'index'])->name('datajurusan.datajurusan');

        Route::any('datajurusanget',[Datajurusan::class,'datajurusanget'])->name('datajurusan.get');
        Route::any('datajurusanadd',[Datajurusan::class,'datajurusanadd'])->name('datajurusan.add');
        Route::any('datajurusanupdate/{id}',[Datajurusan::class,'datajurusanupdate'])->name('datajurusan.update');
        Route::any('datajurusandelete',[Datajurusan::class,'datajurusandelete'])->name('datajurusan.delete');

        Route::get('dataperiode',[Dataperiode::class,'index'])->name('dataperiode.dataperiode');

        Route::any('dataperiodeget',[Dataperiode::class,'dataperiodeget'])->name('dataperiode.get');
        Route::any('dataperiodeadd',[Dataperiode::class,'dataperiodeadd'])->name('dataperiode.add');
        Route::any('dataperiodeupdate/{id}',[Dataperiode::class,'dataperiodeupdate'])->name('dataperiode.update');
        Route::any('dataperiodedelete',[Dataperiode::class,'dataperiodedelete'])->name('dataperiode.delete');

        Route::get('bayarspp',[DashboardConttroller::class,'bayarspp'])->name('bayarspp');

        Route::get('/profile', [Profile::class, 'index'])->name('profile');
    });

    // Tu conttroller
    Route::prefix('staff_tu')->group(function () {
        Route::any('/logout', [DashboardConttroller::class, 'logout'])->name('logout');

        Route::get('cobaexpreint',[Datasiswa::class,'cobaexpreint']);
        Route::get('dashboard', [DashboardConttroller::class, 'index'])->name('dashboard.index');

        Route::get('datasiswa',[Datasiswa::class,'index'])->name('dashboard.datasiswa');

        Route::any('datasiswaget',[Datasiswa::class,'datasiswaget'])->name('datasiswa.get');
        Route::any('datasiswaadd',[Datasiswa::class,'datasiswaadd'])->name("datasiswa.add");
        Route::any('datasiswadelete',[Datasiswa::class,'datasiswadelete'])->name('datasiswa.delete');
        Route::any('datasiswaupdate/{id}',[Datasiswa::class,'datasiswaupdate'])->name('datasiswa.update');

        Route::get('datakelas',[DataKelas::class,'index'])->name('datakelas.datakelas');

        Route::any('datakelasget',[DataKelas::class,'datakelasget'])->name('datakelas.get');
        Route::any('datakelasadd',[DataKelas::class,'datakelasadd'])->name('datakelas.add');
        Route::any('datakelasupdate/{id}',[DataKelas::class,'datakelasupdate'])->name('datakelas.update');
        Route::any('datakelasdelete',[DataKelas::class,'datakelasdelete'])->name('datakelas.delete');

        Route::get('datagama',[Dataagama::class,'index'])->name('datagama.datagama');
        
        Route::any('dataagamaget',[Dataagama::class,'dataagamaget'])->name('dataagama.get');
        Route::any('datagamaadd',[Dataagama::class,'dataagamaadd'])->name('dataagama.add');
        Route::any('dataagamaupdate/{id}',[Dataagama::class,'dataagamaupdate'])->name('dataagama.update');
        Route::any('dataagamadelete',[Dataagama::class,'dataagamadelete'])->name('dataagama.delete');

        Route::get('datajurusan',[Datajurusan::class,'index'])->name('datajurusan.datajurusan');

        Route::any('datajurusanget',[Datajurusan::class,'datajurusanget'])->name('datajurusan.get');
        Route::any('datajurusanadd',[Datajurusan::class,'datajurusanadd'])->name('datajurusan.add');
        Route::any('datajurusanupdate/{id}',[Datajurusan::class,'datajurusanupdate'])->name('datajurusan.update');
        Route::any('datajurusandelete',[Datajurusan::class,'datajurusandelete'])->name('datajurusan.delete');

        Route::get('dataperiode',[Dataperiode::class,'index'])->name('dataperiode.dataperiode');

        Route::any('dataperiodeget',[Dataperiode::class,'dataperiodeget'])->name('dataperiode.get');
        Route::any('dataperiodeadd',[Dataperiode::class,'dataperiodeadd'])->name('dataperiode.add');
        Route::any('dataperiodeupdate/{id}',[Dataperiode::class,'dataperiodeupdate'])->name('dataperiode.update');
        Route::any('dataperiodedelete',[Dataperiode::class,'dataperiodedelete'])->name('dataperiode.delete');

        Route::get('/profile', [Profile::class, 'index'])->name('profile');
    });

    Route::prefix('siswa')->group(function () {
        Route::any('/logout', [DashboardConttroller::class, 'logout'])->name('logout');

        Route::get('cobaexpreint',[Datasiswa::class,'cobaexpreint']);
        Route::get('dashboard', [DashboardConttroller::class, 'index'])->name('dashboard.index');

        Route::get('datasiswa',[Datasiswa::class,'index'])->name('dashboard.datasiswa');

        Route::any('datasiswaget',[Datasiswa::class,'datasiswaget'])->name('datasiswa.get');
        Route::any('datasiswaadd',[Datasiswa::class,'datasiswaadd'])->name("datasiswa.add");
        Route::any('datasiswadelete',[Datasiswa::class,'datasiswadelete'])->name('datasiswa.delete');
        Route::any('datasiswaupdate/{id}',[Datasiswa::class,'datasiswaupdate'])->name('datasiswa.update');

        Route::get('datakelas',[DataKelas::class,'index'])->name('datakelas.datakelas');

        Route::any('datakelasget',[DataKelas::class,'datakelasget'])->name('datakelas.get');
        Route::any('datakelasadd',[DataKelas::class,'datakelasadd'])->name('datakelas.add');
        Route::any('datakelasupdate/{id}',[DataKelas::class,'datakelasupdate'])->name('datakelas.update');
        Route::any('datakelasdelete',[DataKelas::class,'datakelasdelete'])->name('datakelas.delete');

        Route::get('datagama',[Dataagama::class,'index'])->name('datagama.datagama');
        
        Route::any('dataagamaget',[Dataagama::class,'dataagamaget'])->name('dataagama.get');
        Route::any('dataagamaadd',[Dataagama::class,'dataagamaadd'])->name('dataagama.add');
        Route::any('dataagamaupdate/{id}',[Dataagama::class,'dataagamaupdate'])->name('dataagama.update');
        Route::any('dataagamadelete',[Dataagama::class,'dataagamadelete'])->name('dataagama.delete');

        Route::get('bayarspp',[DashboardConttroller::class,'bayarspp'])->name('bayarspp');

        Route::get('/profile', [Profile::class, 'index'])->name('profile');
    });
    
    Route::view('/user-guide', 'dashboard.user_guide')->name('user_guide');
});
