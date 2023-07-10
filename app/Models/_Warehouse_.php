<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse
{
    private static $warehouses_list = [
        [
            "title" => "Gudang strategis",
            "type" => "7/10",
            "slug" => "gudang-strategis",
            "price" => "12.000",
            "location" => "Jawa Timur",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laborum soluta",
        ],
        [
            "title" => "Akses mobil",
            "slug" => "akses-mobil",
            "type" => "10/12",
            "price" => "23.000",
            "location" => "Jawa Barat",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laborum soluta velit ea ",
        ],
    ];

    public static function all()
    {
        return collect(self::$warehouses_list);
    }

    public static function find($slug)
    {
        $warehouse = static::all();
        // $warehouse = [];
        // foreach ($warehouses_list as $w) {
        //     if ($w["slug"] == $slug) {
        //         $warehouse = $w;
        //     }
        // }

        return $warehouse->firstWhere('slug', $slug);
    }
}
