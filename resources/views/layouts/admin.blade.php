<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <center><title>Web Kepegawaian <br>
    Diskominfo Provinsi Jawa Barat</title></center>
  <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     @yield('css_addon')
   </head>
<body>
     
    @if(Auth::user()->isAdmin() == 1)
     
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
           <div class="adjust-nav">
             <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ url('/dashboard') }}" class="navbar-brand" style="font-size:12px;  color:#fff;">
                        <center><font face="Comic sans MS">Web Kepegawaian <br>
              Diskominfo Provinsi Jawa Barat</font></center>
                    </a>
                </div>
                 <span class="logout-spn" >
                  <a href="#" style="font-size:12px;  color:#fff;">LOGOUT</a>  

                </span>
                 <span class="logout-spn" >
                  <a href="{{ url('/dashboard') }}" style="font-size:12px;  color:#fff;"><img src="{{ asset('img/home white.png') }}" width="22" height="22" alt=""/></a>  
         </span>
           <span class="logout-spn" >
                  <a href="#" style="font-size:12px;  color:#fff;"><img src="{{ asset('img/notif white.png') }}" width="34" height="26" alt=""/></a>  
         </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <li> <a href="{{ url('/daftar-pegawai') }}"><em class="fa fa-table "></em> Daftar Pegawai</a></li>
                  <li> <a href="{{ url('/daftar-pengajuan') }}"><em class="fa fa-table "></em> Daftar Pengajuan</a></li>
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
    @yield('js_addon')

    @else
      <script type="text/javascript">
          window.location = "{{ url('/dashboard') }}";
      </script>
    @endif
  </div>
</body>
</html>
