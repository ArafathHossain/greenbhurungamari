<!DOCTYPE html>
<html lang="en">
<head>
<title>Organaization</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/matrix-media.css')}}" />
<link href="{{asset('public/backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('public/backend/css/jquery.gritter.css')}}" />
<link rel="stylesheet" href="{{asset('public/backend/css/datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('public/ckeditor/sample.css')}}" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<!-- chart -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
<style type="text/css">
   .respons-table {
   overflow-x: scroll; width: 100%;
  }
</style>
</head>
<body>

  @php

  $prefix = Request::route()->getPrefix();
  $route = route::current()->getName();
  @endphp

@guest


@else

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Organaization</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="{{route('admin.password.change')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="{{route('admin.logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--sidebar-menu-->
<div id="sidebar">
  <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li ><a href="{{url('admin/home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="submenu"> <a href="#"><i class=" icon-globe"></i> <span>Union</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('create.union')}}">Add New</a></li>
        <li><a href="{{route('union')}}">Union List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>Cadres</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('create.clients')}}">Add New Cadre</a></li>
        <li><a href="{{route('clients')}}">Cadre List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>Pages</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('pages.create')}}">Add New page</a></li>
        <li><a href="{{route('pages.all')}}">Page List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>Galary</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('image.create')}}">Add Image</a></li>
        <li><a href="{{route('image.all')}}">Image List</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon-group"></i> <span>উপজেলা সম্পর্কে/তথ্য</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('pages2.create')}}">Create Pages</a></li>
        <li><a href="{{route('pages2.all')}}">All Pages</a></li>
      </ul>
    </li>

    <li ><a href="{{url('admin/contactus/edit')}}"><i class="icon icon-home"></i> <span>Contact Us</span></a> </li>

    <li ><a href="{{url('admin/donation/edit')}}"><i class="icon icon-home"></i> <span>Donation</span></a> </li>
    <li ><a href="{{route('site.settings')}}"><i class="icon icon-home"></i> <span>Site Settings</span></a> </li>

    <!-- <li class="submenu"> <a href="#"><i class="icon-list-ul"></i> <span>User Role</span><span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{route('add.admin')}}">Add New</a></li>
        <li><a href="{{route('all.admins')}}">All Users</a></li>
      </ul>
    </li> -->

    <!-- <li> <a href="{{route('all.mssages')}}"><i class="icon-envelope-alt"></i> <span>Massages</span></a></li> -->

  </ul>
</div>


@endguest

@yield('admin_content')

<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('public/backend/js/excanvas.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.flot.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.peity.min.js')}}"></script> 
<script src="{{asset('public/backend/js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.dashboard.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.interface.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.chat.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.validate.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.form_validation.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.wizard.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.popover.js')}}"></script> 

<script src="{{asset('public/backend/js/jquery.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('public/backend/js/jquery.uniform.js')}}"></script> 
<script src="{{asset('public/backend/js/select2.min.js')}}"></script>  
<script src="{{asset('public/backend/js/matrix.js')}}"></script> 
<script src="{{asset('public/backend/js/matrix.tables.js')}}"></script>
<script src="{{asset('public/backend/js/matrix.form_common.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.toggle.buttons.js')}}"></script>
<script src="{{asset('public/backend/js/masked.js')}}"></script>
<script src="{{asset('public/backend/js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('public/backend/js/bootstrap-wysihtml5.js')}}"></script>




<script src="{{asset('public/backend/js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  

     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

@yield('ckeditor')



</body>
</html>
