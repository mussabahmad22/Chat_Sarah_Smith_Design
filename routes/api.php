<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/user', function (Request $request) {
    $validated = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);
    return $request;
});
Route::post('/login',[ApiController::class,'login']);
Route::post('/register',[ApiController::class,'register']);
Route::post('/update_profile',[ApiController::class,'update_profile']);
Route::post('/reset_password',[ApiController::class,'reset_password']);
Route::get('/forget_password',[ApiController::class,'forget_password']);
Route::get('/video_detail',[ApiController::class,'video_detail']);
Route::get('/videos',[ApiController::class,'videos_list']);
Route::get('/articles',[ApiController::class,'articles_list']);
Route::get('/article_detail',[ApiController::class,'article_detail']);
Route::get('/youtube_videos',[ApiController::class,'youtube_list']);
Route::get('/youtube_video_detail',[ApiController::class,'youtube_detail']);
Route::get('/poll',[ApiController::class,'poll']);
Route::post('/ans_poll',[ApiController::class,'ans_poll']);
Route::post('/comment_poll',[ApiController::class,'comment_poll']);
Route::get('/notifications',[ApiController::class,'notifications']);
Route::get('/counter',[ApiController::class,'counter']);
Route::get('/get_description',[ApiController::class,'get_description']);
