<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant
{
    // use HasFactory;

    private static $restauran_list = [
        [
            "name" => "Restaurant 1",
            'endpoint' => "Halo pengunjung restaurant 1",
            "description" => "Ini restaurant besar",
        ],
        [
            "name" => "Restaurant 2",
            'endpoint' => "Halo pengunjung restaurant 2",
            'description' => "Ini restaurant kecil"
        ]
    ];

    public static function all()
    {
        // return self::$restauran_list;
        return collect(self::$restauran_list);
    }

    public static function find($endpoint)
    {
        $restaurant = static::all();
        return $restaurant->firstWhere('endpoint', $endpoint);
    }
}
