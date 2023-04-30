<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ObjectService;

class ObjectController extends Controller
{
  public $ObjectService;

  public function __construct(ObjectService $ObjectService)
  {
    $this->ObjectService = $ObjectService;
  }
  /**
   * 物件列表
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $Request)
  {
    $d  = $this->ObjectService->objectList();
    return response()->json($d);
  }


  /**
   * 查看指定物件
   *
   * @param  Number  $id
   */
  public function show($id)
  {
    $d  = $this->ObjectService->getObjectById($id);
    return response()->json($d);
  }
}
