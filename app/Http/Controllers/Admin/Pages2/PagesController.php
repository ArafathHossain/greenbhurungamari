<?php

namespace App\Http\Controllers\Admin\Pages2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$pages = DB::table('sidepages')->get();
    	return view('admin.pages2.index',compact('pages'));
    }

    public function create()
    {
    	return view('admin.pages2.create');
    }

    public function store(Request $request)
  	{
    $data = array();
    $data['type'] = $request->type;
    $data['title'] = $request->title;
    $data['description'] = $request->description;

    DB::table('sidepages')->insert($data);
    $notification=array(
    'messege'=>'Page Inserted Successfully',
    'alert-type'=>'success'
    );
    return Redirect()->route('pages2.all')->with($notification);
  }

  public function Edit($id)
    {
    	$details = DB::table('sidepages')->where('id',$id)->first();
    	return view('admin.pages2.edit', compact('details'));
    }

  public function update(Request $request ,$id)
	{
		$data = array();
	    $data['type'] = $request->type;
	    $data['title'] = $request->title;
	    $data['description'] = $request->description;

	    DB::table('sidepages')->where('id',$id)->update($data);
	    $notification=array(
	    'messege'=>'Page Update Successfully',
	    'alert-type'=>'success'
	    );
	    return Redirect()->route('pages2.all')->with($notification);
	}

	public function Delete($id)
  	{
	    $client = DB::table('sidepages')->where('id',$id)->delete();
	    $notification=array(
	      'messege'=>'Page Delete Successfull',
	      'alert-type'=>'success'
	      );
	      return Redirect()->back()->with($notification);
  	}
}
