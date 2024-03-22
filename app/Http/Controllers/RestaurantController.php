<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function show($endpoint)
    {
        $restaurant = Restaurant::find($endpoint);
        return view('detail', [
            'item' => $restaurant,
        ]);
    }
}
