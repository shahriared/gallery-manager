<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gallery_id');
            $table->foreign('gallery_id')
                    ->references('id')
                    ->on('galleries')
                    ->onDelete('cascade');
            
            $table->string('name');
            $table->string('alt');
            $table->text('description');
            $table->text('image');

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
        Schema::dropIfExists('gallery_images');
    }
};
