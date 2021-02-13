@php
$cadre =  DB::table('cadres')->get();
$cat1 = DB::table('pages')->where('category_id',1)->get();
$cat2 = DB::table('pages')->where('category_id',2)->get();
$cat3 = DB::table('pages')->where('category_id',3)->get();
$cat4 = DB::table('pages')->where('category_id',4)->get();
$sitesettings = DB::table('sitesettings')->where('id',1)->first();

@endphp
@extends('welcome')
@section('content')
<div class="inner-content-area mt--55 mb--60">
      <div class="container">
        <div class="row mb--60">
          <div class="col-lg-9 mb-md--45 pt-2">
            <div class="slider ">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{URL::to($sitesettings->slide_image1)}}" class="w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div><!-- .carousel-item end -->

                  <div class="carousel-item">
                    <img src="{{URL::to($sitesettings->slide_image2)}}" class="w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                  </div><!-- .carousel-item end -->

                  <div class="carousel-item">
                    <img src="{{URL::to($sitesettings->slide_image3)}}" class="w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                    </div>
                  </div><!-- .carousel-item end -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div><!-- .carousel end -->
            </div><!-- .slider end -->

            <div class="news-update mt-2">
              <div class="row">
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                  <span class="btn bg-custom text-dark" style="padding: 10px 13px; border:none!important;">নিউজ আপডেট</span>
                  
                </div>
                <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-10" style="/*border: 1px dashed #000;*/">
                  <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="marquee " behavior="" direction="" style="padding:10px; ">
                       <a href="" class="text-dark">  {{$sitesettings->newsfeed}} </a>
                  </marquee>
                </div>
              </div><!-- .row end -->
            </div><!-- .news-update end -->

            <div class="about-us shadow mt-4">
              <div class="card">
                <div class="card-header bg-custom">
                  <h4 class="text-dark">আমাদের সম্পর্কে</h4>
                </div>
                <div class="card-body">
                 <p class="text-justify"> {{$sitesettings->aboutus}} </p>
                </div>
              </div>
            </div><!-- .about-us end -->

            <div class="row mt-5">
              <div class="col-12">
                <div class="success-student shadow">
                  <div class="card">
                    <div class="card-header bg-custom">
                      <h4 class=" text-center font-weight-bold">সোনার ছেলে</h4>
                    </div><!-- .card-header end -->
                    <div class="card-body">
                      <div class="owl-carousel owl-theme">
                        @foreach($cadre as $row)
                        <div class="card item">
                          <div class="card-body">
                            <img src="{{URL::to($row->picture)}}" class="img-fluid" alt="" style="height: 200px;">
                            <a href="{{url('/cadre/'.$row->id)}}"><p class="text-center pt-2">{{$row->name}}</p></a>
                            <p class="text-center pb-3">{{$row->designation}}</p>
                          </div>
                        </div>
                        @endforeach
                      </div><!-- .owl-carousel end -->
                    </div><!-- .card-body end -->
                  </div><!-- .card end -->
                  
                </div><!-- .success-student end -->
              </div>
            </div><!-- .row end -->



            <div class="row mt-5">
              <div class="col-6" >
                <div class="shadow">
                    <div class="card" style="background-color: lightgray;">
                      <div class="row" >
                        <div class="col-md-4 p-4">
                          <h5 class="card-title ml-1" >পর্যটন</h5>
                          <img src="{{asset('public/frontend/images/travel.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="card-text">
                              <ul>
                                @foreach($cat1 as $row)
                                <a href="{{url('/page_details/'.$row->id)}}"><li>{{$row->title}}</li></a>
                                @endforeach
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div><!-- .card end -->
                </div><!-- .success-student end -->
              </div>
              <div class="col-6">
                <div class="shadow">
                    <div class="card" style="background-color: lightgray;">
                      <div class="row" >
                        <div class="col-md-4 p-4">
                          <h5 class="card-title ml-1">জরুরি কল</h5>
                          <img src="{{asset('public/frontend/images/phone.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="card-text">
                              <ul>
                                @foreach($cat2 as $row)
                                <a href="{{url('/page_details/'.$row->id)}}"><li>{{$row->title}}</li></a>
                                @endforeach
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div><!-- .card end -->
                </div><!-- .success-student end -->
              </div>

              <div class="col-6 mt-4">
                <div class="shadow">
                    <div class="card" style="background-color: lightgray;">
                      <div class="row" >
                        <div class="col-md-4 p-4">
                          <h5 class="card-title ml-1">স্বাস্থ্য</h5>
                          <img src="{{asset('public/frontend/images/doctor.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="card-text">
                              <ul>
                                @foreach($cat3 as $row)
                                <a href="{{url('/page_details/'.$row->id)}}"><li>{{$row->title}}</li></a>
                                @endforeach
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div><!-- .card end -->
                </div><!-- .success-student end -->
              </div>

              <div class="col-6 mt-4">
                <div class="shadow">
                    <div class="card" style="background-color: lightgray;">
                      <div class="row" >
                        <div class="col-md-4 p-4">
                          <h5 class="card-title ml-1">অন্যান</h5>
                          <img src="{{asset('public/frontend/images/etc.png')}}" alt="">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="card-text">
                              <ul>
                                @foreach($cat4 as $row)
                                <a href="{{url('/page_details/'.$row->id)}}"><li>{{$row->title}}</li></a>
                                @endforeach
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                  </div><!-- .card end -->
                </div><!-- .success-student end -->
              </div>
            </div><!-- .row end -->

        <div class="row pt-4">
          <div class="col-4" style="height:109px;">
           <a href="#" target="_blank">
             <img src="{{URL::to($sitesettings->ads_image1)}}" class="w-100" style="height:109px;"  alt="">
           </a>
          </div>

          <div class="col-4" style="height:109px;">
           <a href="#" target="_blank">
             <img src="{{URL::to($sitesettings->ads_image2)}}" class="w-100" style="height:109px;"  alt="">
           </a>
          </div>

          <div class="col-4" style="height:109px;">
           <a href="#" target="_blank">
             <img src="{{URL::to($sitesettings->ads_image3)}}" class="w-100" style="height:109px;"  alt="">
           </a>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-4" style="height:109px;">
           <a href="#" target="_blank">
             <img src="{{URL::to($sitesettings->ads_image4)}}" class="w-100" style="height:109px;"  alt="">
           </a>
          </div>

          <div class="col-4" style="height:109px;">
           <a href="#" target="_blank">
             <img src="{{URL::to($sitesettings->ads_image5)}}" class="w-100" style="height:109px;"  alt="">
           </a>
          </div>

          <div class="col-4" style="height:109px;">
           <a href="#" target="_blank">
             <img src="{{URL::to($sitesettings->ads_image6)}}" class="w-100" style="height:109px;"  alt="">
           </a>
          </div>
        </div>

      </div>

          <div class="col-lg-3 pt-2"> <!-- right side collumn -->
            <div class="message shadow">
              <h4 class="bg-custom text-dark text-center font-weight-bold p-2 custom-border">{{$sitesettings->p1_designation}}</h4>
                <div class="msg-image p-3">
                    <img class="w-100" style="height: 220px;" src="{{URL::to($sitesettings->p1_image)}}" alt="">
                </div>
                <div class="msg-content ">
                  <h6 class="text-center mt-2">{{$sitesettings->p1_name}}</h6>
                </div>
            </div>

            <div class="message shadow">
              <h4 class="bg-custom text-dark text-center font-weight-bold p-2 custom-border">{{$sitesettings->p2_designation}}</h4>
                <div class="msg-image">
                    <img src="{{URL::to($sitesettings->p2_image)}}" alt="">
                </div>
                <div class="msg-content">
                  <h6 class="text-center mt-2">{{$sitesettings->p2_name}}</h6>
                </div>
            </div><!-- .message end -->

            <div class="message shadow ">
              <h4 class="bg-custom text-dark text-center font-weight-bold p-2 custom-border">{{$sitesettings->p3_designation}}</h4>
                <div class="msg-image p-3">
                    <img class="w-100 imgheight" src="{{URL::to($sitesettings->p3_image)}}" alt="">
                </div>
                <div class="msg-content">
                  <h6 class="text-center mt-2">{{$sitesettings->p3_name}}</h6>
                </div>
            </div><!-- .message end -->

            <div class="message shadow">
              <h4 class="bg-custom text-dark text-center font-weight-bold p-2 custom-border">জরুরি হটলাইন</h4>
                <div class="msg-image p-4">
                    <img class="w-100" src="{{URL::to($sitesettings->national_hotline_image)}}" alt="">
                </div>
            </div><!-- .message end -->

            <div class="message shadow pt-2">
              <h4 class="bg-custom text-dark text-center font-weight-bold p-2 custom-border">স্থানীয় হটলাইন</h4>
                <div class="msg-image p-4">
                    <img class="w-100" height="275px;" src="{{URL::to($sitesettings->local_hotline_image)}}" alt="">
                </div>
            </div><!-- .message end -->

          </div>
        </div>
      </div>
    </div>

@endsection
