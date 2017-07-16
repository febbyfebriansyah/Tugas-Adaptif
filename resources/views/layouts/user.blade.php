<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Kepegawaian Diskominfo Provinsi Jawa Barat</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
     <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('js/datatables.min.css') }}" rel="stylesheet">
     @yield('css_addon')
   </head>
<body>
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
                        <center><font face="Comic sans MS">Web Kepegawaian <br>
              Diskominfo Provinsi Jawa Barat</font></center>
                    </a>
                </div>
                 <span class="logout-spn" >
                  <a href="{{ url('/logout') }}" style="font-size:12px;  color:#fff;">LOGOUT</a>  

                </span>
                 <span class="logout-spn" >
                  <a href="{{ url('/home') }}" style="font-size:12px;  color:#fff;"><img src="{{ asset('img/home white.png') }}" width="22" height="22" alt=""/></a>  
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
                  <li> <a href="{{ url('/profil') }}"><em class="fa fa-table "></em> Profil Diri</a> </li>
                @if(Auth::user()->isAdmin())
                  <li> <a href="{{ url('/home/employees') }}"><em class="fa fa-table "></em> Daftar Pegawai</a></li>
                  <li> <a href="{{ url('/request_list') }}"><em class="fa fa-table "></em> Daftar Pengajuan</a></li>
                  <li> <a href="{{ url('/status') }}"><em class="fa fa-table "></em> History Pengajuan</a> </li>
                @else
                  <li> <a href="{{ url('/status') }}"><em class="fa fa-table "></em> Status Pengajuan</a> </li>
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
    <script src="{{ asset('assets/bower/bootstrap-filestyle/src/bootstrap-filestyle.min.js') }}"></script>
    <!-- Hiding Flash Messages-->
    <script>
      $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
    @yield('js_addon')
  </div>
</body>
</html>
