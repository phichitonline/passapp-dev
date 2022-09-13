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
        Schema::create('typemoneys', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('money_name');
            $table->timestamps();
        });

        DB::table('typemoneys')->insert(
            array(
                ['money_name'=> 'เงินงบประมาณ'],
                ['money_name'=> 'เงินบำรุง'],
                ['money_name'=> 'เงินบริจาค'],
                ['money_name'=> 'เงินงบค่าเสื่อม']
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
        Schema::dropIfExists('typemoneys');
    }
};
