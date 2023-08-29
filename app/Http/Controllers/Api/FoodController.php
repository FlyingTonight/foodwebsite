<?php

namespace App\Http\Controllers\Api;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FoodStoreRequest;
use App\Http\Resources\FoodResource;
use GuzzleHttp\Psr7\Response;

class FoodController extends Controller
{
    public function index()
    {

        return FoodResource::collection(Food::all());
    }

    public function store(FoodStoreRequest $request)
    {
       $created_food = Food::create($request->validated());
       return new FoodResource($created_food);
    }

    public function show(Food $food)
    {
        return new FoodResource($food);
    }

    public function update(FoodStoreRequest $request, Food $food)
    {
        $food->update($request->validated());
        return $food;
    }


    public function destroy(Food $food)
    {
        $food->delete();
        return response(null);
    }
}
