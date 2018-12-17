<?php

namespace App\Http\Controllers;

use App\Benefited;
use App\Sheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    private function secureRation($active)
    {
        if($active)
        {
            return redirect()->route('hojas.create');
        }
        else
        {
            return back()->with('message', 'El beneficiado no esta habilitado.');
        }
    }

    public function check(Request $request)
    {
        // existe en la base de datos
        // verificar si esta habilitado
        // verificar si ya recibio canasta

        $count_benefited = Benefited::where('card', $request->id)->count();

        if($count_benefited == 0)
        {
            return back()->with('message', 'No existe el beneficiado.');
        }
        else
        {
            $benefited = Benefited::where('card', $request->id)->first();
            $is_active = $benefited->is_active;

            if($is_active)
            {
                $benefited_ration = Sheet::where('benefited_id', $benefited->id)->count();

                if($benefited_ration == 0)
                {
                    $request->session()->put('benefited_id', $benefited->id);

                    return redirect()->route('hojas.create');
                }
                else
                {
                    return back()->with('message', 'El beneficiado ya fue registrado.');
                }
            }
            else
            {
                return back()->with('message', 'El beneficiado no esta habilitado.');
            }

        }
    }

    public function create(Request $request)
    {
        $benefited_id = $request->session()->get('benefited_id');
        $group_id = $request->session()->get('group_id');

        $benefited = Benefited::find($benefited_id);

        return view('sheets.create', [
            'benefited'  => $benefited,
            'group_id'   => $group_id
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate($this->validate);

        $group_id = $request->session()->get('group_id');
        $benefited_id = $request->session()->get('benefited_id');

        $sheet = new Sheet;
        $sheet->group_id = $group_id;
        $sheet->benefited_id = $benefited_id;
        $sheet->turkey_ticket = $request->turkey_ticket;
        $sheet->observations = $request->observations;

        $sheet->save();

        $request->session()->forget(['group_id', 'benefited_id']);

        return redirect()->route('grupos.show', ['id' => $group_id]);
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

    public function destroy($id)
    {
        Sheet::destroy($id);

        return back();
    }
}
