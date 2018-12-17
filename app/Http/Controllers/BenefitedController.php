<?php

namespace App\Http\Controllers;

use App\Benefited;
use App\Dependence;
use App\Ration;
use App\TypeBeneficiary;
use Illuminate\Http\Request;

class BenefitedController extends Controller
{
    private $validate = [
        'card'                 => 'required|max:8',
        'lastname'             => 'required|min:5|max:60',
        'firstname'            => 'required|min:3|max:40',
        'is_active'            => 'required|boolean',
        'ration_id'            => 'required|numeric',
        'type_benefited_id'    => 'required|numeric',
        'dependence_id'        => 'required|numeric'
    ];

    public function index(Request $request)
    {
        $is_active = $request->get('active');
        $name = $request->get('name');

        $benefited = Benefited::name($name)->active($is_active)->orderBy('id', 'desc')->paginate(10);
        $count = Benefited::all()->count();

        return view('benefited.index', [
            'benefited' => $benefited,
            'count'     => $count
        ]);
    }

    public function create()
    {
        $rations = Ration::all();

        $typesBeneficiary = TypeBeneficiary::all();

        $dependences = Dependence::all();

        return view('benefited.create', [
            'rations'            => $rations,
            'typesBeneficiary'   => $typesBeneficiary,
            'dependences'        => $dependences
        ]);
    }

    public function store(Request $request)
    {
        $request->validate($this->validate);

        $benefited = new Benefited;
        $benefited->card                = $request->card;
        $benefited->lastname            = strtoupper($request->lastname);
        $benefited->firstname           = strtoupper($request->firstname);
        $benefited->is_active           = $request->is_active;
        $benefited->ration_id           = $request->ration_id;
        $benefited->type_benefited_id   = $request->type_benefited_id;
        $benefited->dependence_id       = $request->dependence_id;

        $benefited->save();

        return redirect()->route('beneficiados.index');
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
