@extends('layouts.user')
@section('content')
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row"><div class="col-md-12"> 

      <p align="center">
        <!-- /. ROW  -->   
        <font face="Comic sans MS" size="5">Welcome</font>
        <br>
        <span class="profile-spn" ><br>
          <a href="#" style="font-size:12px;  color:#fff;">
            @if(Auth::user()->penduduk->image_url == null)
                <img src="{{ asset('img/profile2.png') }}" width="210" height="250" alt=""/>
            @else
                <img src="{{ asset('storage') }}/{{ Auth::user()->penduduk->image_url }}" width="210" height="250" alt=""/>
            @endif
            </a></span>
          <br>
          <br>
          <br>
          <font face="Comic sans MS" size="5">{{ Auth::user()->name }}</font><br>
          <font face="Comic sans MS" size="5">NIP. {{ Auth::user()->noKtp }}</font></p>
        </div>

      </div>              
      <!-- /. ROW  -->
      <hr />

      <!-- /. ROW  -->           
    </div>
    <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
  @endsection        