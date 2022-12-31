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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('title')->nullable();
            $table->string('discription');
            $table->string('dimention')->default('1920','1260');
            $table->string('comment')->default('null');
            $table->string('like')->default(0);
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('downloads_count')->default(0);
            $table->boolean('is_published')->default(false);
            $table->unsignedBigInteger('channel_id')->nullable();
            // $table->unsignedBigInteger('channel_id');
            // $table->foreignId('channel_id')->references('id')->on('channels')
            // ->oncascasde('delete');
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
        Schema::dropIfExists('videos');
    }
};
