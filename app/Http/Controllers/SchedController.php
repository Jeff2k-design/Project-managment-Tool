<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sched;

class SchedController extends Controller
{
    public function index()
    {
        $sched = Sched::latest()->paginate(15);

        return view('sched.index',compact('sched'))
            ->with('i', (request()->input('page', 1) -1) * 15);
    }

    public function create()
    {
        return view('sched.create');
    }

    public function store(Request $request)
    {
   $request->validate([
       'GroupName' => 'required',
       'Panelfirst' => 'required',
       'Panelsecond' => 'required',
       'Panelthird' => 'required',
       'Date' => 'required',
       'Venue' => 'required',
   ]); 

    Sched::create($request->all());

    return redirect()->route('sched.index')
        ->with('success','Schedule Created');
    }

    public function show(Sched $sched)
    {

    return view('sched.show',compact('sched'));

    }

    public function edit(Sched $sched)
    {

    return view('sched.edit',compact('sched'));

    }

    public function update(Request $request, Sched $sched)
    {
    $request->validate([

    ]);

    $hire->update($request->all());

    return redirect()->route('sched.index')
    ->with('success','Schedule updated');
    }

    public function destroy(Sched $sched)
    {

    $sched->delete();

    return redirect()->route('sched.index')
    ->with('success','Schedule deleted');
    
    }
}