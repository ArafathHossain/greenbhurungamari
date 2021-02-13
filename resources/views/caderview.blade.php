@extends('welcome')
@section('content')
<div class="inner-content-area mt--55 mb--60">
  <div class="container">
    <div class="row mb--60">
      <div class="col-lg-12 mb-md--45 pt-2">
        <div class="about-us shadow">
          <div class="card">
            <div class="card-header ">
            <h4 class="text-dark">{{$singlecadre->name}}</h4>
            </div>
            <div class="card-body">
            <img src="{{url($singlecadre->picture)}}" class="border border-dark shadow" style="float: right; height: 150px; border-radius: 2px;">
            </div>

            <div class="card-body shadow">
            <div class="card">
              <div class="card-body">
                <p class="card-text">{!! $singlecadre->description !!}</p>
              </div>
            </div>
            </div>

          </div>
        </div><!-- .about-us end -->
      </div>
    </div>
  </div>
</div>

@endsection
