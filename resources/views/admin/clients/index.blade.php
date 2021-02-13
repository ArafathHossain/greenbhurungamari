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
            <h5>Cadre table</h5>
            <a href="{{route('create.clients')}}" class="btn btn-success" style="float: right; margin-bottom: 20px; margin-top: 2.5px; margin-right: 8px;">Add New Cadre</a>
          </div>

          <div class="widget-content nopadding respons-table">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Name</th>
                  <th>Union</th>
                  <th>Designation</th>
                  <th>phone</th>
                  <th>Email</th>
                  <th>SSC</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($cadre as $key=>$row)
                <tr class="gradeX">
                  <td>{{ $key +1 }}</td>
                  <td style="text-align: center;">{{ $row->name }}</td>
                  <td style="text-align: center;">{{ $row->area_name }}</td>
                  <td style="text-align: center;">{{ $row->designation }}</td>
                  <td style="text-align: center;">{{ $row->phone }}</td>
                  <td style="text-align: center;">{{ $row->email }}</td>
                  <td style="text-align: center;">{{ $row->ssc }}</td>
                  <td style="text-align: center;">
                    <a href="{{ URL::to('admin/cadre/edit/'.$row->id) }} " class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('admin/cadre/delete/'.$row->id) }} " id="delete" class="btn btn-sm btn-danger">Delete</a>
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
