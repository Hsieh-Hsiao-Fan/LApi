<?php

namespace App\Http\Services;

use App\Models\UserSavedObject;

class CustomerObjectService
{
    public $UserSavedObject;

    public function __construct(UserSavedObject $UserSavedObject)
    {
        $this->UserSavedObject = $UserSavedObject;
    }


    /**
     * 根據顧客流水號，找出該顧客收藏的物件
     * 
     * @param Number $id 流水號
     */
    public function getObjectById($id)
    {
        return $this->UserSavedObject
            ->join('objects', 'user_saved_object.object_id', '=', 'objects.id')
            ->select('objects.*')
            ->where('user_saved_object.user_id', $id)
            ->get();
    }
}
