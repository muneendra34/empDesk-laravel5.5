<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('emps'))
        {
            Schema::create('emps', function (Blueprint $table) {
            $table->integer('emp_id')->unsigned();
            $table->string('emp_name');
            $table->string('dept');
            $table->integer('age')->unsigned();
            $table->integer('mobile')->unsigned();
            $table->string('email');
            $table->string('city');
            
        });

        }

         
           
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emps');
    }
}
