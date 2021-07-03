<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('photo')->nullable();
            $table->mediumText('summary')->nullable();
            $table->boolean('is_parent')->default(true);
            $table->unsignedBigInteger('parent_id')->nullable(true);
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('SET NULL');

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
        Schema::dropIfExists('categories');
    }
}
