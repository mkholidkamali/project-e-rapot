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
<<<<<<< HEAD:database/migrations/2022_06_20_045957_kelas.php

        schema::create('kelas',function(Blueprint $table) {
            
        $table->id();

        $table->string('kelas',6);
        $table->timestamps();
    
    });
        
=======
        Schema::create('mapels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('gurus');

            $table->string('kelas');
            $table->enum('jurusan', ['tra', 'tja', 'tkj', 'rpl']);
            $table->string('mapel');
            $table->timestamps();
        });
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892:database/migrations/2022_06_02_1450121_mapel.php
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
