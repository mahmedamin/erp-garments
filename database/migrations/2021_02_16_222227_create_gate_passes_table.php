<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatePassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gate_passes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('style', 50)->nullable();
            $table->string('contact', 50)->nullable();
            $table->integer('department_id');
            $table->string('purpose')->nullable();
            $table->boolean('is_returnable');
            $table->string('driver_name', 50)->nullable();
            $table->string('vehicle_number', 50)->nullable();
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
        Schema::dropIfExists('gate_passes');
    }
}
