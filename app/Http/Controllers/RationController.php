<?php

namespace App\Http\Controllers;

use App\Ration;
use Illuminate\Http\Request;

class RationController extends Controller
{
    public function index()
    {
        $rations = Ration::all();

        return view('rations.index', [
            'rations' => $rations
        ]);
    }

    public function create()
    {
        return view('rations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'definition' => 'required|max:30'
        ]);

        $ration = new Ration;
        $ration->definition = $request->definition;

        $ration->save();

        return redirect()->route('raciones.index');
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
        $ration = Ration::find($id);

        return view('rations.edit', [
            'ration' => $ration
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'definition' => 'required|max:30'
        ]);

        $ration = Ration::find($id);

        $ration->definition = $request->definition;

        $ration->save();

        return redirect()->route('raciones.index');
    }

    public function destroy($id)
    {
        Ration::destroy($id);

        return redirect()->route('raciones.index');
    }
}
