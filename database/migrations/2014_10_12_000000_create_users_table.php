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
            $table->string('name',100)->nullable(false);
            $table->date('dob')->nullable();
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('home_address',100)->nullable();
            $table->string('home_number',3)->nullable();
            $table->string('home_postalcode',7)->nullable();
            $table->string('home_city')->nullable();
            $table->string('home_country')->nullable();
            $table->string('home_tel',25)->nullable();
            $table->string('mobile',25)->nullable();
            $table->string('locale',25)->default('nl');
            $table->boolean('joins')->default(false);
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
