<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WelcomeController;
use App\Models\Student;
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
// Route::get('/',[Controller::class,'Controller']);
// Route::get('/',[WelcomeController::class,'index']);
// // Route::get('/',[WelcomeController::class,'form']);
// Route::post('/post',[WelcomeController::class,'post']);
// Route::get('/list',[WelcomeController::class,'action']);

Route::get('/',[StudentController::class,'index']);

Route::get('/create',[StudentController::class,'create'])->name('create');
//->name('create') ở đây nghĩa là đặt  cho cái route này 1 cái tên  là 'create'
// để mà sau này mình chỉ cần đổi giá trị của route đấy thì tất cả chỗ khác sẽ nhận 

Route::post('/create',[StudentController::class,'store'])->name('store');
//k cần phải đổi uri '/create' thành '/post' vì mình xài method post là nó đã hiểu là tạo 1 cái gì đó r 