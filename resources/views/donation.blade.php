@extends('welcome')
@section('content')
@php
$donation = DB::table('donation')->where('id',1)->first();
@endphp
<div class="inner-content-area mt--55 mb--60">
  <div class="container">
    <div class="row mb--60">
      <div class="col-lg-12 mb-md--45 pt-2">
        <div class="about-us shadow">
          <div class="card">
            <div class="card-header bg-custom">
            <h4 class="text-dark">অনুদান</h4>
            </div>
            <div class="container">
              <p>{!! $donation->description !!}</p>
            </div>
          </div>
        </div><!-- .about-us end -->
      </div>
    </div>
  </div>
</div>

@endsection
