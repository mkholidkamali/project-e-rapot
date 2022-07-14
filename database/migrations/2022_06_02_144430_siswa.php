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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('kelas_id');

            $table->integer('absen');
            $table->string('nis', 10)->unique();
            $table->string('nisn', 12)->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->enum('agama', ['islam', 'kapro', 'kakat', 'budha', 'hindu']);
            $table->string('foto');
            $table->string('tahun_ajaran');
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
