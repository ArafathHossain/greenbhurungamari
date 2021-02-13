@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />

<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Site-settings info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('update.settings')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf

            <div class="control-group">
              <label class="control-label">Company Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_name" value="{{$settings->company_name}}" />
              </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Company Email :</label>
              <div class="controls">
                <input type="email" class="span11" name="company_email" value="{{$settings->company_email}}"/>
              </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Company Phone 1 :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_phone1" value="{{$settings->company_phone1}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Company Phone 2 :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_phone2" value="{{$settings->company_phone2}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Company Mobile :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_mobile" value="{{$settings->company_mobile}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="company_address" value="{{$settings->company_address}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Facebook Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook_link" value="{{$settings->facebook_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Twitter Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="twitter_link" value="{{$settings->twitter_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pinterest Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="pinterest_link" value="{{$settings->pinterest_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Linkedin Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="linkedin_link" value="{{$settings->linkedin_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Instagram Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="instagram_link" value="{{$settings->instagram_link}}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Youtube Link :</label>
              <div class="controls">
                <input type="text" class="span11" name="youtube_link" value="{{$settings->youtube_link}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Logo</label>
              <div class="controls">
                <input type="file" id="file" name="logo" onchange="readURL(this);">
                <img src="{{ URL::to($settings->logo) }}" id="one" style="height: 60px; width: 60px;">
            @error('logo')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Fav-Icon</label>
              <div class="controls">
                <input type="file" id="file" name="fav_icon" onchange="readURL2(this);">
                <input type="hidden" name="old_fav_icon" value="{{ $settings->fav_icon }}">
                <img src="{{ URL::to($settings->fav_icon) }}" id="two" style="height: 60px; width: 60px;">
              </div>
              @error('nid_brth_pic')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">Slider Image 1 (1080x380)</label>
              <div class="controls">
                <input type="file" id="file" name="slide_image1" onchange="readURL3(this);">
                <input type="hidden" name="old_slide_image1" value="{{ $settings->slide_image1 }}">
                <img src="{{ URL::to($settings->slide_image1) }}" id="three" style="height: 60px; width: 60px;">
            @error('slide_image1')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Slider Image 2 (1080x380)</label>
              <div class="controls">
                <input type="file" id="file" name="slide_image2" onchange="readURL4(this);">
                <input type="hidden" name="old_slide_image2" value="{{ $settings->slide_image2 }}">
                <img src="{{ URL::to($settings->slide_image2) }}" id="four" style="height: 60px; width: 60px;">
            @error('slide_image2')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Slider Image 3 (1080x380)</label>
              <div class="controls">
                <input type="file" id="file" name="slide_image3" onchange="readURL5(this);">
                <input type="hidden" name="old_slide_image3" value="{{ $settings->slide_image3 }}">
                <img src="{{ URL::to($settings->slide_image3) }}" id="five" style="height: 60px; width: 60px;">
            @error('slide_image3')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <hr>

            <div class="control-group">
              <label class="control-label">Person 1 Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="p1_name" value="{{$settings->p1_name}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Person 1 Designation :</label>
              <div class="controls">
                <input type="text" class="span11" name="p1_designation" value="{{$settings->p1_designation}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Person 1 Image</label>
              <div class="controls">
                <input type="file" id="file" name="p1_image" onchange="readURL6(this);">
                <img src="{{ URL::to($settings->p1_image) }}" id="six" style="height: 60px; width: 60px;">
                <input type="hidden" name="old_p1_image" value="{{ $settings->p1_image }}">
            @error('p1_image')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <hr>

            <div class="control-group">
              <label class="control-label">Person 2 Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="p2_name" value="{{$settings->p2_name}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Person 2 Designation :</label>
              <div class="controls">
                <input type="text" class="span11" name="p2_designation" value="{{$settings->p2_designation}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Person 2 Image</label>
              <div class="controls">
                <input type="file" id="file" name="p2_image" onchange="readURL7(this);">
                <input type="hidden" name="old_p2_image" value="{{ $settings->p2_image }}">
                <img src="{{ URL::to($settings->p2_image) }}" id="seven" style="height: 60px; width: 60px;">
            @error('p2_image')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <hr>

            <div class="control-group">
              <label class="control-label">Person 3 Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="p3_name" value="{{$settings->p3_name}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Person 3 Designation :</label>
              <div class="controls">
                <input type="text" class="span11" name="p3_designation" value="{{$settings->p3_designation}}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Person 3 Image</label>
              <div class="controls">
                <input type="file" id="file" name="p3_image" onchange="readURL8(this);">
                <input type="hidden" name="old_p3_image" value="{{ $settings->p3_image }}">
                <img src="{{ URL::to($settings->p3_image) }}" id="eight" style="height: 60px; width: 60px;">
            @error('p3_image')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>
            <hr>

            <div class="control-group">
              <label class="control-label">National Hotline Image (220x445)</label>
              <div class="controls">
                <input type="file" id="file" name="national_hotline_image" onchange="readURL9(this);">
                <input type="hidden" name="old_national_hotline_image" value="{{ $settings->national_hotline_image }}">
                <img src="{{ URL::to($settings->national_hotline_image) }}" id="nine" style="height: 60px; width: 60px;">
            @error('national_hotline_image')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Local Hotline Image (220x264)</label>
              <div class="controls">
                <input type="file" id="file" name="local_hotline_image" onchange="readURL10(this);">
                <input type="hidden" name="old_local_hotline_image" value="{{ $settings->local_hotline_image }}">
                <img src="{{ URL::to($settings->local_hotline_image) }}" id="ten" style="height: 60px; width: 60px;">
            @error('local_hotline_image')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>
            <hr>

            <div class="control-group">
              <label class="control-label">Ads Image1 (247x109)</label>
              <div class="controls">
                <input type="file" id="file" name="ads_image1" onchange="readURLa1(this);">
                <input type="hidden" name="old_ads_image1" value="{{ $settings->ads_image1 }}">
                <img src="{{ URL::to($settings->ads_image1) }}" id="a1" style="height: 60px; width: 60px;">
            @error('ads_image1')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ads Image2 (247x109)</label>
              <div class="controls">
                <input type="file" id="file" name="ads_image2" onchange="readURLa2(this);">
                <input type="hidden" name="old_ads_image2" value="{{ $settings->ads_image2 }}">
                <img src="{{ URL::to($settings->ads_image2) }}" id="a2" style="height: 60px; width: 60px;">
            @error('ads_image2')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ads Image3 (247x109)</label>
              <div class="controls">
                <input type="file" id="file" name="ads_image3" onchange="readURLa3(this);">
                <input type="hidden" name="old_ads_image3" value="{{ $settings->ads_image3 }}">
                <img src="{{ URL::to($settings->ads_image3) }}" id="a3" style="height: 60px; width: 60px;">
            @error('ads_image3')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ads Image4 (247x109)</label>
              <div class="controls">
                <input type="file" id="file" name="ads_image4" onchange="readURLa4(this);">
                <input type="hidden" name="old_ads_image4" value="{{ $settings->ads_image4 }}">
                <img src="{{ URL::to($settings->ads_image4) }}" id="a4" style="height: 60px; width: 60px;">
            @error('ads_image4')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ads Image5 (247x109)</label>
              <div class="controls">
                <input type="file" id="file" name="ads_image5" onchange="readURLa5(this);">
                <input type="hidden" name="old_ads_image5" value="{{ $settings->ads_image5 }}">
                <img src="{{ URL::to($settings->ads_image5) }}" id="a5" style="height: 60px; width: 60px;">
            @error('ads_image5')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Ads Image6 (247x109)</label>
              <div class="controls">
                <input type="file" id="file" name="ads_image6" onchange="readURLa6(this);">
                <input type="hidden" name="old_ads_image6" value="{{ $settings->ads_image6 }}">
                <img src="{{ URL::to($settings->ads_image6) }}" id="a6" style="height: 60px; width: 60px;">
            @error('ads_image6')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">About US :</label>
              <div class="controls">
                <textarea type="text" class="span11" name="aboutus" style="height: 200px;">{{$settings->aboutus}}</textarea>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">News Update :</label>
              <div class="controls">
                <textarea type="text" class="span11" name="newsfeed" style="height: 100px;">{{$settings->newsfeed}}</textarea>
              </div>
            </div>
            @error('newsfeed')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>


            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>



      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script type="text/javascript">
      $(document).ready(function(){
     $('select[name="district_id"]').on('change',function(){
          var district_id = $(this).val();
          if (district_id) {
            $.ajax({
              url: "{{ url('/get/upazila-thana/') }}/"+district_id,
              type:"GET",
              dataType:"json",
              success:function(data) { 
              var d =$('select[name="upazila_thana_id"]').empty();
              $.each(data, function(key, value){
              
              $('select[name="upazila_thana_id"]').append('<option value="'+ value.id + '">' + value.upazila_thana_name + '</option>');
              });
              },
            });
          }else{
            alert('danger');
          }

            });
      });

 </script>

  <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

 <script type="text/javascript">
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>



 <script type="text/javascript">
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL4(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#four')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL5(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#five')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL6(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#six')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL7(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#seven')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL8(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#eight')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL9(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#nine')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURL10(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#ten')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURLa1(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#a1')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURLa2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#a2')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURLa3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#a3')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURLa4(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#a4')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURLa5(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#a5')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<script type="text/javascript">
  function readURLa6(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#a6')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>




@endsection
