<?php

use Illuminate\Support\Facades\Route;

//Custom Imports
use App\Http\Middleware\EnsureUserIsLoggedIn as ensure;


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::redirect('/','/iAdmin');


//Custom Routes
Route::get('/iAdmin', function(){
    return view('for_login/loginView');
})->name('adminInventoryDashboard');

Route::get('/dashboard', function(){
    return view('for_login/dashboard');
})->name('adminInventoryDashboard');

Route::get('/items', function(){
    return view('for_login/items');
})->name('adminInventoryItems');

Route::get('/category', function(){
    return view('for_login/category');
})->name('adminInventoryCategory');
