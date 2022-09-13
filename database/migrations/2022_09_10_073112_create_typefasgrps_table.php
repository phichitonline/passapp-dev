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
        Schema::create('typefasgrps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('type_name_fasgrp');
            $table->timestamps();
        });

        DB::table('typefasgrps')->insert(
            array(
                ['type_name_fasgrp'=> 'ครุภัณฑ์สำนักงาน'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์ยานพาหนะและขนส่ง'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์ไฟฟ้าและวิทยุ'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์โฆษณาและเผยแพร่'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์การเกษตร'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์ก่อสร้าง'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์การแพทย์'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์คอมพิวเตอร์'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์งานบ้านงานครัว'],
                ['type_name_fasgrp'=> 'ครุภัณฑ์อื่น']
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
        Schema::dropIfExists('typefasgrps');
    }
};
