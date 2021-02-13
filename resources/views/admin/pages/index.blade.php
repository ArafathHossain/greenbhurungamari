@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/css/uniform.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/select2.css')}}" />

<div id="content">
  <div id="content-header">
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Pages table</h5>
            <a href="{{route('pages.create')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add New Page</a>
          </div>

          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Category Name</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pages as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">
                    @if($row->category_id == 1)
                    <p>পর্যটন</p>
                    @endif
                    @if($row->category_id == 2)
                    <p>জরুরি কল</p>
                    @endif
                    @if($row->category_id == 3)
                    <p>স্বাস্থ্য</p>
                    @endif
                    @if($row->category_id == 4)
                    <p>অন্যান</p>
                    @endif
                    
                  </td>
                  <td style="text-align: center;">{{ $row->title }}</td>
                  <td style="text-align: center;">
                    <a href="{{ URL::to('admin/pages/edit/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('admin/pages/delete/'.$row->id) }} " id="delete" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
