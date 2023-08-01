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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->string('template');
            $table->text('title');
            $table->text('slug');
            $table->text('metaTitle')->nullable();
            $table->text('metaDescription')->nullable();
            $table->text('og_tags')->nullable();
            $table->text('schemas')->nullable();
            $table->text('description')->nullable();
            $table->enum('index',['Yes','No'])->default('No');
            $table->enum('status',['Publish','UnPublish'])->default('UnPublish');
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
        Schema::dropIfExists('pages');
    }
};
