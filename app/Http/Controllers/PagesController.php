<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function PagesDetails($id)
    {
    	$details = DB::table('pages')->where('id',$id)->first();
    	return view('pages',compact('details'));
    }

    public function Pages2Details($id)
    {
    	$info = DB::table('sidepages')->where('id',$id)->first();
    	return view('page2',compact('info'));
    }
}
