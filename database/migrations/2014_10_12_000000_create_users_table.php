<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('username')->nullable();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->enum('role',['admin', 'seller', 'customer'])->default('customer');
            $table->enum('status',['active', 'inactive'])->default('active');

            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postcode')->nullable();

            $table->mediumText('note')->nullable();


            $table->string('sfull_name')->nullable();
            $table->string('slast_name')->nullable();
            $table->string('semail')->nullable();;
            $table->string('sphone')->nullable();;
            $table->string('scountry')->nullable();
            $table->string('saddress')->nullable();
            $table->string('scity')->nullable();
            $table->string('sstate')->nullable();





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
