<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/get-list", [App\Http\Controllers\HomeController::class, "getList"])->name("list");
Route::post("/save-producto", [App\Http\Controllers\HomeController::class, "saveProducto"])->name("save");
Route::delete("/delete/producto/{id}", [App\Http\Controllers\HomeController::class, "deleteProducto"])->name("delete");
Route::post("/update-producto", [App\Http\Controllers\HomeController::class, "updateProducto"])->name("update");
