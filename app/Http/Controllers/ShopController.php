<?php

namespace App\Http\Controllers;

use App\Models\ShopHomepageModel;
use Illuminate\Http\JsonResponse;

class ShopController extends Controller
{
    public function coffeesInHomepages($id): JsonResponse
    {
        try {
            $homepage = ShopHomepageModel::findOrFail($id);
            $coffees = $homepage->coffees;

            if ($coffees->isEmpty()) {
                return response()->json(['error' => 'No coffees found for this homepage'], 404);
            }

            $coffeeData = $coffees->map(function ($coffee) {

                return [
                    'id' => $coffee->id,
                    'title' => $coffee->title,
                    'img' => $coffee->img,
                    'description' => $coffee->description,
                    'description2' => $coffee->description2,
                    'price' => $coffee->price,
                    'rating' => $coffee->rating,
                    'reviews' => $coffee->reviews,
                    'link' => url($coffee->link), 
                ];
            })->toArray();

            return response()->json($coffeeData);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while fetching coffees'], 500);
        }
    }
}