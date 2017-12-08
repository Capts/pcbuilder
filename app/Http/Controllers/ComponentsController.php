<?php

namespace App\Http\Controllers;

use App\Component;
use App\ComponentType;
use DB;
use Illuminate\Http\Request;
use Session;
use Image;

class ComponentsController extends Controller
{
    
    public function index()
    {
        $component_type = DB::table('component_types')->get();
        $allComponents = Component::orderBy('created_at', 'desc')->get();
        // dd($allComponents);

        return view('components.index', ['component_type' => $component_type],compact('allComponents'));
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'component_type' => 'required',
            'component_name' => 'required|max:100|min:4',
            'component_desc' => 'required|min:8',
            'component_price' => 'required',
            'component_qty' => 'required',
        ]);

        $component = new Component();

        $component->component_type = $request->component_type;
        $component->component_name = $request->component_name;
        $component->component_desc = $request->component_desc;
        $component->component_price = $request->component_price;
        $component->component_qty = $request->component_qty;


        if ($request->hasFile('featured_image')) {
          $image = $request->file('featured_image');
          $filename = $request->component_name . '.' . $image->getClientOriginalExtension();
          $location = public_path('upload/component/image/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $component->component_image = $filename;
        }

        $component->save();

        Session::flash('success', 'Component added!');
        return redirect()->route('component.show', $component->id);

      

    }

    
    public function show($id)
    {
        $com = Component::find($id);
        $component_type = DB::table('component_types')->get();
     

        return view('components.show',[$com->id], compact('com','component_type'));
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $put_components = Component::find($id);
        
        $request->validate([
            // 'component_type' => 'required',
            'component_name' => 'required|max:100|min:4',
            'component_desc' => 'required|min:8',
            'component_price' => 'required',
            'component_qty' => 'required'
        ]);
        
        

        // $put_components->component_type = $request->input('component_type');
        $put_components->component_name = $request->input('component_name');
        $put_components->component_desc = $request->input('component_desc');
        $put_components->component_price = $request->input('component_price');
        $put_components->component_qty = $request->input('component_qty');

        if ($request->hasFile('featured_image')) {
          $image = $request->file('featured_image');
          $filename = $request->component_name . '.' . $image->getClientOriginalExtension();
          $location = public_path('/upload/component/image/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $put_components->component_image = $filename;
        }
        $put_components->save();

        Session::flash('success', 'The component ' . $request->component_name . ' is successfully updated!');
        return redirect()->route('component.show', $put_components->id);
    }

 
    public function destroy($id)
    {
        //
    }
}
