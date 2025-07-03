<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ControllerMhs;
Use App\Http\Controllers\ControllerMatakuliah;
Use App\Http\Controllers\ControllerMaster;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AuthController;
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
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/login', [AdminLoginController::class, 'form'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.proses');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Proteksi route dengan guard admin
Route::middleware('auth:web')->group(function () {
    Route::get('/main/telfon', [KontakController::class, 'index'])->name('contact.index');
    Route::post('/main/telfon', [KontakController::class, 'store'])->name('contact.store');
    Route::put('/main/telfon/{id}', [KontakController::class, 'update'])->name('contact.update');
});

Route::get('/', function () {
    return view('front-end/home');
});

Route::get('/about', function () {
    return view('front-end/about');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/latihan2', function () {
    return view('latihan2');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/master/master', function () {
    return view('master/master');
});

Route::get('/motor', function () {
    return view('front-end/motor');
});

Route::get('/daftar', function () {
    return view('front-end/daftar');
});

Route::get('/tim', function () {
    return view('front-end/tim');
});

Route::get('/alamat', function () {
    return view('front-end/alamat');
});

Route::get('/telfon', function () {
    return view('front-end/telfon');
});

Route::get('/main', function () {
    return view('admin/main');
})->middleware('auth')->name('admin.dashboard');

Route::resource('/main/kontak', \App\Http\Controllers\KontakController::class)->names([
    'index' => 'kontak.index',
    'create' => 'kontak.create',
    'store' => 'kontak.store',
    'show' => 'kontak.show',
    'edit' => 'kontak.edit',
    'update' => 'kontak.update',
    'destroy' => 'kontak.destroy'
]);


// Route::get('/main/kontak', function () {
//     return view('admin/kontak');
// });

Route::resource('/posts', \App\Http\Controllers\PostController::class);


use App\Http\Controllers\PostController;

Route::prefix('main')->middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    Route::get('/about', [PostController::class, 'about'])->name('about.motor');
});






Route::get('/mhs', [ControllerMhs::class,'index']);
Route::get('/matakuliah', [ControllerMatakuliah::class,'index']); // Corrected method name from 'matakuliah' to 'index'

Route::get('/mhs/tambah', [ControllerMhs::class,'tambahData']);
Route::get('/matakuliah/tambah', [ControllerMatakuliah::class, 'tambahData']);   // Corrected URL from '/mhs/tambah' to '/matakuliah/tambah'

Route::post('/mhs/simpan', [ControllerMhs::class,'simpan']);
Route::post('/matakuliah/simpan', [ControllerMatakuliah::class,'simpan']); // Corrected URL from '/mhs/simpan' to '/matakuliah/simpan'

//untuk url halaman ubah data beserta penamaan router
Route::get('/mhs/edit/{id}', [ControllerMhs::class,'edit']);
Route::post('/mhs/update', [ControllerMhs::class,'update'])->name('mhs.update'); // Corrected route name from 'matakuliah.update' to 'mhs.update'

// matkul
Route::get('/matakuliah/edit/{id}', [ControllerMatakuliah::class,'edit']); // Corrected URL from '/mhs/edit/{id}' to '/matakuliah/edit/{id}'
Route::post('/matakuliah/update', [ControllerMatakuliah::class,'update'])->name('matakuliah.update'); // Corrected URL from '/mhs/update' to '/matakuliah/update'

//untuk url halaman hapus data
Route::get('/mhs/hapus/{id}', [ControllerMhs::class,'hapus']);
Route::get('/matakuliah/hapus/{id}', [ControllerMatakuliah::class,'hapus']); // Corrected URL from '/mhs/hapus/{id}' to '/matakuliah/hapus/{id}'


//untuk url sesuaikan dengan a href pada page ex_main dan fungsi pada controller
Route::get('/master/mahasiswa', [ControllerMaster::class,'mahasiswa']);
Route::get('/master/matakuliah', [ControllerMaster::class,'matakuliah']);
Route::get('/master/nilai', [ControllerMaster::class,'nilai']);