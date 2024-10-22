<?php

use App\Http\Controllers\FamilyController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FamilyController::class,"index"])->name("home");
Route::get('/families/characters',[FamilyController::class,"table"])->name("families.table");
Route::get('/families/{slug}/{id}',[FamilyController::class,"show"])->name("families.show");
Route::get('/families/{slug}',[FamilyController::class,"list"])->name("families.list");

