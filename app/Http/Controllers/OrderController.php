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
        $user = Auth::user();
    
        // Validate the request data
        $request->validate([
            'num_products' => 'required|integer|min:1',
        ]);
    
        // Check if the requested quantity is available
        if ($product->available_products < $request->input('num_products')) {
            return redirect()->back()->with('error', 'Requested quantity exceeds available products.');
        }
    
        // Create a new order for the user
        $order = new Order([
            'num_products' => $request->input('num_products'),
            'status' => 1, // Order status: reserved
            'user_id' => $user->id,
        ]);
        $order->save();
    
        // Attach the product to the order
        $order->products()->attach($product->id);
    
        // Decrease the available products count
        $product->available_products -= $request->input('num_products');
        $product->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product reserved successfully.');
    }
    
    
        public function displayHistoryClient()
    {
        // Fetch all orders for the authenticated user and eager load related products
        $orders = Order::where('user_id', Auth::user()->id)
                        ->with('products')
                        ->get();
                        
        // Return the view with the orders and their related products
        return view('client.history', compact('orders'));
    }

    public function cancelOrder($id){
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        return redirect()->back()->with('success', 'Order cancelled successfully.');
    }

    public function displayOrdersClient(){
        $products = Product::all()->where('user_id', Auth::user()->id);
        $orders = Order::all()->where('user_id', Auth::user()->id);
        return view('operator.orders', compact('products', 'orders'));
    }

    public function displayAllOrders(){
        $orders = Order::all()->where('status', 1);
        return view('admin.order.cancel', compact('orders'));
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
    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.order.show', compact('order'));
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

    public function cancelAdmin($id){
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        return view('admin.order.cancel');
    }
}
