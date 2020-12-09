<?php

use Illuminate\Support\Facades\Route;

# controller คือส่วนที่ใช้สำหรับประมวลผลอยู่เบื้องหลัง เทียบเท่ากับ backend 
# ต้องทำการเรียกใช้งาน use App\Http\Controllers\<ชื่อ controller> เมื่อมีการเรียกใช้งาน controller ที่ต้องการ
use App\Http\Controllers\BookController;  

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

Route::get('/', function () {
    //return "test";
    return view('welcome');
});

Route::get('/nong',function(){
    return view('nong');
});

Route::post('/nong-post',function(){
    return 'aaaaa';
});

## Call route name show-book โดยที่ route นี้จะไปเรียกใช้ controller ชื่อ BookController และเรียกใช้ function ที่ชื่อ index ของ BookController
## ซึ่งเราสามารถกำหนดให้ controller ทำการ return สิ่งที่เราต้องการออกมาเป็น text หรือ view ที่ทำการสร้างขึ้นมาได้ 
Route::get('/show-book',[BookController::class,'index']);

Route::post('/store-book',[BookController::class,'store']);

Route::post('/login',[BookController::class,'checkUser']);
