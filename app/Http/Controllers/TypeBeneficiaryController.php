<?php

namespace App\Http\Controllers;

use App\TypeBeneficiary;
use App\TypeBenefited;
use Illuminate\Http\Request;

class TypeBeneficiaryController extends Controller
{
    public function index()
    {
        $typesBeneficiary = TypeBeneficiary::all();

        return view('typesBeneficiary.index', [
            'typesBeneficiary' => $typesBeneficiary
        ]);
    }

    public function create()
    {
        return view('typesBeneficiary.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'definition' => 'required|max:30'
        ]);

        $typeBeneficiary = new TypeBeneficiary;
        $typeBeneficiary->definition = $request->definition;

        $typeBeneficiary->save();

        return redirect()->route('tipos.index');
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
        $typeBeneficiary = TypeBeneficiary::find($id);

        return view('typesBeneficiary.edit', [
            'typeBeneficiary' => $typeBeneficiary
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'definition' => 'required|max:30'
        ]);

        $typeBeneficiary = TypeBeneficiary::find($id);

        $typeBeneficiary->definition = $request->definition;

        $typeBeneficiary->save();

        return redirect()->route('tipos.index');
    }

    public function destroy($id)
    {
        TypeBeneficiary::destroy($id);

        return redirect()->route('tipos.index');
    }
}
