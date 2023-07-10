<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Models\Location;
use App\Models\Type;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardWarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/warehouses/index', [
            'warehouses' => Warehouse::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/warehouses/create', [
            'locations' => Location::all(),
            'types' => Type::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'title' => 'required|max:18',
            'slug' => 'required|unique:warehouses',
            'stock' => 'required',
            'harga' => 'required',
            'location_id' => 'required',
            'type_id' => 'required',
            'description' => 'required|min:50',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = strip_tags($request->description);


        Warehouse::create($validatedData);

        return redirect('/dashboard/warehouses')->with('success', 'Warehouse Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        return view('dashboard/warehouses/show', [
            'warehouse' => $warehouse,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Warehouse $warehouse)
    {
        return view('dashboard/warehouses/edit', [
            'warehouse' => $warehouse,
            'types' => Type::all(),
            'locations' => Location::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warehouse $warehouse)
    {
        $rules = ([
            'title' => 'required|max:18',
            'stock' => 'required',
            'harga' => 'required',
            'location_id' => 'required',
            'type_id' => 'required',
            'description' => 'required',
        ]);

        if($request->slug != $warehouse->slug) {
            $rules['slug'] = 'required|unique:warehouses';
        };

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = strip_tags($request->description);


        Warehouse::where('id', $warehouse->id)
                ->update($validatedData);
        // Warehouse::update($validatedData);

        return redirect('/dashboard/warehouses')->with('success', 'Warehouse Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        Warehouse::destroy($warehouse->id);
        return redirect('/dashboard/warehouses')->with('success', 'Warehouse deleted');

    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Warehouse::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);

    }
}
