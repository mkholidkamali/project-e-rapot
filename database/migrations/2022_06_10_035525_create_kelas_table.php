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
<<<<<<< HEAD:database/migrations/2022_06_21_051017_mapel.php

        schema::create('mapel',function(Blueprint $table) { 

        $table->id();

        $table->string('no_induk')->unique();
        $table->string('nama_guru');
        $table->timestamps();


=======
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('gurus');

            $table->string('kelas', 10);
            $table->enum('jurusan', ['tra', 'tja', 'tkj', 'rpl']);
            $table->timestamps();
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892:database/migrations/2022_06_10_035525_create_kelas_table.php
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
