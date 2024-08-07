<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ImageController;
Route::get('/', function () {
    return view('welcome');
});


Route::view('add','addStudent');

Route::post('add',[StudentController::class,'add']);



Route::get('list',[StudentController::class,'list']);
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('edit-student/{id}',[StudentController::class,'editStudent']);

Route::get('search',[StudentController::class,'search']);
Route::post('deletMulti',[StudentController::class,'deleteMulti']);


Route::view('upload','upload');
Route::post('upload',[ImageController::class,'upload']);
Route::get('imageList',[ImageController::class,'list']);




Route::view('about','about');
Route::view('home','home');
Route::view('admin','admin');