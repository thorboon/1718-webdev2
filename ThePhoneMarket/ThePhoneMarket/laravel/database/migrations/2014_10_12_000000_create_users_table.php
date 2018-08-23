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
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email', 255)->unique();
            $table->string('password', 255);

            $table->string('firstname', 255);
            $table->string('lastname', 255);

            //$table->enum('gender', ['m', 'f'])->default('m');

            $table->string('phonenumber', 100)->nullable();
            $table->string('zip', 10)->nullable();

            $table->string('avatar')->default('default.jpg');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
