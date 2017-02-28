<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlugaChave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('alugachaves', function (Blueprint $table) {
            $table->increments('id_aluguel');
            $table->date('dt_aluguel');
            $table->date('dt_devolucao'); 
            $table->time('hr_aluguel');    
            $table->time('hr_devolucao');     
            $table->string('observacao', 150);   
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alugachaves');
    }
}
