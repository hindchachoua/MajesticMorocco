<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\region;
use App\Models\categorie;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)
                            ->where('is_valid', 1)
                            ->get();
    
        return view('operator.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categorie::all();
        $regions = region::all();
        return view('operator.create', compact('categories', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'available_product' => 'required',
            'region_id' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // Handle file upload
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the uploaded file to the public directory
            $request->file('image')->move(public_path('images'), $fileNameToStore);
        } else {
            $fileNameToStore = 'produits-locals.jpg'; // Default image if no image is uploaded
        }
    
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->available_products = $request->available_product;
        $product->region_id = $request->region_id;
        $product->category_id = $request->category_id;
        $product->image = $fileNameToStore;
        $product->is_Auto = $request->has('is_Auto') ? 0 : 1;
        $product->user_id = Auth::user()->id;
        $product->save();
        
        return redirect('/addproduct')->with('success', 'Product added successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('operator.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = product::find($id);
        $categories = categorie::all();
        $regions = region::all();
        return view('operator.edit', compact('product', 'categories', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Find the product by its ID
        $product = Product::find($request->id);
    
        // Retrieve the current values from the database if the incoming request values are null
        $image = $request->image ?? $product->image;
        $category_id = $request->category_id ?? $product->category_id;
        $region_id = $request->region_id ?? $product->region_id;
        $is_Auto = $request->boolean('is_Auto') ? 1 : 0;
       
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            // Move the uploaded file to the public directory
            $request->file('image')->move(public_path('images'), $fileNameToStore);
        } 

        // if ($request->has('is_Auto')) {
        //     $request->value('is_Auto', 1);
        //     $is_Auto = 1;
        // } else {
        //     $request->value('is_Auto', 0);
        //     $is_Auto = 0;
        // }
        
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'available_products' => $request->available_products,
            'region_id' => $region_id,
            'category_id' => $category_id,
            'is_Auto' => $is_Auto, 
            'image' => $fileNameToStore
        ]);
    
        // Redirect back with success message
        return redirect('/operator')->with('success', 'Product updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $prosuct = Product::findOrFail($id);
        $prosuct->delete();

        return redirect('/operator')->with('success', 'Product deleted successfully');
    }

    public function products(){
        $products = Product::all()->where('is_Valid', 0);
        return view('admin.product.validate', compact('products'));
    }

    public function validation($id){
        $product = Product::find($id);
        $product->is_Valid = 1;
        $product->save();
        return redirect('/validation');
    }

    public function displayProduct(){
        $products = Product::all()->where('is_Valid', 1);
        return view('client.product', compact('products'));
    }
}
