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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->longText('footer_desc');
            $table->string('page_title');
            $table->longText('meta_description')->nullable();
            $table->string('meta_auth')->nullable();
            $table->string('meta_title')->nullable();

            $table->string('news_page_title');
            $table->longText('news_meta_description')->nullable();
            $table->string('news_meta_auth')->nullable();
            $table->string('news_meta_title')->nullable();


            $table->string('investment_page_title');
            $table->longText('investment_meta_description')->nullable();
            $table->string('investment_meta_auth')->nullable();
            $table->string('investment_meta_title')->nullable();

            $table->string('contact_page_title');
            $table->longText('contact_meta_description')->nullable();
            $table->string('contact_meta_auth')->nullable();
            $table->string('contact_meta_title')->nullable();

            $table->string('logo');
            $table->string('favicon');
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
