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
        Schema::create('penilaian_kesehatan', function (Blueprint $table) {
            $table->increments('penilaian_kesehatan_id');
            $table->integer('personil_id');
            $table->integer('penilaian_kesehatan_category_id');
            $table->integer('penilaian_kesehatan_schedule_id');
            $table->string('value');
            $table->integer('data_state')->default(0);
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
        Schema::dropIfExists('penilaian_kesehatan');
    }
};
