<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HighChartController;
use App\Mail\MyTestMail;
use App\Http\Controllers\GooglePieController;

Route::get('laravel-google-pie-chart', [GooglePieController::class, 'index']);

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
  
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::get('/our_school',function(){
	return view('best_school ');
});
Route::get('donut-chart',[HighChartController::class,'donutChart']);

Route::get('/updated',function(){
	return view('updated');
});
