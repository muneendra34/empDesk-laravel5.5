<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('entries')){
        Schema::create('entries', function (Blueprint $table) {
            $table->integer('emp_id');
            $table->date('entry_date');
            $table->timestamp('m_in');
            $table->timestamp('m_out');
            $table->timestamp('a_in');
            $table->timestamp('a_out');

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
        Schema::dropIfExists('entries');
    }
}
