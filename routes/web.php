<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LaporanController;






// --Global Form Pendaftaran Peserta
Route::get('/', [FormController::class, 'create']);
Route::resource('formulir', FormController::class);


// Login Dashboard PPKD JP
Route::get('signin', [AuthController::class, 'index']);
Route::post('action-login', [\App\Http\Controllers\AuthController::class, 'actionLogin'])->name('action-login');
Route::get('logout', function(){

    Auth::logout();
    alert()->warning('See You Next Time','We Hope You Back Again');
    return redirect()->to('signin');
})->name('logout');


// Route Khusus Administrator
Route::middleware(['checkLevel: 1 , 2, 3, 4, 5'])->group(function () {


    // Route Report
    Route::resource('reports', ReportController::class);

    // Route Level dan User
    Route::resource('levels', LevelController::class);
    Route::delete('levels/softdelete/{id}', [LevelController::class, 'softdelete'])->name('levels.softdelete');
    Route::resource('users', UserController::class);
    Route::delete('users/softdelete/{id}', [UserController::class, 'softdelete'])->name('users.softdelete');
    // Route::delete('users/{id_user}/edit/{id_jurusan}', [UserController::class, 'destroy'])->name('user.userJurusan.destroy');

    // Route Gelombang
    Route::resource('gelombang', GelombangController::class);
    Route::delete('gelombang/softdelete/{id}', [GelombangController::class, 'softdelete'])->name('gelombang.softdelete');
    Route::put('/update-status-gelombang/{id}', [GelombangController::class, 'updateStatusGelombang'])->name('updateStatusGelombang');

    // Route Jurusan
    Route::resource('jurusan', JurusanController::class);
    Route::delete('jurusan/softdelete/{id}', [JurusanController::class, 'softdelete'])->name('jurusan.softdelete');

    
});

// Route Dashboard
    Route::resource('dashboard', DashboardController::class);
    
    // Route Peserta
    Route::resource('peserta', PesertaController::class);
    Route::get('/peserta/{id}/send-whatsapp', [PesertaController::class, 'sendWhatsAppMessage'])->name('peserta.sendWhatsApp');
    Route::get('filter', [PesertaController::class, 'filter'])->name('peserta.filter');
    Route::get('wawancara', [PesertaController::class, 'wawancara'])->name('peserta.wawancara');
    Route::get('lolos', [PesertaController::class, 'lolos'])->name('peserta.lolos');
    Route::get('gagal', [PesertaController::class, 'gagal'])->name('peserta.gagal');
    Route::put('/update-status/{id}', [PesertaController::class, 'updateStatus'])->name('updateStatus');
    Route::post('/update-all-status', [PesertaController::class, 'updateAllStatus'])->name('peserta.updateAllStatus');



