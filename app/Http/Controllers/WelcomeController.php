<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Component;

class WelcomeController extends Controller
{
    public function welcome(){
    	$uri = 'localhost';
    	$new_components = Component::whereMonth('created_at', '=', date('m'))->get();
    	// dd($new_components);
    	return view('welcome', ['new_components' => $new_components, 'uri' => $uri]);

    }

    public function findComponent(){

    	$new_components = Component::whereMonth('created_at', '=', date('m'))->get();

    	$uri = url()->current();
    	
        
        // get the search keyword
        
        $search = \Request::get('searchApp');
      	$searchComponent = Component::where('component_name', 'like','%'.$search.'%')->orderBy('created_at', 'desc')->get();

        //strip white space
        $findRecom = explode(' ', $search);

       //if search is i3
       if (in_array('i3', $findRecom) OR in_array('gen', $findRecom) OR in_array('cpu', $findRecom) OR in_array('processor', $findRecom)) {

       		$recomRam = Component::where('component_name', 'Kingston dDr3')->get();
       		$recomHDD = Component::where('component_name', 'sata seagate')->get();
       		$recomMOBO = Component::where('component_name', 'ASUS maximus')->get();
          dd($recomRam);
       	 	return view('welcome', compact('searchComponent','search', 'uri', 'recomRam', 'recomHDD', 'recomMOBO'));

        }
        //else if(in_array('i5', $findRecom)) {

       // 	  $recomRam = Component::where('component_name', 'Kingston dDr3')->get();
       //    $recomHDD = Component::where('component_name', 'Western Digital Storage')->get();
       //    $recomMOBO = Component::where('component_name', 'ASUS maximus')->get();
       //    return view('welcome', compact('searchComponent','search', 'uri', 'recomRam', 'recomHDD', 'recomMOBO'));
       // }else if(in_array('i7', $findRecom)) {

       //    $recomRam = Component::where('component_name', 'Kingston dDr4')->get();
       //    $recomHDD = Component::where('component_name', 'Western Digital Storage 2TB')->get();
       //    $recomMOBO = Component::where('component_name', 'ASUS maximus')->get();
       //    return view('welcome', compact('searchComponent','search', 'uri', 'recomRam', 'recomHDD', 'recomMOBO'));
       // }

       }else if(in_array('i5', $findRecom)) {

       	  $recomRam = Component::where('component_name', 'Kingston dDr3')->get();
          $recomHDD = Component::where('component_name', 'Western Digital Storage')->get();
          $recomMOBO = Component::where('component_name', 'ASUS maximus')->get();
          return view('welcome', compact('searchComponent','search', 'uri', 'recomRam', 'recomHDD', 'recomMOBO'));
       }else if(in_array('i7', $findRecom)) {

          $recomRam = Component::where('component_name', 'Vengeance DDR4 1800mhz')->get();
          $recomHDD = Component::where('component_name', 'Western Digital Storage 2TB')->get();
          $recomMOBO = Component::where('component_name', 'ASUS maximus')->get();
          return view('welcome', compact('searchComponent','search', 'uri', 'recomRam', 'recomHDD', 'recomMOBO'));
       }



    }
}
