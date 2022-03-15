<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coin extends Model
{
    use SoftDeletes;

    protected $softDelete = true;
    protected $fillable = [
        'str_id',
        'symbol',
        'name',
        'name_fa',
        'image',
    ];

}
