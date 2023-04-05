<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->string('model');
            $table->unsignedBigInteger('body_type_id');
            $table->foreign('body_type_id')->references('id')->on('body_types')->onDelete('cascade');
            $table->integer('seats');
            $table->string('color');
            $table->unsignedBigInteger('fuel_type_id');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types')->onDelete('cascade');
            $table->float('mileage');
            $table->unsignedBigInteger('transmission_id');
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
            $table->float('power');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('cargo_volume');
            $table->float('price');
            $table->enum('status', ['Available', 'Reserved']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
