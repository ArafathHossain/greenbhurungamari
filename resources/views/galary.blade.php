@extends('welcome')
@section('content')
@php
$images = DB::table('galarys')->get();
@endphp
<link rel="stylesheet" href="{{asset('public/frontend/galary/style.css')}}" />


<div class="inner-content-area mt--55 mb--60">
  <div class="container">
    <div class="row mb--60">
      <div class="col-lg-12 mb-md--45 pt-2">
        <div class="about-us shadow">
          <div class="card">
            <div class="card-header bg-custom">
            <h4 class="text-dark">গ্যালারি</h4>
            </div>         
            <div class="container">
              <div class="row">
                <div class="row">
                  @foreach($images as $row)
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$row->title}}"
                     data-image="{{URL::to($row->picture)}}"
                     data-target="#image-gallery">
                      <img class="img-thumbnail"
                       src="{{URL::to($row->picture)}}"alt="Another alt text">
                    </a>
                  </div>
                  @endforeach
                    </div>
                    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                    </button>

                                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
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
