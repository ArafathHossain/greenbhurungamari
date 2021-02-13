@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{url('admin/home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
  </div>
  <div class="container-fluid" >
    <div class="row-fluid">
      <div class="span12">
        
        
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Create Image</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('store.image')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" name="title" required="" placeholder="Enter here..." />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Picture</label>
              <div class="controls">
                <input type="file" id="file" name="picture" onchange="readURL(this);">
                <img src="#" id="one">
                @error('pro_picture')
                  <span class="invalid-feedback" role="alert">
                      <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
                  </span>
                @enderror
              </div>
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




@endsection
