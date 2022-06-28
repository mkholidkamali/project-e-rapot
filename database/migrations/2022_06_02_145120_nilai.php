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

            $table->foreignId('mapel_id');
            $table->foreignId('siswa_id');
            $table->foreignId('rapot_id');

            $table->integer('pengetahuan')->default(0);
            $table->char('predikat_pengetahuan')->default('');
            $table->integer('ketrampilan')->default(0);
            $table->char('predikat_ketrampilan')->default('');
            $table->integer('nilai_akhir')->default(0);
            $table->char('predikat_nilai_akhir')->default('');
            $table->integer('kkm')->default(75);
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
