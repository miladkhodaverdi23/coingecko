<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateCoinPriceCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coins:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new \Codenixsv\CoinGeckoApi\CoinGeckoClient();
        $result = $client->coins()->getMarkets('usd');
        foreach ($result as $item) {
            $coin = \App\Models\Coin::firstOrCreate([
                'str_id' => $item['id']
            ], [
                'str_id' => $item['id'],
                'symbol' => $item['symbol'],
                'name' => $item['name'],
                'image' => $item['image']
            ]);
            $coin->prices()->create([
                'current_price' => $item['current_price'],
                'market_cap' => $item['market_cap'],
                'market_cap_rank' => $item['market_cap_rank'],
                'fully_diluted_valuation' => $item['fully_diluted_valuation'],
                'total_volume' => $item['total_volume'],
                'high_24h' => $item['high_24h'],
                'low_24h' => $item['low_24h'],
                'price_change_24h' => $item['price_change_24h'],
                'price_change_percentage_24h' => $item['price_change_percentage_24h'],
                'market_cap_change_24h' => $item['market_cap_change_24h'],
                'market_cap_change_percentage_24h' => $item['market_cap_change_percentage_24h'],
                'circulating_supply' => $item['circulating_supply'],
                'total_supply' => $item['total_supply'],
                'max_supply' => $item['max_supply'],
                'ath' => $item['ath'],
                'ath_change_percentage' => $item['ath_change_percentage'],
                'ath_date' => $item['ath_date'],
                'atl' => $item['atl'],
                'atl_change_percentage' => $item['atl_change_percentage'],
                'atl_date' => $item['atl_date'],
            ]);
        }
        return 1;
    }
}
