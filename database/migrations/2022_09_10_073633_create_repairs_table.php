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
        Schema::create('repairs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('durable_id',10);
            $table->dateTime('repair_date');
            $table->string('repair_text');
            $table->string('repair_user',10);
            $table->dateTime('repair_reciev_date')->nullable()->comment('วันที่รับงาน');
            $table->string('repair_reviev_user',10)->nullable()->comment('ช่างรับงาน');
            $table->dateTime('repair_finish_date')->nullable()->comment('วันที่ซ่อมเสร็จ');
            $table->string('repair_finich_user',10)->nullable()->comment('ช่างรายงานซ่อมเสร็จ');
            $table->string('repair_status',10);
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
        Schema::dropIfExists('repairs');
    }
};
