@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />

<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid" >
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Create Cadre</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ url('admin/pages/update/'.$details->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf

            <div class="control-group">
               <label class="control-label" >Category :</label>
              <div class="controls">
                <select data-placeholder="Choose Category" class="span11" required="" name="category_id" >
                  <option label="Choose Category"></option>
                  <option value="1" <?php if ($details->category_id == 1) { echo "selected"; } ?>>পর্যটন</option>
                  <option value="2"<?php if ($details->category_id == 2) { echo "selected"; } ?>>জরুরি কল</option>
                  <option value="3"<?php if ($details->category_id == 3) { echo "selected"; } ?>>স্বাস্থ্য</option>
                  <option value="4"<?php if ($details->category_id == 4) { echo "selected"; } ?>>অন্যান</option>
                  
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11" required="" value="{{$details->title}}" name="title"/>
              </div>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label ">Description :</label>
              <div class="controls" style=" margin-right:90px;">
                <textarea id="editor" class="span11" name="description">{{$details->description}}</textarea>
              </div>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>



            


            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update</button>
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

@section('ckeditor')
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ), {
      // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    } )
    .then( editor => {
      window.editor = editor;
    } )
    .catch( err => {
      console.error( err.stack );
    } );
</script>
@endsection