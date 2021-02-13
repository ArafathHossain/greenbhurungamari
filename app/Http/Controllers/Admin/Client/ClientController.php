<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class ClientController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {

    	$cadre = DB::table('cadres')
      ->join('areas','cadres.union_id','areas.id')
      ->select('cadres.*','areas.area_name')
      ->get();
    	return view('admin.clients.index',compact('cadre'));
    }

    public function create()
    {
    	$union = DB::table('areas')->get();
    	return view('admin.clients.create',compact('union'));
    }

  public function store(Request $request)
  {
    $validateData = $request->validate([
  		'name' => 'required|max:120',
  		'email' => 'required|max:120',
  		'picture' => 'mimes:jpeg,jpg,png,PNG | max:1024',
  	]);
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['mobile'] = $request->mobile;
    $data['union_id'] = $request->union_id;
    $data['father'] = $request->father;
    $data['mother'] = $request->mother;
    $data['designation'] = $request->designation;
    $data['village'] = $request->village;
    $data['ward'] = $request->ward;
    $data['work_address'] = $request->work_address;
    $data['permanent_address'] = $request->permanent_address;
    $data['facebook'] = $request->facebook;
    $data['ssc'] = $request->ssc;
    $data['description'] = $request->description;
    $picture = $request->picture;
    // return response()->json($data);  
    $picture_name = hexdec(uniqid()).'.'.$picture->getClientOriginalExtension();
    Image::make($picture)->save('public/media/cadres/'.$picture_name);
    $data['picture'] = 'public/media/cadres/'.$picture_name;

    $product = DB::table('cadres')->insert($data);
    $notification=array(
    'messege'=>'Cadre Inserted Successfully',
    'alert-type'=>'success'
    );
    return Redirect()->route('clients')->with($notification);
  }
  public function Edit($id)
  {
    $union = DB::table('areas')->get();
    $client = DB::table('cadres')->where('id',$id)->first();
    return view('admin.clients.edit_client',compact('client','union'));
  }

  public function update(Request $request ,$id)
  {
    $validateData = $request->validate([
    		'name' => 'required|max:120',
    		'email' => 'required|max:50',    	]);
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    $data['mobile'] = $request->mobile;
    $data['union_id'] = $request->union_id;
    $data['father'] = $request->father;
    $data['mother'] = $request->mother;
    $data['designation'] = $request->designation;
    $data['village'] = $request->village;
    $data['ward'] = $request->ward;
    $data['work_address'] = $request->work_address;
    $data['permanent_address'] = $request->permanent_address;
    $data['facebook'] = $request->facebook;
    $data['ssc'] = $request->ssc;
    $data['description'] = $request->description;
    $picture = $request->file('picture');
    $old_pro_picture = $request->old_pro_picture;

    if ($picture)
    {
      if ($old_pro_picture)
        {
         unlink($old_pro_picture);
        }

    $picture_name = hexdec(uniqid()).'.'.$picture->getClientOriginalExtension();
    Image::make($picture)->save('public/media/cadres/'.$picture_name);
    $data['picture'] = 'public/media/cadres/'.$picture_name;
    }

    $update = DB::table('cadres')->where('id',$id)->update($data);
    if ($update)
    {
      $notification=array(
      'messege'=>'Cadre Successfully Updated',
      'alert-type'=>'success'
       );
      return Redirect()->route('clients')->with($notification);
    }
    else
    {
      $notification=array(
      'messege'=>'Nothing To Update',
      'alert-type'=>'error'
      );
      return Redirect()->route('clients')->with($notification);
    }
  }



  public function Delete($id)
  {
    $client = DB::table('cadres')->where('id',$id)->delete();
    $notification=array(
      'messege'=>'Cadre Delete Successfull',
      'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);
  }
     
  // public function messages()
  // {
  //   $messages = DB::table('message')->get();
  //   return view('admin.clients.message',compact('messages'));
  // }

}
