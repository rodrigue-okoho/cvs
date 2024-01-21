<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->dateTime('publish_datetime');
            $table->string('featured_image', 250)->nullable();
            $table->text('content');
            $table->string('meta_title', 191)->nullable();
            $table->string('cannonical_link', 200)->nullable();
            $table->string('slug', 191)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => InActive, 1 => Published, 2 => Draft, 3 => Scheduled');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('blogs');
    }
};
