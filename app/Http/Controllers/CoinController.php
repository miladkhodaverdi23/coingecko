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
        $coins = Coin::query();
        return DataTables::eloquent($coins)
            ->addColumn('image_preview',function($coin){
                return <<<HTML
<img width="100px" src="$coin->image" />
HTML;

            })
            ->escapeColumns([])
            ->toJson();
    }
}
