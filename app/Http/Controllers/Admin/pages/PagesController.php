<?php

namespace App\Http\Controllers\Admin\pages;

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
    	$pages = DB::table('pages')->get();
    	return view('admin.pages.index',compact('pages'));
    }
    public function create()
    {
    	return view('admin.pages.create');
    }
    public function store(Request $request)
  	{
    $data = array();
    $data['category_id'] = $request->category_id;
    $data['title'] = $request->title;
    $data['description'] = $request->description;

    DB::table('pages')->insert($data);
    $notification=array(
    'messege'=>'Page Inserted Successfully',
    'alert-type'=>'success'
    );
    return Redirect()->route('pages.all')->with($notification);
  }
  public function Edit($id)
    {
    	$details = DB::table('pages')->where('id',$id)->first();
    	return view('admin.pages.edit', compact('details'));
    }

	public function update(Request $request ,$id)
	{
		$data = array();
	    $data['category_id'] = $request->category_id;
	    $data['title'] = $request->title;
	    $data['description'] = $request->description;

	    DB::table('pages')->where('id',$id)->update($data);
	    $notification=array(
	    'messege'=>'Page Update Successfully',
	    'alert-type'=>'success'
	    );
	    return Redirect()->route('pages.all')->with($notification);
	}

	public function Delete($id)
  {
    $client = DB::table('pages')->where('id',$id)->delete();
    $notification=array(
      'messege'=>'Page Delete Successfull',
      'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);
  }


}
