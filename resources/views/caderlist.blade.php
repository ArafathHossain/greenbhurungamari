@extends('welcome')
@section('content')
<div class="inner-content-area mt--55 mb--60">
  <div class="container">
    <div class="row mb--60">
      <div class="col-lg-12 mb-md--45 pt-2">
        <div class="about-us shadow">
          <div class="card">
            <div class="card-header bg-custom">
              <h4 class="text-dark">{{$union->area_name}}</h4>
            </div>
          <div class="card-body" style="overflow-x: scroll; width: 100%;">
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th width="10%" class="align-middle" style="text-align: center;">ছবি</th>
                  <th width="10%" class="align-middle" style="text-align: center;">নাম</th>
                  <th width="25%" class="align-middle" style="text-align: center;">স্থায়ী ঠিকানা</th>
                  <th width="20%" class="align-middle" style="text-align: center;">বর্তমান কর্মস্থল</th>
                  <th width="30%" class="align-middle" style="text-align: center;">যোগাযোগ</th>
                  <th width="5%" class="align-middle" style="text-align: center;">SSC ব্যাচ</th>
                </tr>
              </thead>
              <tbody>
                @foreach($caders as $row)
                <tr>
                  <td class="align-middle"> <img src="{{URL::to($row->picture)}}"  width="70" height="70"> </td>
                  <td class="align-middle"><a href="{{ url('cadre/'.$row->id) }}" >{{$row->name}}</a></td>
                  <td>
                    <ul>
                      <li>পিতা: {{$row->father}}</li>
                      <li>মাতা: {{$row->mother}}</li>
                      <li>গ্রাম: {{$row->village}}</li>
                      <li>ওয়ার্ড: {{$row->ward}}</li>
                    </ul>
                  <td>
                    <ul>
                      <li>পদবি: {{$row->designation}}</li>
                      <li>ঠিকানা: {{$row->work_address}}</li>
                    </ul>
                  </td>
                  <td>
                    <ul>
                      <li>ফোন: {{$row->phone}}</li>
                      <li>মোবাইল: {{$row->mobile}}</li>
                      <li>ইমেইল: {{$row->email}}</li>
                      <li>ফেইসবুক: <a href="{{$row->facebook}}" target="blank"> {{$row->facebook}} </a></li>
                    </ul>
                  </td>
                  <td>{{$row->ssc}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
          </div>
        </div><!-- .about-us end -->
      </div>
    </div>
  </div>
</div>

@endsection