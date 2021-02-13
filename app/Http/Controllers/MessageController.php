<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MessageController extends Controller
{
    public function storeMassage(Request $request){
      $validateData = $request->validate([
        'client_name' => 'required|max:100',
        'client_email' => 'required|max:100',
        'client_massage' => 'required|max:999',
      ]);
      $data = array();
      $data['client_name'] = $request->client_name;
      $data['client_email'] = $request->client_email;
      $data['client_massage'] = $request->client_massage;
      DB::table('message')->insert($data);
      
      $notification=array(
      'messege'=>'Message sent Successfully',
      'alert-type'=>'success'
       );
     return Redirect()->back()->with($notification);
    }
}
