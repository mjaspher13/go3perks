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
            $table->string('account_id')->nullable(); // 8 digits
            $table->string('username')->unique();
            $table->string('password');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->integer('mobile');
            $table->integer('user_type')->nullable();
            $table->integer('reference_id')->nullable();
            $table->rememberToken();
            $table->string('created_by')->nullable();
            $table->timestamps();
            $table->string('updated_by')->nullable();
            $table->char('status')->nullable();
            $table->integer('is_iso')->nullable();
            $table->integer('role')->nullable(); // 0 - admin , 1 - merchant , 2 - customer , 3 - agent , 4 - not default
            $table->integer('merchant_id')->nullable();
            $table->integer('is_admin')->nullable();
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
