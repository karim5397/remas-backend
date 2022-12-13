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
            $table->string('founding_date');
            $table->longText('followed_law');
            $table->longText('purpose');
            $table->longText('company_branches');
            $table->string('stock_market_date');
            $table->string('version_number');
            $table->string('par_value');
            $table->string('number_shares');
            $table->longText('issued_capital');
            $table->longText('authorized_capital');
            $table->longText('financial_year');
            $table->longText('external_auditor');
            $table->longText('vision_mission');
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
