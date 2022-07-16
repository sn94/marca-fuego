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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('zone')->nullable();
            $table->string('weight')->nullable();
            $table->string('double_mark')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('vat_on_price')->nullable(); //iva
            $table->string('comission')->nullable();
            $table->string('vat_on_comission')->nullable(); //iva

            $table->unsignedBigInteger('category_id')->nullable(); 
           // $table->foreign('category_id')->references('id')->on('categories');

            $table->string('front_photo')->nullable();
            $table->string('video')->nullable();
            $table->boolean('draft')->default( true );
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
        Schema::dropIfExists('lotes');
    }
};
