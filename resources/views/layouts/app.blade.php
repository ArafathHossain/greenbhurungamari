<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}" />
    
    <!-- Font Awesome -->
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/agent/public/user/assets/css/fontawesome.min.css" />
    <style>
        @import    url('https://fonts.maateen.me/kalpurush/font.css');
        html{
          scroll-behavior: smooth;
        }
        body{
            font-family: 'Kalpurush', Arial, sans-serif !important;
            
        }
        .header-top select{
            height: 32px!important;
            font-size: 13px!important;
            padding: 4px!important;
        }
        .nav-item{
            padding:0px 5px!important;
        }
        .nav-link{
            color:#000!important;
            font-size:18px!important;
        }
        .marquee a{
            text-decoration: none;
        }
        .footer-bottom{
            background-color:#DFE0E3;
        }
        .footer-top{
            background-color:#EBECEF;
        }
        .imgheight{
            height: 150px;
        }
        .fb-page span, iframe{
            height:160px!important;
        }
        .bg-custom{
            background-color:springgreen;
        }
        .custom-border{
            border-top-left-radius:10px;
            border-top-right-radius:10px;
        }
        /*Success Student Section Css*/
        .success-student p{
            margin-bottom: 0px!important;
        }
        .success-student .item .card-body{
            padding:0px!important;
        }

        /*All Course Section*/
        .course .container{
            padding-left:0px!important;
            padding-right:0px!important;
        }
        .contact-map iframe{
            height: 329px!important;
            width: 100%!important;
        }
        .header-menu .dropdown-menu .dropdown-divider:last-child{
            border-top:0px!important;
        }

        /*Back To Top*/
        #myBtn {
          display: none; /* Hidden by default */
          position: fixed; /* Fixed/sticky position */
          bottom: 20px; /* Place the button at the bottom of the page */
          right: 30px; /* Place the button 30px from the right */
          z-index: 99; /* Make sure it does not overlap */
          border: none; /* Remove borders */
          outline: none; /* Remove outline */
          background-color: transparent; /* Set a background color */
          cursor: pointer; /* Add a mouse pointer on hover */
          padding: 15px; /* Some padding */
          border-radius: 10px; /* Rounded corners */
          font-size: 18px; /* Increase font size */
        }
        #myBtn:hover {
          background-color: #555; /* Add a dark-grey background on hover */
        }

    </style>
    <link rel="stylesheet" type="text/css" href="http://localhost/agent/public/user/assets/css/responsive.css">
    <title>MM IT SOFT Treaning Center</title>
  <link rel='stylesheet' type='text/css' property='stylesheet' href='//localhost/agent/public/_debugbar/assets/stylesheets?v=1611139307&theme=auto'><script type='text/javascript' src='//localhost/agent/public/_debugbar/assets/javascript?v=1611139307'></script><script type="text/javascript">jQuery.noConflict(true);</script>
</head>
  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=786357888600012&autoLogAppEvents=1" nonce="55ZTYvRZ"></script>
    <div class="header-top bg-custom">
    </div><!-- .header-top end -->

    

<div class="main-content">
  <div class="container">
    <div class="header-banner">
        <img class="w-100" src="{{asset('public/frontend/images/companyLogo.jpg')}}" alt="">
    </div><!-- .header-banner end -->
    <div class="header-menu bg-custom">
      <div class="container">
        <div class="row">
          <div class="col-10">
              <nav class="navbar navbar-expand-lg navbar-light">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active btn-link">
                    <a class="nav-link" href="index.html">হোম <span class="sr-only">(current)</span></a>
                  </li>
                   
                  <li class="nav-item btn-link">
                    <a class="nav-link " href="aboutUs.html">প্রতিষ্ঠান সম্পর্কে</a>
                  </li>

                  <li class="nav-item btn-link">
                    <a class="nav-link" href="cader_list.html">বিসিএস ক্যাডার লিস্ট</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    বিখ্যাত ব্যক্তি
                    </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="http://localhost/agent/public/course/details/3">গ্রাফিক্স ডিজাইন</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://localhost/agent/public/course/details/4">কম্পিউটার প্রোগ্রামিং</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://localhost/agent/public/course/details/6">Test</a>
                  </div>
                  </li>
                  <li class="nav-item btn-link">
                    <a class="nav-link" href="http://localhost/agent/public/contact2">যোগাযোগ</a>
                  </li>
                  <li class="nav-item btn-link">
                    <a class="nav-link" href="http://localhost/agent/public/contact2">অনুদান</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div><!-- .container end -->
    </div><!-- .header-menu end -->
  </div><!-- .container end -->
</div><!-- .main-content end -->

@yield('content')

    <br> 
    <div class="footer-top pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 col-md-12 col-sm-12 col-xl-4">
                    <h4 class="font-weight-bold pb-2">যোগাযোগ</h4>
                    <h5>MM IT</h5>
                    <p>হক ম্যানশন (৬ষ্ঠ তলা), ২১/১ জিগাতলা, ধানমন্ডি, ঢাকা-১২০৯</p>
                    <p> ০১৮৬০৪২৪৩৪৪, ০১৩১৮৩০০৯০৫</p>
                    <p>mmitsolution18@gmail.com</p>
                </div>
            </div>
        </div><!-- .container end -->
    </div><!-- .footer-top end -->

    <div class="footer-bottom p-3">
        <div class="container">
            <span class="text-dark text-left">কপিরাইট © 2021 MM IT</span>
            <span class="text-dark float-right">Powered by : MM IT SOFT LTD.</span>
        </div><!-- .container end -->
    </div><!-- .footer-bottom end -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{asset('public/frontend/images/download.png')}}" height="20px" width="25px"></button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        items:5, 
        loop:true,
        margin:20,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        nav:false,
        dots:false,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    $('.owl-carousel').owlCarousel({
    rtl:false,
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

    //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    </script>
</body>
</html>