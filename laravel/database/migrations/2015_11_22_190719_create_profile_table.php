<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('userid')->unsigned()->default(0);
            $table->string('profilePic')->default('https://lh3.googleusercontent.com/-5ni78U0japI/VifmikVh9bI/AAAAAAAAABM/741l6mH5XSQ/w140-h140-p/1441466_545682402188635_59561106_n.jpg');
            $table->string('about',255);
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('profile');
    }
}
