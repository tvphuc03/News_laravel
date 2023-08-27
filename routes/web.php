<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tincontroller;
use App\Http\Controllers\UserauthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoaiController;
use App\Http\Controllers\BaivietController;
use App\Http\Controllers\BinhluanController;
use Faker\Guesser\Name;

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

Route::get('/', [Tincontroller::class,'index']);
Route::get('/timkiem', [Tincontroller::class,'timkiem'])->name('timkiem');
Route::get('/baiviet/{id}', [Tincontroller::class,'baiviet']);
Route::get('/chitiet/{id}', [Tincontroller::class,'chitiet']);
Route::get('/gioithieu', function () {
return view('page.gioithieu');
});
Route::get('/lienhe', function () {
return view('page.lienhe');
});



// ADMIN
Route::get('/layout-a/home',[AdminController::class,'index']);
// Route::view('/admin','myauth.admin')->middleware('login.check')->name('admin');
Route::view('/layout-a/home','myauth.page.home')->middleware('login.check')->name('admin');
Route::view('/dangnhap','myauth.login');
Route::post('/dangnhap',[UserauthController::class,'login']);
Route::view('/dangnhap2','myauth.login3');
Route::post('/dangnhap2',[UserauthController::class,'login']);
Route::post('/dangxuat',[UserauthController::class,'logout'])->name('dangxuat');
Route::view('/dangki','myauth.register');
Route::post('/dangki',[UserauthController::class,'register'])->name('dangki');
Route::view('/dangki1','myauth.register1');
Route::post('/dangki',[UserauthController::class,'register'])->name('dangki');



// Lọai Tin
Route::get('/layout-a/loaitin',[LoaiController::class,'index']);
Route::get('/layout-a/loai-edit/{id}', [LoaiController::class, 'edit']);
Route::post('/layout-a/loai-edit/{id}', [LoaiController::class, 'edit__']);
Route::get('/layout-a/loai-add', [LoaiController::class, 'add']);
Route::post('/layout-a/loai-add', [LoaiController::class, 'add__']);
Route::post('/layout-a/loai-xoa', [LoaiController::class, 'xoa'])->name('loai-xoa');
Route::resource('/layout-a/loaitin', LoaiController::class);
Route::get('layout-a/loaitin/{id}/an', [LoaiController::class, 'an'])->name('loaitin-an');
Route::get('layout-a/loaitin/{id}/hien', [LoaiController::class, 'hien'])->name('loaitin-hien');


// Tin
Route::get('/layout-a/tintuc',[BaivietController::class,'index']);
Route::get('/layout-a/tintuc-edit/{id}', [BaivietController::class, 'edit']);
Route::post('/layout-a/tintuc-edit/{id}', [BaivietController::class, 'edit__']);
Route::get('/layout-a/tintuc-add', [BaivietController::class, 'add']);
Route::post('/layout-a/tintuc-add', [BaivietController::class, 'add__']);
Route::post('/layout-a/tintuc-xoa', [BaivietController::class, 'xoa'])->name('tintuc-xoa');
Route::resource('/layout-a/tintuc', BaivietController::class)->parameters(['tin' => 'tinId',]);// Đặt tên tham số cho ID của tin tức
Route::get('layout-a/tintuc/{id}/an', [BaivietController::class, 'an'])->name('tintuc-an');
Route::get('layout-a/tintuc/{id}/hien', [BaivietController::class, 'hien'])->name('tintuc-hien');

// Bình luận
Route::get('/layout-a/binhluan',[BinhluanController::class,'index']);
Route::post('/layout-a/binhluan-xoa', [BinhluanController::class, 'xoa'])->name('binhluan-xoa');
Route::resource('/layout-a/binhluan', BinhLuanController::class);


// brezee
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


