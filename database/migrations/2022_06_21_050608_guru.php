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
<<<<<<< HEAD:database/migrations/2022_06_21_050608_guru.php
    {  schema::create('guru',function(Blueprint $table) {

        $table->id();

        $table->string('no_induk')->unique();
        $table->string('nama_guru');
        $table->timestamps();
     
    });
        
=======
    {
        Schema::create('rapots', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('semester_id');

            $table->integer('rata_pengetahuan')->default(0);
            $table->integer('rata_ketrampilan')->default(0);
            $table->integer('rata_nilai_akhir')->default(0);
            $table->string('rata_predikat')->default(0);
            $table->text('catatan_akademik')->nullable();
            $table->integer('nilai_mapel_terendah')->default(0);
            $table->string('mapel_terendah')->default('');
            $table->integer('nilai_mapel_tertinggi')->default(0);
            $table->string('mapel_tertinggi')->default('');
            $table->integer('nis');
            $table->timestamps();
        });
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892:database/migrations/2022_06_04_040616_create_rapots_table.php
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
