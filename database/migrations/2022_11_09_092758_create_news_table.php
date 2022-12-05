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
            $table->string('title');
            $table->longText('description');
            $table->string('date');
            $table->enum('status',['active' , 'inactive'])->default('active');
            $table->string('photo');
            $table->string('photo_alt')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_auth')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('page_title')->nullable();
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
