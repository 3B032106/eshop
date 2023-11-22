<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::resource('Products', ProductController::class);

/* CRUD 路由的使用方式、URL、、HTTP方法、所串接的控制器&方法
products.index   Products                 GET           HEAD
products.show    Products/{Product}       GET           HEAD
products.create  Products/create          GET           HEAD
products.store   Products                 POST          POST
products.edit    Products/{Product}/edit  GET           HEAD
products.update  Products/{Product}       PUT           PATCH
products.destroy Products/{Product}       DELETE        DELETE
*/