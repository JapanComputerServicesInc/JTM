<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('departments_id')->unsigned();
            $table->foreign('departments_id')
                  ->references('id')
                  ->on('departments');

            $table->integer('depositories_id')->unsigned();
            $table->foreign('depositories_id')
                  ->references('id')
                  ->on('depositories');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_registers');
    }
}
