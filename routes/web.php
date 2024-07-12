<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\KategoriUmkmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UmkmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-details', [HomeController::class, 'portfolioDetails'])->name('portfolio-details');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/login', [LoginController::class, 'form'])->name('login');
Route::post('/login/do', [LoginController::class, 'ayoLogin'])->name('login.ayo');
Route::get('/register', [RegisterController::class, 'form'])->name('register');
Route::post('/register/save', [RegisterController::class, 'simpan'])->name('register.save');



Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::get('/admin/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
Route::post('/admin/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');
Route::get('/admin/umkm/{umkm}', [UmkmController::class, 'show'])->name('umkm.show');
Route::get('/admin/umkm/{umkm}/edit', [UmkmController::class, 'edit'])->name('umkm.edit');
Route::put('/admin/umkm/{umkm}', [UmkmController::class, 'update'])->name('umkm.update');
Route::delete('/admin/umkm/{umkm}', [UmkmController::class, 'destroy'])->name('umkm.destroy');


Route::get('/admin/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
Route::get('/admin/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('/admin/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
Route::get('/admin/provinsi/{provinsi}', [ProvinsiController::class, 'show'])->name('provinsi.show');
Route::get('/admin/provinsi/{provinsi}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::put('/admin/provinsi/{provinsi}', [ProvinsiController::class, 'update'])->name('provinsi.update');
Route::delete('/admin/provinsi/{provinsi}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');


Route::get('/admin/kabkota', [KabkotaController::class, 'index'])->name('kabkota.index');
Route::get('/admin/kabkota/create', [KabkotaController::class, 'create'])->name('kabkota.create');
Route::post('/admin/kabkota/store', [KabkotaController::class, 'store'])->name('kabkota.store');
Route::get('/admin/kabkota/{kabkota}', [KabkotaController::class, 'show'])->name('kabkota.show');
Route::get('/admin/kabkota/{kabkota}/edit', [KabkotaController::class, 'edit'])->name('kabkota.edit');
Route::put('/admin/kabkota/{kabkota}', [KabkotaController::class, 'update'])->name('kabkota.update');
Route::delete('/admin/kabkota/{kabkota}', [KabkotaController::class, 'destroy'])->name('kabkota.destroy');


Route::get('/admin/pembina', [PembinaController::class, 'index'])->name('pembina.index');
Route::get('/admin/pembina/create', [PembinaController::class, 'create'])->name('pembina.create');
Route::post('/admin/pembina/store', [PembinaController::class, 'store'])->name('pembina.store');
Route::get('/admin/pembina/{pembina}', [PembinaController::class, 'show'])->name('pembina.show');
Route::get('/admin/pembina/{pembina}/edit', [PembinaController::class, 'edit'])->name('pembina.edit');
Route::put('/admin/pembina/{pembina}', [PembinaController::class, 'update'])->name('pembina.update');
Route::delete('/admin/pembina/{pembina}', [PembinaController::class, 'destroy'])->name('pembina.destroy');


Route::get('/admin/kategori_umkm', [KategoriUmkmController::class, 'index'])->name('kategori_umkm.index');
Route::get('/admin/kategori_umkm/create', [KategoriUmkmController::class, 'create'])->name('kategori_umkm.create');
Route::post('/admin/kategori_umkm/store', [KategoriUmkmController::class, 'store'])->name('kategori_umkm.store');
Route::get('/admin/kategori_umkm/{kategori_umkm}', [KategoriUmkmController::class, 'show'])->name('kategori_umkm.show');
Route::get('/admin/kategori_umkm/{kategori_umkm}/edit', [KategoriUmkmController::class, 'edit'])->name('kategori_umkm.edit');
Route::put('/admin/kategori_umkm/{kategori_umkm}', [KategoriUmkmController::class, 'update'])->name('kategori_umkm.update');
Route::delete('/admin/kategori_umkm/{kategori_umkm}', [KategoriUmkmController::class, 'destroy'])->name('kategori_umkm.destroy');

