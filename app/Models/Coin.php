<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coin extends Model
{
    use SoftDeletes;

    protected bool $softDelete = true;
    protected array $fillable = [
        'str_id',
        'symbol',
        'name',
        'name_fa',
        'image',
    ];

    public function prices():HasMany
    {
        return $this->hasMany(CoinPrice::class);
    }

}
