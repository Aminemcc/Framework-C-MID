<?php

namespace App\Http\Controllers;

use App\Models\money;
use Illuminate\Http\Request;
class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $money = Money::latest()->paginate(5);
        // $user = User::findOrFail($user);
        return view('money.index',compact('money'))
        ->with('i', (request()->input('page',1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('money.create');
        // $user = User::findOrFail($user);
        // return view('money.create',[
        //     'user' => $user
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bank' => 'required',
            'quantity' => 'required'
        ]);
        Money::create($request->all());
        return redirect()->route('money.index')
        ->with('success','Money donation created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\money  $money
     * @return \Illuminate\Http\Response
     */
    public function show(money $money)
    {
        return view('money.show',compact('money'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\money  $money
     * @return \Illuminate\Http\Response
     */
    public function edit(money $money)
    {
        return view('money.edit',compact('money'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\money  $money
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, money $money)
    {
        $request->valide([]);
        $money->update($request->all());
        return redirect()->rout('money.index')
        ->with('success','Money donation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\money  $money
     * @return \Illuminate\Http\Response
     */
    public function destroy(money $money)
    {
        $money->delete();
        return redirect()->rout('money.index')
        ->with('success','Money donation deleted successfully');
    }
}
