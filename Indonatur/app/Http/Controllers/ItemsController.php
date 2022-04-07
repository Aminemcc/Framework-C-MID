<?php

namespace App\Http\Controllers;
use App\Models\items;
use Illuminate\Http\Request;

class itemsController extends Controller
{
  
    public function index()
    {
        $items = Items::latest()->paginate(5);
        // $user = User::findOrFail($user);
        return view('items.index',compact('items'))
        ->with('i', (request()->input('page',1) -1) * 5);
        return view ('items.index')->with('items', $items);
    }

    
    public function create()
    {
        return view('items.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        items::create($input);
        return redirect('items')->with('flash_message', 'items Addedd!');  
    }

    
    public function show($id)
    {
        $items = items::find($id);
        return view('items.show')->with('items', $items);
    }

    
    public function edit($id)
    {
        $items = items::find($id);
        return view('items.edit')->with('items', $items);
    }

  
    public function update(Request $request, $id)
    {
        $items = items::find($id);
        $input = $request->all();
        $items->update($input);
        return redirect('items')->with('flash_message', 'items Updated!');  
    }

   
    public function destroy($id)
    {
        items::destroy($id);
        return redirect('items')->with('flash_message', 'items deleted!');  
    }
}