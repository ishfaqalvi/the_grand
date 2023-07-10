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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')
                ->nullable()
                ->references('id')
                ->on('branches')
                ->onDelete('cascade');
            $table->string('type');
            $table->string('title');
            $table->string('sub_title');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->enum('linktype',['Internal','External']);
            $table->string('link');
            $table->integer('order');
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
        Schema::dropIfExists('sliders');
    }
};
