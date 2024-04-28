<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function reserve(Request $request)
    {
        $user = Auth::user();
    
        // Validate the request data
        $request->validate([
            'order_total_price' => 'required',
            'order_products' => 'required|array',
            'order_products.*.product_id' =>'required|integer',
            'order_products.*.quantity' => 'required|integer|min:1',
            'order_products.*.price' =>'required',
        ]);
        // dd($request->input('order_products'));
        // Check if the requested quantity is available
        // if ($product->available_products < $request->input('num_products')) {
        //     return redirect()->back()->with('error', 'Requested quantity exceeds available products.');
        // }
    
        // Create a new order for the user
        $order = new Order([
            'total_price' => $request->input('order_total_price'),
            'user_id' => $user->id,
        ]);
        $order->save();
    
        // Attach the product to the order
        foreach ($request->input('order_products') as $orderProduct) {
            $order->products()->attach($orderProduct['product_id'], [
                'quantity' => $orderProduct['quantity'],
            ]);
            // Decrease the available products count
            $product = Product::find($orderProduct['product_id']);
            $product->available_products -= $orderProduct['quantity'];
            $product->save();
        }
    
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product reserved successfully.');
    }
    
    
        public function displayHistoryClient()
    {
        $orders = Order::where('user_id', Auth::user()->id)
                        ->with('products')
                        ->get();
                        
        return view('client.history', compact('orders'));
    }

    public function cancelOrder($id){
        $order = Order::find($id);
        $order->status = 0;
        $order->save();
        if(Auth::user()->role == 3){
        return redirect()->back()->with('success', 'Order cancelled successfully.');
        }else{
            return redirect()->route('historyAdmin')->with('success', 'Order cancelled successfully.');
        }
    }

    public function displayOrdersClient() {
        $operator = Auth::user();
        
        // Get all products created by the operator
        $products = $operator->products;
    
        if ($products->isNotEmpty()) {
            // Get orders for those products
            $productIds = $products->pluck('id');
            $orders = Order::whereHas('products', function ($query) use ($productIds) {
                $query->whereIn('products.id', $productIds);
            })->get();
        } else {
            // If no products found, set $orders to an empty collection
            $orders = collect();
        }
    
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

    // public function cancelAdmin($id){
    //     $order = Order::find($id);
    //     $order->status = 0;
    //     $order->save();
    //     return redirect()->back()->with('success', 'Order cancelled successfully.');
    // }
}
