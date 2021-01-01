<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('tracking', 999)->unique();
            $table->string('shop', 999)->nullable(); //მაღაზია საიდანაც შეიძინა
            $table->string('price', 999)->nullable(); // ფასი რაც გადაიხადა
            $table->string('weight', 999)->nullable(); // წონა
            $table->integer('status')->default('1'); //საწყობშI, გზაში, ჩამოსული
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
        Schema::dropIfExists('parcels');
    }
}
