<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('halamanweb.home');
});

Route::get('index', function () {
    return view('index');
});
Route::get('fasilitas', function () {
    return view('halamanweb.fasilitas');
});
Route::get('galeri', function () {
    return view('halamanweb.galeri');
});
Route::get('kontak', function () {
    return view('halamanweb.kontak');
});
Route::get('booking', function () {
    return view('halamanweb.booking');
});
Route::get('pesantiket', function () {
    return view('halamanweb.pesantiket');
});
Route::get('cuaca', function () {
    return view('halamanweb.cuaca');
});