<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id('food_id');
            $table->string('image')->nullable()->comment('รูปภาพ');
            $table->string('name')->nullable()->comment('ชื่อเนื้อหา');
            $table->string('detail')->nullable()->comment('รายละเอียด');
            $table->string('price')->nullable()->comment('ราคา');
            // $table->integer('created_dy')->nullable()->comment('user ที่เพิ่ม');
            // $table->integer('updated_dy')->nullable()->comment('user ที่แก้ไข');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
};
