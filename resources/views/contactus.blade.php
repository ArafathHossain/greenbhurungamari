@extends('welcome')
@section('content')
@php
$contact = DB::table('contactus')->where('id',1)->first();
@endphp
<div class="inner-content-area mt--55 mb--60">
  <div class="container">
    <div class="row mb--60">
      <div class="col-lg-12 mb-md--45 pt-2">
        <div class="about-us shadow">
          <div class="card">
            <div class="card-header bg-custom">
            <h4 class="text-dark">যোগাযোগ</h4>
            </div>
            <div class="container">
              <p>{!! $contact->description !!}</p>
            </div>
          </div>
        </div><!-- .about-us end -->
      </div>
    </div>
  </div>
</div>

@endsection
