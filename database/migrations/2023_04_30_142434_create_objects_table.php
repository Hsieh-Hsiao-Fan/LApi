<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->char('title', 100)->comment('物件名稱');
            $table->char('obj_no', 10)->comment('物件編號');
            $table->integer('price')->unsigned()->comment('價格');
            $table->tinyInteger('launch')->unsigned()->default(1)->comment('起停用:0.停用,1.啟用');
            $table->integer('sort')->unsigned()->default(100)->comment('排序');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objects');
    }
}
