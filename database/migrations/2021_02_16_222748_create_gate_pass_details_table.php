<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatePassDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gate_pass_details', function (Blueprint $table) {
            $table->id();
            $table->integer('gate_pass_id');
            $table->text('description')->nullable();
            $table->integer('payment_type_id');
            $table->tinyInteger('quantity')->default(0);
            $table->integer('unit_id');
            $table->decimal('amount',11,2)->nullable();
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
        Schema::dropIfExists('gate_pass_details');
    }
}
