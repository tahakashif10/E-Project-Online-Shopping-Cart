<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
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
Route::post('/delete/{id}',[Admin::class,('delete')]);




Route::post('/uploadproduct',[Admin::class,('uploadproduct')]);
Route::post('/contact',[User::class,('contact')]);
Route::get('/adminpanel',[User::class,('fetch')]);
Route::post('/delete/{userid}',[User::class,('deleterecord')]);

Route::get('/addtocart/{id}',[User::class,('addtocart')]);
Route::get('/mylist',[User::class,('getitems')]);

Route::get('/upload_product', function () {
    return view('admin.upload_product');
});
Route::get('/viewproduct', [Admin::class,('getproducts')]);
Route::get('/contactqueries',[User::class,('fetch')]);
Route::get('/allproducts',[User::class,('getproducts')]);

