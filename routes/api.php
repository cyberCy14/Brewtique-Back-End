<?php


use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\CartController;


// user authentication  
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
                                                                
Route::prefix("/auth")->group(function () {
    Route::post("/register", [AuthController::class, "register"]);
    Route::post("/login", [AuthController::class, "login"]); 
});

// displaying coffees (by category and all)
Route::get('/coffees', [CoffeeController::class, 'getAllCoffees']);
Route::get('/coffees/{category}', [CoffeeController::class, 'coffeeCategory']);

// adding new coffee 
Route::post('/coffees', [CoffeeController::class, 'createCoffee']);


//cart
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/add', [CartController::class, 'addToCart']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart']);
});
