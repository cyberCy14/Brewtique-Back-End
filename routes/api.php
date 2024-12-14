<?php


use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\CoffeeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Authentication
Route::prefix("/auth")->group(function () {
    Route::post("/register", [AuthController::class, "register"]);
    Route::post("/login", [AuthController::class, "login"]); 
});



Route::get('/coffees', [CoffeeController::class, 'getAllCoffees']);
Route::get('/coffees/{category}', [CoffeeController::class, 'coffeeCategory']);

Route::post('/coffees', [CoffeeController::class, 'createCoffee']);


