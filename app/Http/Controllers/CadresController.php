<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CadresController extends Controller
{
    public function unioncaders($id)
    {
    	$union = DB::table('areas')->where('id',$id)->first();
    	$caders = DB::table('cadres')->where('union_id',$id)->orderBy('ssc', 'ASC')->get();
    	return view('caderlist',compact('caders','union'));
    }

    public function SingleDetails($id)
    {
    	$singlecadre = DB::table('cadres')->where('id',$id)->first();
    	return view('caderview',compact('singlecadre'));
    }
}
