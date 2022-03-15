<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoinPrice extends Model
{
    protected $fillable = [
        'market_cap',
        'market_cap_rank',
        'fully_diluted_valuation',
        'total_volume',
        'total_volume',
        'high_24h',
        'low_24h',
        'price_change_24h',
        'price_change_percentage_24h',
        'market_cap_change_24h',
        'market_cap_change_percentage_24h',
        'circulating_supply',
        'total_supply',
        'max_supply',
        'ath',
        'ath_change_percentage',
        'ath_date',
        'ath1',
        'ath1_change_percentage',
        'ath1_date',
    ];
}
