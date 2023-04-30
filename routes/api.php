<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthController;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

  // echo 123;
  // die;
  // $d = $request->user()->currentAccessToken()->delete();
  // $d = $request->user()->currentAccessToken();
  // return response()->json($d);
  // dd($d);
  return $request->user();
});

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

Route::get('object', function (Request $request) {


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

Route::post('tt', function (Request $request) {

  return response()->json(array('test' => 1));
});
