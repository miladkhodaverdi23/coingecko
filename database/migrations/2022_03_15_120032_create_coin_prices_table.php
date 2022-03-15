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
            $table->float('current_price',20,10)->nullable();
            $table->bigInteger('market_cap')->nullable();
            $table->bigInteger('market_cap_rank')->nullable();
            $table->bigInteger('fully_diluted_valuation')->nullable();
            $table->bigInteger('total_volume')->nullable();
            $table->float('high_24h',20,10)->nullable();
            $table->float('low_24h',20,10)->nullable();
            $table->float('price_change_24h',25,20)->nullable();
            $table->float('price_change_percentage_24h',10,6)->nullable();
            $table->float('market_cap_change_24h',35,5)->nullable();
            $table->float('market_cap_change_percentage_24h',10,5)->nullable();
            $table->float('circulating_supply',20,10)->nullable();
            $table->float('total_supply',15,1)->nullable();
            $table->float('max_supply',15,1)->nullable();
            $table->bigInteger('ath')->nullable();
            $table->float('ath_change_percentage',15,10)->nullable();
            $table->timestamp('ath_date')->nullable();
            $table->bigInteger('atl')->nullable();
            $table->float('atl_change_percentage',15,10)->nullable();
            $table->timestamp('atl_date')->nullable();
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
