<?php

namespace App\Http\Controllers\Admin\galary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use DB;

class GalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
    $pictures = DB::table('galarys')->get();
   	return view('admin.galary.index',compact('pictures'));
    }

    public function create()
    {
	return view('admin.galary.create');
    }

    public function store(Request $request)
  	{
    $validateData = $request->validate([
  		'picture' => 'mimes:jpeg,jpg,png,PNG | max:1024',
  	]);
    $data = array();
    $data['title'] = $request->title;
    $picture = $request->picture;
    // return response()->json($data);
    $picture_name = hexdec(uniqid()).'.'.$picture->getClientOriginalExtension();
    Image::make($picture)->resize(1080,380)->save('public/media/galary/'.$picture_name);
    $data['picture'] = 'public/media/galary/'.$picture_name;

    $product = DB::table('galarys')->insert($data);
    $notification=array(
    'messege'=>'Image Inserted Successfully',
    'alert-type'=>'success'
    );
    return Redirect()->route('image.all')->with($notification);
	}
    public function Edit($id)
  	{
    	$image = DB::table('galarys')->where('id',$id)->first();
    	return view('admin.galary.edit',compact('image'));
  	}
  	public function update(Request $request ,$id)
  	{
		$validateData = $request->validate([
		'picture' => 'mimes:jpeg,jpg,png,PNG | max:1024',
  	]);
    $data = array();
    $data['title'] = $request->title;
    $picture = $request->file('picture');
    $old_pro_picture = $request->old_pro_picture;
    if ($picture)
    {
      if ($old_pro_picture)
        {
         unlink($old_pro_picture);
        }
    // return response()->json($data);
    $picture_name = hexdec(uniqid()).'.'.$picture->getClientOriginalExtension();
    Image::make($picture)->resize(1080,380)->save('public/media/galary/'.$picture_name);
    $data['picture'] = 'public/media/galary/'.$picture_name;
	}else{
		$data['picture'] = $request->old_pro_picture;
	}

    $product = DB::table('galarys')->where('id',$id)->update($data);
    $notification=array(
    'messege'=>'Image update Successfully',
    'alert-type'=>'success'
    );
    return Redirect()->route('image.all')->with($notification);
	}
  	public function Delete($id)
  	{
	    DB::table('galarys')->where('id',$id)->delete();
	    $notification=array(
	    'messege'=>'Image Delete Successfull',
	    'alert-type'=>'success'
      );
      	return Redirect()->back()->with($notification);
  	}
}
