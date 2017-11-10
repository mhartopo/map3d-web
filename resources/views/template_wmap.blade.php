<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{URL::asset('css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('css/startmin.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/myapp.css')}}" rel="stylesheet">
    
    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('css/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{URL::to('/')}}">DIVERENTIA</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="{{URL::to('/')}}"><i class="fa fa-home fa-fw"></i> Home</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="dropdown-menu dropdown-user">
            <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li> -->
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out fa-fw"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="{{URL::to('/')}}/clusters" ><i class="fa fa-building fa-fw"></i> Kompleks </a>
                    </li>
                    <li>
                        <a href="{{URL::to('/')}}/owners"><i class="fa fa-users fa-fw"></i> Pemilik</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Detail Objek <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{URL::to('/')}}/buildings">Bangunan</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/lands">Tanah</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/parks">Taman</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/streets">Jalan</a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/waters">Perairan</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        @yield('page_title')
                    </h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            @yield('head_content')

            @yield('content')
            <div id="map"></div>
        </div>
    </div>

</div>

<!-- jQuery -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{URL::asset('js/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{URL::asset('js/startmin.js')}}"></script>


<!-- Google map script -->
<script>
  function initMap() {
    
    var lat = -6.909579;
    var lng = 107.606419;
    if(document.getElementById("latInput").value != "") {
        lat = document.getElementById("latInput").value;
        lng = document.getElementById("lngInput").value;
    }

    document.getElementById("latInput").value = lat;
    document.getElementById("lngInput").value = lng;
    
    var myLatlng = new google.maps.LatLng(lat,lng);
    var mapOptions = {
      zoom: 14,
      center: myLatlng,
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  
    // Place a draggable marker on the map
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable:true,
        title:"Drag me!"
    });
    
    google.maps.event.addListener(marker, 'dragend', function (evt) {
        document.getElementById("latInput").value = evt.latLng.lat().toFixed(3);
        document.getElementById("lngInput").value = evt.latLng.lng().toFixed(3);
    });
  }
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkbn1OV1eztX06B-paXTZ4RkLoJrL3PII&callback=initMap"> </script>
<script src="https://google-maps-utility-library-v3.googlecode.com/svn-history/r287/trunk/markerclusterer/src/markerclusterer.js"></script>
</body>
</html>
