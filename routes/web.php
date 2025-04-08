<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
=======

Route::get('/',[HomeController::class, 'index']);
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class, 'detail']);
Route::get('/dm-san-pham/{id}',[ProductController::class, 'categories']);
Route::get('/hello/{id}',[ProductController::class, 'hello']);


Route::get('/nguoi-dung', function(){
    $query=DB::table('users')
    ->select('id','name')
    ->orderBy('id' ,'desc');
    $data = $query->get();
    foreach($data as $user) echo "<p>{$user->name}</p>";


>>>>>>> 013d6b343c19b05fe850536925015459d24a7687
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
