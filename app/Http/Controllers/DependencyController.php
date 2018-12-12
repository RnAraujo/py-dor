<?php

namespace App\Http\Controllers;

use App\Dependence;
use Illuminate\Http\Request;

class DependencyController extends Controller
{
    private $validate = [
        'definition' => 'required|min:3|max:50'
    ];

    public function index()
    {
        $dependencies = Dependence::all();

        return view('dependencies.index', [
            'dependencies' => $dependencies
        ]);
    }

    public function create()
    {
        return view('dependencies.create');
    }

    public function store(Request $request)
    {
        $request->validate($this->validate);

        $dependence = new Dependence;
        $dependence->definition = $request->definition;

        $dependence->save();

        return redirect()->route('dependencias.index');
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
        $dependence = Dependence::find($id);

        return view('dependencies.edit', [
            'dependence' => $dependence
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->validate);

        $dependence = Dependence::find($id);

        $dependence->definition = $request->definition;

        $dependence->save();

        return redirect()->route('dependencias.index');
    }

    public function destroy($id)
    {
        Dependence::destroy($id);

        return redirect()->route('dependencias.index');
    }
}
