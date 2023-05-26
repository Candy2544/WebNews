<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
//path db builder
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use App\Http\Controllers\UploadController;
use App\Models\Info;
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

// เรียกข้อมูลแบบ eloquent เชื่อมกับ models 
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        //รับค่าจาก models\user
        $user = User::all();
        return view('dashboard', compact('user'));
    })->name('dashboard');
});


// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     $user = DB::table('users')->get();//users ในที่นี้หมายถึงตารางที่จะนำข้อมูลมา
//     return view('dashboard', compact('users'));
// })->name('dashboard');

//require data form database 
// Route::get('/info',[InfoController::class,'index'])->name('info1') ;
Route::get('/info/all',[InfoController::class,'getinfo']) ->name('info');


//upload data to database
Route::get('/info',[UploadController::class,'index']) -> name('addInfo');
Route::post('/info/upload',[UploadController::class,'update']) -> name('upload');
