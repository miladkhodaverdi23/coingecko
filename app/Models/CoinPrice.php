<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoinPrice extends Model
{
    protected array $fillable = [
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


    public function coin():BelongsTo
    {
        return $this->belongsTo(Coin::class);
    }
}