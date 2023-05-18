<?php 
// use Route;
use Illuminate\Http\Request;
use Dourjoy\Contact\Http\Controllers\ContactController;
Route::get('/contact',[ContactController::class,'index']);
Route::post('contact',[ContactController::class,'send'])->name('contact');