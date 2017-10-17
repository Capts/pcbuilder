<?php

namespace App\Http\Controllers;

use App\Component;
use Session;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    
    public function index()
    {
        return view('components.index');
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'component_name' => 'required|max:60|min:8',
            'component_desc' => 'required|max:200|min:8',
            'component_price' => 'required',
            'component_qty' => 'required',
        ]);

        $component = new Component();

        $component->component_name = $request->component_name;
        $component->component_desc = $request->component_desc;
        $component->component_price = $request->component_price;
        $component->component_qty = $request->component_qty;

        $component->save();

        Session::flash('success', 'Component added!');
        return redirect()->route('component.show', $component->id);

        // public function upload_image(Request $request, $id){
        //     if ($request->hasFile('avatar')) {
        //         $avatar = $request->file('avatar');

        //         $filename = time() . "." . $avatar->getClientOriginalExtension();
        //         Image::make($avatar)->resize(300, 305)->save( public_path('/upload/avatars/' . $filename));

        //         $user = auth()->user();
        //         $user->avatar =$filename;
        //         $user->save();

        //     }
        //     return redirect()->route('dashboard');
        // }

    }

    
    public function show($id)
    {
        $com = Component::find($id);
        // dd($com);

        return view('components.show',[$com->id], compact('com'));
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'component_name' => 'required|max:60|min:8',
            'component_desc' => 'required|max:200|min:20',
            'component_price' => 'required',
            'component_qty' => 'required',
        ]);
        $put_components = Component::find($id);

        $put_components->component_name = $request->input('component_name');
        $put_components->component_desc = $request->input('component_desc');
        $put_components->component_price = $request->input('component_price');
        $put_components->component_qty = $request->input('component_qty');
        $put_components->save();

        Session::flash('success', 'The component ' . $request->component_name . ' is successfully updated!');
        return redirect()->route('component.show', $put_components->id);
    }

 
    public function destroy($id)
    {
        //
    }
}
