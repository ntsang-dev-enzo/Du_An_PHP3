<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


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


});
Route::get('/sinh-vien', function(){
    $query=DB::table('students')
    ->join('courses', 'students.course_id', '=', 'courses.id')
    ->select('students.name as name','students.code as code', 'courses.name as khoa');
    $data = $query->get();
    foreach($data as $std) echo "<p>{$std->code} - {$std->name} - {$std->khoa}</p>";


});