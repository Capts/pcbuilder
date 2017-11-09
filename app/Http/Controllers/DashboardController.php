<?php

namespace App\Http\Controllers;

use App\ComponentType;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function dashboard(){
    	$component_type = DB::table('component_types')->get();
    	// dd($component_type);
    	return view('admins.admin-dashboard', ['component_type' => $component_type]);
    }
}
