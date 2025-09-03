<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
       if(Auth::user()->role == 'User')
       {
 return view('welcome');
       }
       else
       {
        return redirect('/adminpanel');
       }
    })->name('welcome');
});



//Admin Routes and Middlware

Route::middleware([Admin::class])->group(function(){
Route::get('/adminpanel', function () {
    return view('admin');
});
}); 

