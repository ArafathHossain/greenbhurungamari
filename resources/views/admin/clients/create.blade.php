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
          <form action="{{ route('store.clients')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >    
            @csrf
            <div class="control-group">
              <label class="control-label">নাম :</label>
              <div class="controls">
                <input type="text" class="span11" required="" name="name"/>
              </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
            </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">ইমেইল :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" required="" autocomplete="off"/>
              </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong style="padding-left: 50px; color: red;">{{ $message }}</strong>
              </span>
            @enderror
            </div>

            <div class="control-group">
              <label class="control-label">ফোন :</label>
              <div class="controls">
                <input type="text" class="span11" name="phone" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">মোবাইল :</label>
              <div class="controls">
                <input type="text" class="span11" name="mobile" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">পিতার নাম :</label>
              <div class="controls">
                <input type="text" class="span11" name="father" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">মাতার  নাম :</label>
              <div class="controls">
                <input type="text" class="span11" name="mother" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">SSC :</label>
              <div class="controls">
                <input type="text" class="span11" required="" name="ssc" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">স্থায়ী ঠিকানা :</label>
              <div class="controls">
                <input type="text" class="span11" name="permanent_address"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">গ্রাম :</label>
              <div class="controls">
                <input type="text" class="span11" name="village" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">ওয়ার্ড :</label>
              <div class="controls">
                <input type="text" class="span11" name="ward" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">ইউনিয়ন :</label>
              <div class="controls">
                <select data-placeholder="Choose Union" required="" name="union_id">
                  <option label="Choose Union"></option>
                  @foreach($union as $row)
                  <option value="{{ $row->id }}">{{ $row->area_name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">কর্মস্থল ঠিকানা :</label>
              <div class="controls">
                <input type="text" class="span11" name="work_address"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">পদবি :</label>
              <div class="controls">
                <input type="text" class="span11" required="" name="designation" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">ফেইসবুক :</label>
              <div class="controls">
                <input type="text" class="span11" name="facebook"/>
              </div>
            </div>
            
            
            <div class="control-group">
              <label class="control-label">ছবি</label>
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

          <div class="control-group">
            <label class="control-label ">Description :</label>
              <div class="controls" style=" margin-right:90px;">
              <textarea id="editor" class="span11" name="description"></textarea>
              </div>
            @error('description')
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
