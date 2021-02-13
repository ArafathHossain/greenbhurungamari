<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function Edit()
  {
    $contact = DB::table('contactus')->where('id',1)->first();
    return view('admin.contact.edit',compact('contact'));
  }

  public function update(Request $request)
  {
    $data = array();
    $data['description'] = $request->description;
    DB::table('contactus')->where('id',1)->update($data);
    $notification=array(
      'messege'=>'Contact Successfully Updated',
      'alert-type'=>'success'
       );
      return Redirect()->back()->with($notification);
   }
}
