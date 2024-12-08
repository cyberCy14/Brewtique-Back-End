<?php

use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::get('/shopApi/shopCoffees', [ShopController::class, 'index']);
