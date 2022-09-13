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
        Schema::create('departments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('depcode',10);
            $table->string('dep_name');
            $table->timestamps();
        });

        DB::table('departments')->insert(
            array(
                ['depcode'=> 'A001','dep_name'=> 'ฝ่ายบริหาร'],
                ['depcode'=> 'A002','dep_name'=> 'ฝ่ายเวชกรรมฯ'],
                ['depcode'=> 'A003','dep_name'=> 'งานผู้ป่วยนอก']
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
        Schema::dropIfExists('departments');
    }
};
