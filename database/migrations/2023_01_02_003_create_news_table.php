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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->references('id')->on('pages')->onDelete('cascade');
            $table->string('heading');
            $table->string('sub_heading');
            $table->string('image');
            $table->date('date');
            $table->string('url');
            $table->text('description');
            $table->integer('order')->default(1);
            $table->string('status')->default('UnPublish');
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
        Schema::dropIfExists('news');
    }
};
