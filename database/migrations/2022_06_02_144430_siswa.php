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

            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas');

            $table->string('nis', 10);
            $table->string('nisn', 12);
            $table->string('nama');
            $table->enum('jurusan', ['tr', 'tja', 'tkj', 'rpl']);
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->enum('agama', ['islam', 'kapro', 'kakat', 'budha', 'hindu']);
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
