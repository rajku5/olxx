<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/',[ItemController::class,"index"])->name('homepage');
Route::match(["get","post"],'/insert',[ItemController::class,"insert"])->name('insert');
Route::post("/insertcat",[ItemController::class,"insertCat"])->name('insertCat');