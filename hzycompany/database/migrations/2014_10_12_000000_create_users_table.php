<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   if(Schema::hastable('user')){
        Schema::dropIfExists('user');
        };
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('real_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('school')->nullable();
            $table->string('grade')->nullable();
            $table->string('tell')->nullable();
            $table->string('qq')->nullable();
            $table->string('interest')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
