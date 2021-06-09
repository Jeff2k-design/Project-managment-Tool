<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::latest()->paginate(5);

        return view('group.index',compact('group'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function create()
    {
        return view('group.create');
    }

    public function store(Request $request)
    {
   $request->validate([
       'GroupNo' => 'required',
       'Slot' => 'required',
       'Member1',
       'Member2' ,
       'Member3',
       'Member4',
       'Member5',
   ]); 

    Group::create($request->all());

    return redirect()->route('group.index')
        ->with('success','Group Created');
    }

    public function show(Group $group)
    {

 

    }

    public function edit(Group $group)
    {

    return view('group.edit',compact('group'));

    }

    public function update(Request $request, Group $group)
    {
    $request->validate([

    ]);

    $group->update($request->all());

    return redirect()->route('group.index')
    ->with('success','Group updated');
    }

    public function destroy(Group $group)
    {

    $group->delete();

    return redirect()->route('group.index')
    ->with('success','Group deleted');
    
    }
}