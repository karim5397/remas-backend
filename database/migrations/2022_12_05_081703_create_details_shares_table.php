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
        Schema::create('details_shares', function (Blueprint $table) {
            $table->id();
            $table->string('instrument_type');
            $table->string('par_value');
            $table->longText('issuances_details');
            $table->string('number_shares');
            $table->string('financial_year');
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
        Schema::dropIfExists('details_shares');
    }
};
