<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function Edit()
  {
    $donation = DB::table('donation')->where('id',1)->first();
    return view('admin.donation.edit',compact('donation'));
  }

  public function update(Request $request)
  {
    $data = array();
    $data['description'] = $request->description;
    DB::table('donation')->where('id',1)->update($data);
    $notification=array(
      'messege'=>'Donation Successfully Updated',
      'alert-type'=>'success'
       );
      return Redirect()->back()->with($notification);
   }
}
