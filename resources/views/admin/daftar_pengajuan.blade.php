@extends('layouts.user')
@section('js_addon')
    <script>       
        $(document).ready(function() {
            $('#table-penduduk-sortable').DataTable({
                "searching": false,
                "bPaginate": true
            });
        });
    </script>
@endsection
@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center">
                    <!-- /. ROW  -->   
					  <font face="Comic sans MS" size="5">Daftar Pengajuan</font></p>
                  <br>
                    @include('flash::message')
                    @include('sweet::alert')
                  </div>
                    
                </div>              
                 <!-- /. ROW  -->
                  <div class="table-responsive">
                        <table id="table-penduduk-sortable" class="table table-hover table-sm">
                            <thead>
                                <tr>    
                                    <th style="text-align: center">NIP</th>
                                    <th style="text-align: center">Nama</th>
                                    <th style="text-align: center">Jenis Pengajuan</th>
                                    <th style="text-align: center">Waktu Pengajuan</th>
									<th style="text-align: center">Terima</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($mod_requests as $mod_req)
                                <tr>
									<td>{{ $mod_req->noKtp }}</td>
                                    <td>{{ $mod_req->nama }}</td>
                                    <td>Edit</td>
									<td>{{ $mod_req->created_at }}</td>
                                    <td><button type="button" class="btn btn-primary">Ya</button> <button type="button" class="btn btn-primary">Tidak</button></td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
         </div>
@endsection