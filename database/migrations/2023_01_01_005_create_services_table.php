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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->nullable()->references('id')->on('branches')->onDelete('cascade');
            $table->string('image');
            $table->string('heading');
            $table->string('sub_heading');
            $table->string('link');
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
        Schema::dropIfExists('services');
    }
};