<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DropdownController;
use Illuminate\Support\Facades\Route;
//path db builder
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\TypeInfoController;
use App\Http\Controllers\ViewController;
use App\View\Components\CardComponent;
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

//require data form database 
Route::get('/info',[InfoController::class,'index'])->name('showinfo');
Route::get('/info/all',[InfoController::class,'getinfo']) ->name('info');

//upload data to database
Route::post('/info/upload',[UploadController::class,'update']) -> name('upload');

//require typeinfo 
Route ::post('/type',[TypeInfoController::class,'index']) -> name('type');

Route::get('/info/upload',[UploadController::class,'dropdown']) -> name('dropdown');  