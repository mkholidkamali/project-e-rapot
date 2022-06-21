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

        schema::create('raport',function(Blueprint $table) {

        $table->id();

        $table->enum('semester',['ganjil','genap']);
        $table->enum('kelas',['x','xi','xii']);
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
