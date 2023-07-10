<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Location;
use App\Models\Type;


class WarehouseController extends Controller
{
    public function index()
    {

        $title = '';

        if(request('location')){
            $location = Location::firstWhere('slug', request('location'));
            $title = ' at ' . $location->name;
        };

        if(request('type')){
            $type = Type::firstWhere('slug', request('type'));
            $title = ' of Type ' . $type->type;
        };

        return view('warehouses', [
            "title" => "Warehouses  $title",
            "active" => "warehouses",
            "warehouses" => Warehouse::latest()->filter(request(['search', 'location', 'type']))->get(),
        ]);
    }

    public function show(Warehouse $warehouse)
    {
        return view('warehouse', [
            "title" => "Warehouse",
            "warehouse" => $warehouse,
            "active" => "warehouses",
        ]);
    }
}
