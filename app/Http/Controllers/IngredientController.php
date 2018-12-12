<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredientes = Ingredient::all();

        return view('ingredients.index', [
            'ingredients' => $ingredientes
        ]);
    }

    public function create()
    {
        return view('ingredients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'definition' => 'required|max:30'
        ]);

        $ingredient = new Ingredient;
        $ingredient->definition = $request->definition;

        $ingredient->save();

        return redirect()->route('ingredientes.index');
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

    public function edit($id)
    {
        $ingredient = Ingredient::find($id);

        return view('ingredients.edit', [
            'ingredient' => $ingredient
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'definition' => 'required|max:30'
        ]);

        $ingredient = Ingredient::find($id);

        $ingredient->definition = $request->definition;

        $ingredient->save();

        return redirect()->route('ingredientes.index');
    }

    public function destroy($id)
    {
        Ingredient::destroy($id);

        return redirect()->route('ingredientes.index');
    }
}
