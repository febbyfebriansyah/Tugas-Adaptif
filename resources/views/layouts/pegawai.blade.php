<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Kepegawaian Diskominfo Provinsi Jawa Barat</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('js/datatables.min.css') }}" rel="stylesheet">
     <!-- GOOGLE FONTS-->
     @yield('css_addon')
   </head>
<body>
     
    @if(Auth::user()->isAdmin() == 0)
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="adjust-nav">
             <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ url('/home') }}" class="navbar-brand" style="font-size:12px;  color:#fff;">
                        <font face="Comic sans MS">Web Kepegawaian Diskominfo Provinsi Jawa Barat</font>
                    </a>
                </div>
              	 <span class="logout-spn" >
                  <a href="logout" style="font-size:12px;  color:#fff;">LOGOUT</a>  

                </span>
                 <span class="logout-spn" >
                  <a href="#" style="font-size:12px;  color:#fff;"><img src="{{ asset('img/home1.png') }}" width="22" height="22" alt=""/></a>  
			   </span>
           <span class="logout-spn" >
                  <a href="#" style="font-size:12px;  color:#fff;"><img src="{{ asset('img/notif1.png') }}" width="22" height="22" alt=""/></a>  
			   </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <li> <a href="{{ url('/profil') }}"><em class="fa fa-table "></em>Profil Diri</a> </li>
                  <li> <a href="{{ url('/status') }}"><em class="fa fa-table "></em>Status Pengajuan</a> </li>
                  @if(Auth::user()->isAdmin())
                        <li> <a href="{{ url('/employees') }}"><em class="fa fa-table "></em>List Pegawai</a> </li>
                  @endif
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
         @yield('content')
        </div>
    <div class="footer">
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <center><font face="Comic sans MS" size="5">Website Kepegawaian<br>Diskominfo Provinsi Jawa Barat</font></center>
    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @yield('js_addon')
    
    @else
      <script type="text/javascript">
          window.location = "{{ url('/home') }}";
      </script>
    @endif
	</div>
</body>
</html>
