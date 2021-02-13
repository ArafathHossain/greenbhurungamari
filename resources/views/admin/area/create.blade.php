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
          <h5>Create Union</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('store.union')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">Union Code :</label>
              <div class="controls">
                <input type="text" class="span11" name="area_code" required="" placeholder="Enter here..." />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Union Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="area_name" required="" placeholder="Enter here..." />
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







@endsection
