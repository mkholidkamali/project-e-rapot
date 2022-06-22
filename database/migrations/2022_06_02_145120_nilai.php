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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('rapot_id');
            $table->foreign('mapel_id')->references('id')->on('mapel');
            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->foreign('rapot_id')->references('id')->on('rapot');

            $table->integer('nilai');
            $table->integer('kkm');
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
        //
    }
};
