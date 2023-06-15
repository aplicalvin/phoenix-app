<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/service/detail', function () {
    return view('serviceItem');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/product/detail', function () {
    return view('productItem');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/product', function () {
    return view('admin/admProduct');
});

Route::get('/admin/product/add', function () {
    return view('admin/create/admProductAdd');
});

Route::get('/admin/product/edit', function () {
    return view('admin/update/admProductEdit');
});

Route::get('/admin/service', function () {
    return view('admin/admService');
});

Route::get('/admin/service/add', function () {
    return view('admin/create/admServiceAdd');
});

Route::get('/admin/service/edit', function () {
    return view('admin/update/admServiceEdit');
});

// Authentification

Route::get('/login', function () {
    return view('auth/admLogin');
});

Route::get('/logout', function () {
    return view('admin/dashboard');
});