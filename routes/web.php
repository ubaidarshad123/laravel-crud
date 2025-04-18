<?php

use App\Http\Controllers\Crud;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('view',[Crud::class , 'create'])->name('view-user');



?>