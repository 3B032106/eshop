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
products.index   Products                 GET           HEAD　　　->　　路由的作用：顯示所有 products 資料
products.show    Products/{Product}       GET           HEAD　　　->　　路由的作用：顯示 products 的單一筆ID資料
products.create  Products/create          GET           HEAD　　　->　　路由的作用：新增新的 products 頁面
products.store   Products                 POST          POST　　　->　　路由的作用：新增 products 頁面到資料庫
products.edit    Products/{Product}/edit  GET           HEAD　　　->　　路由的作用：編輯單一筆資料的 products 頁面
products.update  Products/{Product}       PUT           PATCH　 　->　　路由的作用：更新 products 資料到資料庫
products.destroy Products/{Product}       DELETE        DELETE　　->　　路由的作用：刪除 products 的資料
*/