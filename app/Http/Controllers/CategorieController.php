<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();
        return view('admin.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_cat' => 'required',
        ]);

        $category = new categorie();
        $category->name = $request->name_cat;
        $category->save();
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $category = categorie::findOrFail($id);
        return view('admin.categorie.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $category = categorie::findOrFail($id);
        $category->update([
            'name' => $request->input('name_cat'),

        ]);
    
        return redirect('/categories')->with('success', 'Categorie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id){
        $category = categorie::findOrFail($id);
        $category->delete();

        return redirect('/categories')->with('success', 'Category deleted successfully');
    }
}
