<?php

use App\Http\Controllers\ProfileController;
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

/* CRUD 路由的使用方式、URL、、HTTP方法、所串接的控制器&方法
products.index   Products                 GET           HEAD　　　->　　路由的作用：顯示所有 products 資料
products.show    Products/{Product}       GET           HEAD　　　->　　路由的作用：顯示 products 的單一筆ID資料
products.create  Products/create          GET           HEAD　　　->　　路由的作用：新增新的 products 頁面
products.store   Products                 POST          POST　　　->　　路由的作用：新增 products 頁面到資料庫
products.edit    Products/{Product}/edit  GET           HEAD　　　->　　路由的作用：編輯單一筆資料的 products 頁面
products.update  Products/{Product}       PUT           PATCH　 　->　　路由的作用：更新 products 資料到資料庫
products.destroy Products/{Product}       DELETE        DELETE　　->　　路由的作用：刪除 products 的資料
*/

Route::get('Products', [ProductController::class, 'index']);
Route::get('Products/{Product}', [ProductController::class, 'show']);
Route::get('Products/create', [ProductController::class, 'create']);
Route::post('Products', [ProductController::class, 'store']);
Route::get('Products/{Product}/edit', [ProductController::class, 'edit']);
Route::patch('Products/{Product}', [ProductController::class, 'update']);
Route::delete('Products/{Product}', [ProductController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
