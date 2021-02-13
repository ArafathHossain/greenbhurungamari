<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class SiteSettingsController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function Edit()
    {
    	$settings = DB::table('sitesettings')->first();
    	return view('admin.sitesettings.sitesettings',compact('settings'));
    }


    public function update(Request $request)
    {
      $data = array();
      $data['company_name'] = $request->company_name;
      $data['company_email'] = $request->company_email;
      $data['company_phone1'] = $request->company_phone1;
      $data['company_phone2'] = $request->company_phone2;
      $data['company_mobile'] = $request->company_mobile;
      $data['company_address'] = $request->company_address;
      $data['facebook_link'] = $request->facebook_link;
      $data['twitter_link'] = $request->twitter_link;
      $data['pinterest_link'] = $request->pinterest_link;
      $data['instagram_link'] = $request->instagram_link;
      $data['linkedin_link'] = $request->linkedin_link;
      $data['youtube_link'] = $request->youtube_link;
      $data['aboutus'] = $request->aboutus;

      $data['p1_name'] = $request->p1_name;
      $data['p1_designation'] = $request->p1_designation;
      $data['p2_name'] = $request->p2_name;
      $data['p2_designation'] = $request->p2_designation;
      $data['p3_name'] = $request->p3_name;
      $data['p3_designation'] = $request->p3_designation;

      $logo = $request->file('logo');
      $fav_icon = $request->file('fav_icon');
      $slide_image1 = $request->file('slide_image1');
      $slide_image2 = $request->file('slide_image2');
      $slide_image3 = $request->file('slide_image3');

      $p1_image = $request->file('p1_image');
      $p2_image = $request->file('p2_image');
      $p3_image = $request->file('p3_image');

      $local_hotline_image = $request->file('local_hotline_image');
      $national_hotline_image = $request->file('national_hotline_image');

      $ads_image1 = $request->file('ads_image1');
      $ads_image2 = $request->file('ads_image2');
      $ads_image3 = $request->file('ads_image3');
      $ads_image4 = $request->file('ads_image4');
      $ads_image5 = $request->file('ads_image5');
      $ads_image6 = $request->file('ads_image6');

      $old_logo = $request->old_logo;
      $old_fav_icon = $request->old_fav_icon;
      $old_slide_image1 = $request->old_slide_image1;
      $old_slide_image2 = $request->old_slide_image2;
      $old_slide_image3 = $request->old_slide_image3;

      $old_local_hotline_image = $request->old_local_hotline_image;
      $old_national_hotline_image = $request->old_national_hotline_image;

      $old_p1_image = $request->old_p1_image;
      $old_p2_image = $request->old_p2_image;
      $old_p3_image = $request->old_p3_image;

      $old_ads_image1 = $request->old_ads_image1;
      $old_ads_image2 = $request->old_ads_image2;
      $old_ads_image3 = $request->old_ads_image3;
      $old_ads_image4 = $request->old_ads_image4;
      $old_ads_image5 = $request->old_ads_image5;
      $old_ads_image6 = $request->old_ads_image6;
      $data['newsfeed'] = $request->newsfeed;

    if ($logo) 
    {
      if ($old_logo) 
      {
       unlink($old_logo);
      }
    $logo_name = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
    Image::make($logo)->save('public/media/sitesettings/'.$logo_name);
    $data['logo'] = 'public/media/sitesettings/'.$logo_name;
    }

    if ($fav_icon)
    {
      if ($old_fav_icon)
      {
        unlink($old_fav_icon);
      }
      $fav_icon_name = hexdec(uniqid()).'.'.$fav_icon->getClientOriginalExtension();
      Image::make($fav_icon)->save('public/media/sitesettings/'.$fav_icon_name);
      $data['fav_icon'] = 'public/media/sitesettings/'.$fav_icon_name;
    }

    if ($slide_image1) 
    {
      if ($old_slide_image1) 
      {
       unlink($old_slide_image1);
      }
    $slide_image1_name = hexdec(uniqid()).'.'.$slide_image1->getClientOriginalExtension();
    Image::make($slide_image1)->resize(1080,380)->save('public/media/sitesettings/'.$slide_image1_name);
    $data['slide_image1'] = 'public/media/sitesettings/'.$slide_image1_name;
    }

    if ($slide_image2) 
    {
      if ($old_slide_image2) 
      {
       unlink($old_slide_image2);
      }
    $slide_image2_name = hexdec(uniqid()).'.'.$slide_image2->getClientOriginalExtension();
    Image::make($slide_image2)->resize(1080,380)->save('public/media/sitesettings/'.$slide_image2_name);
    $data['slide_image2'] = 'public/media/sitesettings/'.$slide_image2_name;
    }

    if ($slide_image3) 
    {
      if ($old_slide_image3) 
      {
       unlink($old_slide_image3);
      }
    $slide_image3_name = hexdec(uniqid()).'.'.$slide_image3->getClientOriginalExtension();
    Image::make($slide_image3)->resize(1080,380)->save('public/media/sitesettings/'.$slide_image3_name);
    $data['slide_image3'] = 'public/media/sitesettings/'.$slide_image3_name;
    }

    if ($local_hotline_image) 
    {
      if ($old_local_hotline_image) 
      {
       unlink($old_local_hotline_image);
      }
    $local_hotline_image_name = hexdec(uniqid()).'.'.$local_hotline_image->getClientOriginalExtension();
    Image::make($local_hotline_image)->resize(220,445)->save('public/media/sitesettings/'.$local_hotline_image_name);
    $data['local_hotline_image'] = 'public/media/sitesettings/'.$local_hotline_image_name;
    }

    if ($national_hotline_image) 
    {
      if ($old_national_hotline_image) 
      {
       unlink($old_national_hotline_image);
      }
    $national_hotline_image_name = hexdec(uniqid()).'.'.$national_hotline_image->getClientOriginalExtension();
    Image::make($national_hotline_image)->resize(220,264)->save('public/media/sitesettings/'.$national_hotline_image_name);
    $data['national_hotline_image'] = 'public/media/sitesettings/'.$national_hotline_image_name;
    }

    if ($p1_image) 
    {
      if ($old_p1_image) 
      {
       unlink($old_p1_image);
      }
    $p1_image_name = hexdec(uniqid()).'.'.$p1_image->getClientOriginalExtension();
    Image::make($p1_image)->resize(413,531)->save('public/media/sitesettings/'.$p1_image_name);
    $data['p1_image'] = 'public/media/sitesettings/'.$p1_image_name;
    }

    if ($p2_image) 
    {
      if ($old_p2_image) 
      {
       unlink($old_p2_image);
      }
    $p2_image_name = hexdec(uniqid()).'.'.$p2_image->getClientOriginalExtension();
    Image::make($p2_image)->resize(413,531)->save('public/media/sitesettings/'.$p2_image_name);
    $data['p2_image'] = 'public/media/sitesettings/'.$p2_image_name;
    }

    if ($p3_image) 
    {
      if ($old_p3_image) 
      {
       unlink($old_p3_image);
      }
    $p3_image_name = hexdec(uniqid()).'.'.$p3_image->getClientOriginalExtension();
    Image::make($p3_image)->resize(413,531)->save('public/media/sitesettings/'.$p3_image_name);
    $data['p3_image'] = 'public/media/sitesettings/'.$p3_image_name;
    }

    if ($ads_image1) 
    {
      if ($old_ads_image1) 
      {
       unlink($old_ads_image1);
      }
    $ads_image1_name = hexdec(uniqid()).'.'.$ads_image1->getClientOriginalExtension();
    Image::make($ads_image1)->resize(147,109)->save('public/media/sitesettings/'.$ads_image1_name);
    $data['ads_image1'] = 'public/media/sitesettings/'.$ads_image1_name;
    }

    if ($ads_image2) 
    {
      if ($old_ads_image2) 
      {
       unlink($old_ads_image2);
      }
    $ads_image2_name = hexdec(uniqid()).'.'.$ads_image2->getClientOriginalExtension();
    Image::make($ads_image2)->resize(147,109)->save('public/media/sitesettings/'.$ads_image2_name);
    $data['ads_image2'] = 'public/media/sitesettings/'.$ads_image2_name;
    }

    if ($ads_image3) 
    {
      if ($old_ads_image3) 
      {
       unlink($old_ads_image3);
      }
    $ads_image3_name = hexdec(uniqid()).'.'.$ads_image3->getClientOriginalExtension();
    Image::make($ads_image3)->resize(147,109)->save('public/media/sitesettings/'.$ads_image3_name);
    $data['ads_image3'] = 'public/media/sitesettings/'.$ads_image3_name;
    }

    if ($ads_image4) 
    {
      if ($old_ads_image4) 
      {
       unlink($old_ads_image4);
      }
    $ads_image4_name = hexdec(uniqid()).'.'.$ads_image4->getClientOriginalExtension();
    Image::make($ads_image4)->resize(147,109)->save('public/media/sitesettings/'.$ads_image4_name);
    $data['ads_image4'] = 'public/media/sitesettings/'.$ads_image4_name;
    }

    if ($ads_image5) 
    {
      if ($old_ads_image5) 
      {
       unlink($old_ads_image5);
      }
    $ads_image5_name = hexdec(uniqid()).'.'.$ads_image5->getClientOriginalExtension();
    Image::make($ads_image5)->resize(147,109)->save('public/media/sitesettings/'.$ads_image5_name);
    $data['ads_image5'] = 'public/media/sitesettings/'.$ads_image5_name;
    }

    if ($ads_image6) 
    {
      if ($old_ads_image6) 
      {
       unlink($old_ads_image6);
      }
    $ads_image6_name = hexdec(uniqid()).'.'.$ads_image6->getClientOriginalExtension();
    Image::make($ads_image6)->resize(147,109)->save('public/media/sitesettings/'.$ads_image6_name);
    $data['ads_image6'] = 'public/media/sitesettings/'.$ads_image6_name;
    }

    
    // return response()->json($data);  
    $update = DB::table('sitesettings')->where('id',1)->update($data);
     if ($update) {
      $notification=array(
            'messege'=>'Settings Successfully Updated',
            'alert-type'=>'success'
             );
           return Redirect()->route('site.settings')->with($notification);
    }else{
      $notification=array(
            'messege'=>'Nothing To Update',
            'alert-type'=>'warning'
             );
           return Redirect()->route('site.settings')->with($notification);
    }
  }
}
