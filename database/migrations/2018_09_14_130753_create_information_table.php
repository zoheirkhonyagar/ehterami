<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_name' , 500);
            $table->text('experience');
            $table->text('video_url')->nullable();
            $table->text('address');
            $table->string('phone_number1', 500);
            $table->string('phone_number2', 500)->nullable();
            $table->string('email', 500);
            //social network
            $table->string('twitter' , 500)->nullable();
            $table->string('facebook' , 500)->nullable();
            $table->string('instagram' , 500)->nullable();
            $table->string('telegram' , 500)->nullable();
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
        Schema::dropIfExists('information');
    }
}
