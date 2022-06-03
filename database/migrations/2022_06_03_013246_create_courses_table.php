<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
           
            $table->string('title',80);
            $table->string('featured');
            $table->date('date_of_course');
            $table->string('place_of_course');
            $table->longText('description')->nullable();
            $table->boolean('is_banner')->default(0);
            $table->boolean('status')->default(1);
             /* $table->unsignedBigInteger('category_id'); */
            /* $table->foreign('category_id')->references('id')->on('categories'); */
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
        Schema::dropIfExists('courses');
    }
};
