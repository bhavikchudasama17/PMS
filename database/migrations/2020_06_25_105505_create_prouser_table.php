<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prouser', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pid');
            $table->unsignedBigInteger('uid');
            $table->timestamps();
            $table->foreign('pid')
            ->references('id')
            ->on('projects')
            ->onDelete('cascade');
            $table->foreign('uid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prouser');
    }
}
