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
