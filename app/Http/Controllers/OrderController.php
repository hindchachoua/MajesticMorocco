<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function reserve(Product $product, Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();
    
        // Validate the incoming request data
        $request->validate([
            'num_products' => 'required|integer|min:1', // Assuming num_products is required and should be an integer greater than 0
        ]);
    
        // Check if requested quantity is available
        if ($product->available_products < $request->input('num_products')) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available products.');
        }
    
        // Create a new order instance and associate it with the user
        $order = new Order([
            'num_products' => $request->input('num_products'),
            'status' => 1, // Assuming the initial status is pending
            'user_id' => $user->id,
        ]);
    
        // Save the order
        $order->save();
    
        // Attach the selected product to the order
        $order->products()->attach($product->id);
    
        // Decrement available_products count
        $product->available_products -= $request->input('num_products');
        $product->save();
    
        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Product reserved successfully.');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        return view('admin.order.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }

    public function cancel(){
        return view('admin.order.cancel');
    }
}
