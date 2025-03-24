<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
///
// Hiển thị danh sách
Route::prefix('admin')->group(function () {
    Route::get('product', [ProductController::class,  'index']);
    // Xem chi tiết sản phẩm theo id
    Route::get('product/{id}', [ProductController::class,  'show']);
    // sửa sản phẩm theo id
    Route::get('edit/{id}', [ProductController::class,  'edit']);
    
    Route::post('update/{id}', [ProductController::class,  'update']);
    Route::get('add-product', [ProductController::class,  'create']);
    Route::post('store', [ProductController::class,  'store']);
    // Xóa sản phẩm theo id
    Route::post('delete/{id}', [ProductController::class,  'destroy']);

    Route::get('teacher', [TeacherController::class,  'index']);
    // Route::get('custom', [CustomerController::class,  'index']);
    Route::get('home',function(){
        return view('admin.index');

    } );

    


});


