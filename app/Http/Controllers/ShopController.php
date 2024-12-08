<?php

namespace App\Http\Controllers;

use App\Models\ShopHomepage;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $coffees = ShopHomepage::all();

        // foreach ($coffees as $shopcoffee){
        //     $shopcoffee->img = storage::url($shopcoffee->img);
        // }

        return response()->json($coffees);
    }
}