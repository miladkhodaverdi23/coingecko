<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;

class CoinController extends Controller
{
    public function index()
    {
        return view('coins');
    }

    public function ajax(): JsonResponse
    {
        $coin = Coin::query();
        return DataTables::eloquent($coin)
            ->toJson();
    }
}
