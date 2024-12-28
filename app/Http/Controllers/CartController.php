<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Coffee;
use App\Models\Merch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // View Cart Items
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with(['coffee', 'merch'])->get();
        return response()->json($cartItems);
    }

    // Add Item to Cart
    public function addToCart(Request $request)
    {

        dd($request->all());

        
        $request->validate([
            'coffee_id' => 'nullable|exists:coffees,id',
            'merch_id' => 'nullable|exists:merch,id',
            'quantity' => 'required|integer|min:1',
        ]);
        

        Cart::create([
            'user_id' => Auth::id(),
            'coffee_id' => $request->coffee_id,
            'merch_id' => $request->merch_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json(['message' => 'Item added to cart']);
    }

    // Remove Item from Cart
    public function removeFromCart($id)
    {
        $cartItem = Cart::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$cartItem) {
            return response()->json(['message' => 'Item not found'], 404);
        }

        $cartItem->delete();

        return response()->json(['message' => 'Item removed from cart']);
    }
}
