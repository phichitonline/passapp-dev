<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertypes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('type',10);
            $table->string('usertype');
            $table->timestamps();
        });

        DB::table('usertypes')->insert(
            array(
                ['type'=> '0','usertype'=> 'Super Admin'],
                ['type'=> '1','usertype'=> 'ผู้ดูแลระบบ'],
                ['type'=> '2','usertype'=> 'เจ้าหน้าที่พัสดุ'],
                ['type'=> '3','usertype'=> 'เจ้าหน้าที่ทั่วไป']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usertypes');
    }
};
