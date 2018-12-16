<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    private $validate = [
        'user_id'       => 'numeric',
        'is_open'       => 'boolean',
        'observations'  => 'required|min:5|max:70'
    ];

    public function index()
    {
        $groups = Group::orderBy('id', 'desc')->paginate(10);

        return view('groups.index', [
            'groups' => $groups
        ]);
    }

    public function create()
    {
        $user = Auth::user();

        return view('groups.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate($this->validate);

        $group = new Group;
        $group->user_id = $request->user_id;
        $group->is_open = $request->is_open;
        $group->observations = $request->observations;

        $group->save();

        return redirect()->route('grupos.index');
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
