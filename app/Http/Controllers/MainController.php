<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodMappingIngredients;
use App\Models\FoodMappingRecipe;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = "background.png";
        $food = Food::all();
        return view('home', compact('image','food'));
    }

    public function successForm()
    {
        return redirect()->back()->with('message', 'Your Message Have Been Received!');
    }

    public function detailCard(Request $request){
        $food = Food::find($request->id);

        return view('detail', compact('food'))->with('ingredients', Ingredient::all())->with('recipe', Recipe::all())->with('food_mapping_ingredients', FoodMappingIngredients::all())->with('food_mapping_recipe', FoodMappingRecipe::all());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
