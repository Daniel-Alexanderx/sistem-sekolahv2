<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Manajemen data siswa (Action)
Route::name('students.')->prefix('students')->group(function(){

    // Halaman Daftar siswa
Route::get('/', [StudentController::class, 'index'])->name('index');

// Halaman Detail Siswa
Route::get('/{id}', [StudentController::class, 'show'])->name('show');

// Halaman Tambah Siswa
Route::get('/create', [StudentController::class, 'create'])->name('create');


// Halaman Edit Siswa
Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

//Logika Tambah Siswa
Route::post('/', [StudentController::class, 'store'])->name('store');

// Logika edit siswa
Route::put('/{id}', [StudentController::class, 'update'])->name('update');;

//Logika Hapus Siswa
Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});



//Manajemen data Guru (Action)
Route::name('teachers.')->prefix('teachers')->group(function(){

    // Halaman Daftar Guru
Route::get('/', [TeacherController::class, 'index'])->name('index');

// Halaman Detail Guru
Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

// Halaman Tambah Guru
Route::get('/create', [TeacherController::class, 'create'])->name('create');


// Halaman Edit Guru
Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

//Logika Tambah Guru
Route::post('/', [TeacherController::class, 'store'])->name('store');

// Logika edit Guru
Route::put('/{id}', [TeacherController::class, 'update'])->name('update');;

//Logika Hapus Guru
Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});


