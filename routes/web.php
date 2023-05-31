<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;        
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Schema;


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
Route::get('/average', function () {
    return view('average');
});

Route::post('/average', function (Illuminate\Http\Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $average = ($num1 + $num2) / 2;
    return "Điểm trung bình của $num1 và $num2 là $average.";
})->name('average');

// Route::get('/welcome',function(){
//     return 'caho ban den voi lop pnv';
// });
Route::get('/welcome' ,[App\Http\Controllers\UserController::class,'loan']);

Route::get('/loan', [App\Http\Controllers\UserController ::class,"index"]);
Route::post('/loan', [App\Http\Controllers\UserController ::class,"tinh"]);

Route::get('/form',[App\Http\Controllers\SingupController::class,"index"]);
Route::post('/form',[App\Http\Controllers\SingupController::class,"displayInfor"]);



Route::get('/addproduct',[ProductsController::class,"showAddForm"])->name('addproduct');

Route::post('/addproduct',[ProductsController::class,"creatSession"]);

Route::get('showproducts',[ProductsController::class,"showProduct"])->name('showproducts');

Route::get('/trangchu',[PageController::class,'getIndex']);
 Route::get('database',function(){
    Schema::create('loaisanpham',function($table){
        $table->increments('id');
        $table->string('ten',200);


    });
    echo "da thuc hien tao bang thanh cong";
 });