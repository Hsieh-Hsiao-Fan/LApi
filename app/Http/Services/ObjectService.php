<?php

namespace App\Http\Services;

use App\Models\Objects;

class ObjectService
{
  public $Objects;
  public function __construct(Objects $Objects)
  {
    $this->Objects = $Objects;
  }

  /**
   * 物件列表
   */
  public function objectList()
  {
    return $this->Objects::all();
  }

  /**
   * 找出指定物件
   * 
   * @param Number $id 流水號
   */
  public function getObjectById($id)
  {
    return $this->Objects::find($id);
  }
}
