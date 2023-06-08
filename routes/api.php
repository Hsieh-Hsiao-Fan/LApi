<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthController;
use App\Http\Controllers\ObjectController;

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

// 使用者相關
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
Route::get('/gg', function () {
  return 123;
});

// 物件相關
Route::controller(ObjectController::class)->group(function () {
  Route::get('/objects', 'index');
  Route::get('/objects/{id}', 'show');
});


// 測試
// Route::middleware('auth:sanctum')->group(function () {
// });

Route::middleware('auth:sanctum')->get('/obj', function (Request $request) {
  return response()->json(
    array(
      'errCode' => 0,
      'datas' => array(
        array(
          'id' => 1,
          'title' => '大三房',
        ),
        array(
          'id' => 2,
          'title' => '幸福公寓',
        ),
        array(
          'id' => 3,
          'title' => '捷運宅',
        )
      )
    )
  );
});
