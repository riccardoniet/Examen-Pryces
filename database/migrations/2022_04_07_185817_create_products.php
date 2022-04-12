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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('lastname');
            $table->string('adress');
            $table->string('stad');
            $table->string('postcode');
            $table->string('telefoonnummer');
            $table->integer('provider');
            $table->string('pakket');
            $table->string('betaling');
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
        Schema::dropIfExists('products');
    }
};
