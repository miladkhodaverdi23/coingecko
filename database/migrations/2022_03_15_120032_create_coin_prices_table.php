<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coin_id')->constrained('coins');
            $table->unsignedBigInteger('market_cap')->nullable();
            $table->unsignedBigInteger('market_cap_rank')->nullable();
            $table->unsignedBigInteger('fully_diluted_valuation')->nullable();
            $table->unsignedBigInteger('total_volume')->nullable();
            $table->unsignedBigInteger('total_volume')->nullable();
            $table->unsignedFloat('high_24h',10,10)->nullable();
            $table->unsignedFloat('low_24h',10,10)->nullable();
            $table->unsignedFloat('price_change_24h',5,20)->nullable();
            $table->unsignedFloat('price_change_percentage_24h',4,6)->nullable();
            $table->unsignedFloat('market_cap_change_24h',30,5)->nullable();
            $table->unsignedFloat('market_cap_change_percentage_24h',5,5)->nullable();
            $table->unsignedFloat('circulating_supply')->nullable();
            $table->unsignedFloat('total_supply',15,1)->nullable();
            $table->unsignedFloat('max_supply',15,1)->nullable();
            $table->unsignedBigInteger('ath')->nullable();
            $table->unsignedFloat('ath_change_percentage',5,10)->nullable();
            $table->timestamp('ath_date')->nullable();
            $table->unsignedBigInteger('ath1')->nullable();
            $table->unsignedFloat('ath1_change_percentage',5,10)->nullable();
            $table->timestamp('ath1_date')->nullable();
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
        Schema::dropIfExists('coin_prices');
    }
}
