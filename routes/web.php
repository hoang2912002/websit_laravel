<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{ten}/{tuoi?}', function ($ten,$tuoi = "") {
//     //-Trong laravel không có $ mà sẽ xài {} để hiểu là truyền vào 1 cái gì đó
//     //--{ten} là lấy dữ liệu từ trên thanh địa chỉ về sau đó truyền vào function 
//     //--với biến là $ten rồi in ra 
//     echo "Welcome to Laravel - $ten, $tuoi";

//     // return view('welcome');
//     //welcome là tên của file luôn
// });

// Route::get('/{ten}/{tuoi?}', [WelcomeController::class, 'welcome']);
Route::get('/',[WelcomeController::class,'form']);
Route::post('/post',[WelcomeController::class,'post']);
