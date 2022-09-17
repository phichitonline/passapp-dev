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
        Schema::create('settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('s_no');
            $table->string('s_name');
            $table->string('s_headname');
            $table->string('s_address');
            $table->string('module1',10);
            $table->string('module2',10);
            $table->string('module3',10);
            $table->string('module4',10);
            $table->string('module5',10);
            $table->string('linetoken')->nullable();
            $table->timestamps();
        });

        DB::table('settings')->insert(
            array(
                [
                    's_no'=> 'เลขที่หนังสือ',
                    's_name'=> 'ชื่อโรงพยาบาล',
                    's_headname'=> 'ชื่อหัวหน้าหน่วยงาน',
                    's_address'=> 'ที่อยู่',
                    'module1'=> '1',
                    'module2'=> '1',
                    'module3'=> '1',
                    'module4'=> '0',
                    'module5'=> '0',
                    'linetoken'=> '',
                ]
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
        Schema::dropIfExists('settings');
    }
};
