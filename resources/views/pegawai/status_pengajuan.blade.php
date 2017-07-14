@extends('layouts.user')
@section('js_addon')
    <script>       
        $(document).ready(function() {
            $('#table-penduduk-sortable').DataTable({
                "searching": true,
                "bPaginate": true
            });
        });
        $('tr#isi').on('dblclick', function() {
            var penduduk_id = $(this).attr('penduduk_id');
            var noKtp = $(this).attr('noKtp');
            var nama = $(this).attr('nama');
            var tglLahir = $(this).attr('tglLahir');
            var selectTipe = $(this).attr('jk');
            var agama = $(this).attr('agama');
            var alamat = $(this).attr('alamat');

            $('input[id="penduduk_id"]').val(penduduk_id);
            $('input[id="noKtp"]').val(noKtp);
            $('input[id="nama"]').val(nama);
            $('input[id="tglLahir"]').val(tglLahir);
            if(selectTipe == 1) {
                $('input[id="jk"]').val("Laki-laki");
            }
            else $('input[id="jk"]').val("Perempuan");
            $('input[id="agama"]').val(agama);
            $('textarea[id="alamat"]').val(alamat);
            
            $('#request_detail').modal('show');
        });

    </script>
@endsection
@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center">
                    <!-- /. ROW  -->   
					  <font face="Comic sans MS" size="5">Status Pengajuan</font></p>
                  <br>
                    @include('flash::message')
                    @include('sweet::alert')
                    <div align="right">Double click table untuk melihat detail request</div>
                  
                  <div class="table-responsive">
                        <table id="table-penduduk-sortable" class="table table-hover table-sm">
                            <thead>
                                <tr>    
                                    <th class="text-xs-center">No.</th>
                                    <th style="text-align: center">Waktu Pengajuan</th>
                                    <th style="text-align: center">Waktu Pemrosesan</th>
                                    <th style="text-align: center">Status</th>
									<th style="text-align: center">Alasan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($mod_requests as $mod_req)
                                <tr id="isi"
                                    data-target="#request_detail"
                                    req_id="{{ $mod_req->id }}"
                                    penduduk_id="{{ $mod_req->penduduk_id }}"
                                    user_id="{{ $mod_req->user_id }}"
                                    noKtp="{{ $mod_req->noKtp }}"
                                    nama="{{ $mod_req->nama }}"
                                    tmptLahir="{{ $mod_req->tmptLahir }}"
                                    tglLahir="{{ $mod_req->tglLahir }}"
                                    jk="{{ $mod_req->jk }}"
                                    agama="{{ $mod_req->agama }}"
                                    alamat="{{ $mod_req->alamat }}"
                                    no_telp="{{ $mod_req->no_telp }}"
                                    created_at="{{ $mod_req->created_at }}"
                                >
									<td>{{ $loop->iteration }}</td>
                                    <td>{{ $mod_req->created_at }}</td>
                                    <td>{{ $mod_req->updated_at }}</td>
									<td>STATUS PLACEHOLDER</td>
                                    <td>REASON PLACEHOLDER</td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                  <br>
                  
                  </div>
                    
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                   
                 <!-- /. ROW  -->           
    	  </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
         
    <!-- Modal Detail -->
    <div class="modal fade" id="request_detail" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Request Detail</h4>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ url('/home/edit') }}" method="post">
                        {{ csrf_field() }}
                        <input id="penduduk_id" style="display: none" name="penduduk_id">

                        <label>NIP</label>
                        <input class="form-group form-control" id="noKtp" type="text" name="noKtp" readonly>

                        <label>Nama</label>
                        <input class="form-group form-control" id="nama" type="text" name="nama" readonly>

                        <label>Tanggal Lahir</label>
                        <input class="form-group form-control" id="tglLahir" type="text" name="tglLahir" readonly>

                        <label>Jenis Kelamin</label>
                        <input class="form-group form-control" id="jk" type="text" name="jk" readonly>

                        <label>Agama</label>
                        <input class="form-group form-control" id="agama" type="text" name="agama" readonly>

                        <label>Alamat</label>
                        <textarea class="form-group form-control" id="alamat" rows="5" name="alamat" readonly></textarea>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection        