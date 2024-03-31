<?php

namespace App\Http\Controllers;

use App\Models\region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = region::all();
        return view('admin.region.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_region' => 'required',
        ]);

        $region = new region();
        $region->name = $request->name_region;
        $region->save();
        return redirect('/region');
    }

    /**
     * Display the specified resource.
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $region = region::findOrFail($id);
        return view('admin.region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $region = region::findOrFail($id);
        $region->update([
            'name' => $request->input('name_region'),

        ]);
    
        return redirect('/region')->with('success', 'Region updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $region = region::findOrFail($id);
        $region->delete();

        return redirect('/region')->with('success', 'Region deleted successfully');
    }
}
