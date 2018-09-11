<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminal_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('approval_no');
            $table->string('pc_name');
            $table->string('model_name');
            $table->string('serial_no');
            $table->string('memo');
            $table->string('sophos_tamper_protection');
            $table->string('qr_code');
            $table->unsignedInteger('status_id');
            $table->foreign('status_id')
                  ->references('id')
                  ->on('status');
            $table->unsignedInteger('depositories_id');
            $table->foreign('depositories_id')
                  ->references('id')
                  ->on('depositories');
            $table->integer('hdd_id')->nullable($value = true);
            $table->integer('cpu_id')->nullable($value = true);
            $table->integer('os_id')->nullable($value = true);
            $table->integer('memories_id')->nullable($value = true);
            $table->integer('employees_id')->nullable($value = true);
            $table->integer('office_info_id')->nullable($value = true);
            $table->integer('terminal_info_id')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terminal_managements');
    }
}