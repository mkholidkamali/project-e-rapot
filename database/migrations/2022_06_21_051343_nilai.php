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
        schema::create('nilai',function(Blueprint $table) { 


        $table->id();

        $table->unsignedBigInteger('siswa_id');
        $table->foreign('siswa_id')->references('id')->on('siswa');

        $table->unsignedBigInteger('mapel_id');
        $table->foreign('mapel_id')->references('id')->on('mapel');

        $table->unsignedBigInteger('raport_id');
        $table->foreign('raport_id')->references('id')->on('raport');

        $table->unsignedBigInteger('kelas_id');
        $table->foreign('kelas_id')->references('id')->on('kelas');

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
