<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\SuratKuasa;
use App\Http\Livewire\izinImpor;
use App\Http\Livewire\Admin\ManageUser;
use App\Http\Livewire\DokumenPabean;
use App\Http\Livewire\CreateDokumenPabean;

use App\Http\Controllers\EditDokumenPabean;
use App\Http\Livewire\DatangBarang;
use App\Http\Livewire\DataDokumen;
use App\Http\Livewire\DataPeti;
use App\Http\Livewire\DataKemasan;

use App\Http\Livewire\Ppftz;
use App\Http\Livewire\Home;

use App\Http\Livewire\Admin\Config;

use App\Http\Livewire\Admin\Config\Country as ConfigCountry;
use App\Http\Livewire\Admin\Config\Valuta as ConfigValuta;
use App\Http\Livewire\Admin\Config\DocumentCode as ConfigDocumentCode;
use App\Http\Livewire\Admin\Config\CaraPengangkutan as ConfigCaraPengangkutan;
use App\Http\Livewire\Admin\IzinImpor as AdminIzinImpor;
use App\Http\Livewire\Admin\SuratKuasa as SuratKuasaAdmin;
use App\Http\Livewire\Admin\Home as ConfigHome;

// Route::redirect('/', 'dashboard');

/**
 * App Routes
 */
Route::middleware('auth')->group(function () {
    Route::get('/', Home::class);
    Route::get('/dashboard', Dashboard::class);
    Route::get('/profile', Profile::class);
    Route::get('/suratkuasa', SuratKuasa::class);
    Route::get('/izinimpor', IzinImpor::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/profile', Profile::class);
    Route::get('/suratkuasa', SuratKuasa::class);
    Route::get('/izinimpor', IzinImpor::class);
    Route::get('/ppftz', DokumenPabean::class);

    Route::get('/dokumen-pabean', DokumenPabean::class);
    // Route::get('/create-dokumen-pabean/{nomor_aju_pabean}', CreateDokumenPabean::class)->name('edit-dokumen-pabean');

    Route::get('/edit-dokumen-pabean/{nomor_aju_pabean}', [EditDokumenPabean::class, 'index'])->name('edit-pabean');;
    Route::get('/edit-data-barang/{nomor_aju_pabean}', DatangBarang::class)->name('edit-barang');
    Route::get('/edit-data-dokumen/{nomor_aju_pabean}', DataDokumen::class)->name('edit-dokumen');
    Route::get('/edit-data-peti/{nomor_aju_pabean}', DataPeti::class)->name('edit-peti');
    Route::get('/edit-data-kemasan/{nomor_aju_pabean}', DataKemasan::class)->name('edit-kemasan');

    Route::get('/admin', Home::class);

    Route::get('/admin/users', ManageUser::class);

    Route::get('/admin/config', Config::class);
    Route::get('/admin/config/country', ConfigCountry::class)->name('country-config');
    Route::get('/admin/config/valuta', ConfigValuta::class)->name('valuta-config');
    Route::get('/admin/config/document-code', ConfigDocumentCode::class)->name('document-code-config');
    Route::get('/admin/config/cara-pengangkutan', ConfigCaraPengangkutan::class)->name('cara-pengangkutan-config');
    Route::get('/admin/config/home', ConfigHome::class)->name('home-config');


    Route::get('/admin/suratkuasa', SuratKuasaAdmin::class);
    Route::get('/admin/izinimpor', AdminIzinImpor::class);
});

// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth','admin'])
//     ->group(function(){
//         Route::get('/', ['App\Http\Controllers\Admin\DashboardController', 'index'])->name('admin-dashboard');
//         Route::resource('user', '\App\Http\Controllers\Admin\UserController');
//         Route::resource('request', '\App\Http\Controllers\Admin\RequestsController');
// });

/**
 * Authentication
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');
});
