<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
// use App\Models\CoffeeModel;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function coffeeCategory($category): JsonResponse
    {

        try {
            $coffeeCategory = DB::table('coffees')
                ->where('category', $category)  
                ->get();

            $coffees = $coffeeCategory->map(function ($coffee) {
                    $coffee->img = asset('images/coffeeOptionsImages/' . $coffee->img);
                    return $coffee;
                });
    
            if ($coffees->isEmpty()) {
                return response()->json([]);
            }
    


            return response()->json($coffees);

        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while fetching coffee items'], 500);
        }
    }


    

    public function getAllCoffees()
    {
        $coffees = Coffee::all()->map(function ($coffee) {
            $coffee->img = asset('images/coffeeOptionsImages/' . $coffee->img);
            return $coffee;
        });

        return response()->json($coffees);
    }

    public function createCoffee(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'description2' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'link' => 'required|string|max:255',
        ]);

        $coffee = Coffee::create($validatedData);

        return response()->json([
            'message' => 'Coffee created successfully!',
            'coffee' => $coffee,
        ], 201);
    }
}    