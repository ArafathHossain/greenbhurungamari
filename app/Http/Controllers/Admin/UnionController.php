<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UnionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
    	$area = DB::table('areas')->get();
    	return view('admin.area.index',compact('area'));
    }

    public function create()
    {
    	
    	return view('admin.area.create');
    }

    public function storeunion(Request $request)
    {
    	$validateData = $request->validate([
    		'area_code' => 'required|unique:areas|max:100',
    		'area_name' => 'required|unique:areas|max:100',
    	]);

    	$data = array();
		$data['area_code'] = $request->area_code;
		$data['area_name'] = $request->area_name;
    	DB::table('areas')->insert($data);
		$notification=array(
        'messege'=>'Union Added Successfully',
        'alert-type'=>'success'
         );
       	return Redirect()->route('union')->with($notification);

    }

    public function Editunion($id)
    {
    	$area = DB::table('areas')->where('id',$id)->first();
    	return view('admin.area.edit_area',compact('area'));
    }



    public function Updateunion(Request $request,$id)
    {
    	$validateData = $request->validate([
    		'area_code' => 'required|max:100',
    		'area_name' => 'required|max:100',
    	]);

    	$data=array();
    	$data['area_code']=$request->area_code;
    	$data['area_name']=$request->area_name;

		$area = DB::table('areas')->where('id',$id)->update($data);
		if($area)
		{
			$notification=array(
            'messege'=>'Union Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('union')->with($notification);
		}
		else
		{
			$notification=array(
                        'messege'=>'Nothing to Update',
                        'alert-type'=>'error'
                         );
                       return Redirect()->route('union')->with($notification);
		}	
	}

    public function Deleteunion($id)
    {
    	DB::table('areas')->where('id',$id)->delete();
		$notification=array(
        'messege'=>'Area Deleted Successfully',
        'alert-type'=>'success');
    	return Redirect()->back()->with($notification);
    }
}
