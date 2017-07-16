@extends('layouts.user')
@section('css_addon')
<style>
    .modal-container{
        display: flex;
    }
    .left{  
        width: 50%;
        margin-right: 5px;
        margin-left: 10px;
    }
    .right{
        width: 50%;
        flex-grow: 0;
        margin-right: 10px;
    }
</style>
@endsection
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
            
            var noKtpLama = $(this).attr('noKtpLama');
            var namaLama = $(this).attr('namaLama');
            var tglLahirLama = $(this).attr('tglLahirLama');
            var selectTipeLama = $(this).attr('jkLama');
            var agamaLama = $(this).attr('agamaLama');
            var alamatLama = $(this).attr('alamatLama');

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
            
            $('input[id="noKtpLama"]').val(noKtpLama);
            $('input[id="namaLama"]').val(namaLama);
            $('input[id="tglLahirLama"]').val(tglLahirLama);
            if(selectTipeLama == 1) {
                $('input[id="jkLama"]').val("Laki-laki");
            }
            else $('input[id="jkLama"]').val("Perempuan");
            $('input[id="agamaLama"]').val(agamaLama);
            $('textarea[id="alamatLama"]').val(alamatLama);
            
            $('#request_detail').modal('show');
        });

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        
        $('.btn-decline').on('click', function () {
            var url_target = $(this).attr('url');

            swal({
              title: "Tolak request!",
              text: "Alasan penolakan:",
              type: "input",
              showCancelButton: true,
              closeOnConfirm: false,
              animation: "slide-from-top",
              inputPlaceholder: "Alasan"
            },
            function(inputValue){
              if (inputValue === false) return false;
              
              if (inputValue === "") {
                swal.showInputError("Harus ada alasan penolakan!");
                return false
              }    
              swal({
                  title: "Tolak request ini?",
                  text: "Anda akan menolak request ini dengan alasan: "+inputValue,
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Tolak request",
                  closeOnConfirm: false
                },
                function(){
                    window.location.href = url_target+'/'+inputValue;
                });
            });                         
            
        });
        
        
        $('.btn-accept').on('click', function () {
            var form_id = $(this).attr('form_id');

            swal({
                title: "Anda Yakin?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, terima request",
                closeOnConfirm: false
            }, function(){
                $(form_id).submit();
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
                    @include('layouts.alert_flash')
                    @include('sweet::alert')
                    <div align="right">Double click table untuk melihat detail request</div>
                  </div>
                    
                </div>              
                 <!-- /. ROW  -->
                  <div class="table-responsive">
                        <table id="table-penduduk-sortable" class="table table-hover table-sm">
                            <thead>
                                <tr>    
                                    <th style="text-align: center">No.</th>
                                    <th style="text-align: center">NIP</th>
                                    <th style="text-align: center">Nama</th>
                                    <th style="text-align: center">Waktu Pengajuan</th>
									<th style="text-align: center">Terima</th>
                                </tr>
                            </thead>
                            <tbody>
                            @inject('penduduks', 'App\Penduduk')
                            @foreach($mod_requests as $mod_req)
                            <?php 
                                $penduduk = $penduduks::find($mod_req->penduduk_id);
                            ?>
                                <tr id="isi"
                                    data-toggle="tooltip"
                                    title="Double click untuk melihat detail request"
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
                                    noKtpLama="{{ $penduduk->noKtp }}"
                                    namaLama="{{ $penduduk->nama }}"
                                    tmptLahirLama="{{ $penduduk->tmptLahir }}"
                                    tglLahirLama="{{ $penduduk->tglLahir }}"
                                    jkLama="{{ $penduduk->jk }}"
                                    agamaLama="{{ $penduduk->agama }}"
                                    alamatLama="{{ $penduduk->alamat }}"
                                    no_telpLama="{{ $penduduk->no_telp }}"
                                >
                                    <td>{{ $loop->iteration }}
									<td>{{ $penduduk->noKtp }}</td>
                                    <td>{{ $penduduk->nama }}</td>
									<td>{{ $mod_req->created_at }}</td>
                                    <form style="display: hidden" action="{{ url('/request_list/ya') }}" method="POST" id="data_{{ $mod_req->id }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="var_mod_req" name="var_mod_req" value="{{ $mod_req->id }}">
                                    </form>
                                    <td><button type="button" form_id="#data_{{ $mod_req->id }}" req="{{ $mod_req->id }}" class="btn btn-primary btn-accept">Ya</button> <button type="button" url="{{ url('/request_list/tidak') }}/{{ $mod_req->id }}" class="btn btn-danger btn-decline">Tidak</button></td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
         </div>
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
                <div class="modal-container">
                    <div class="left">
                      <p align="center">
                        <!-- /. ROW  -->   
                          <font face="Comic sans MS" size="3">Data Lama</font></p>
                        {{ csrf_field() }}
                        <label>NIP</label>
                        <input class="form-group form-control" id="noKtpLama" type="text" name="noKtp" readonly>

                        <label>Nama</label>
                        <input class="form-group form-control" id="namaLama" type="text" name="nama" readonly>

                        <label>Tanggal Lahir</label>
                        <input class="form-group form-control" id="tglLahirLama" type="text" name="tglLahir" readonly>

                        <label>Jenis Kelamin</label>
                        <input class="form-group form-control" id="jkLama" type="text" name="jk" readonly>

                        <label>Agama</label>
                        <input class="form-group form-control" id="agamaLama" type="text" name="agama" readonly>

                        <label>Alamat</label>
                        <textarea class="form-group form-control" id="alamatLama" rows="5" name="alamat" readonly></textarea>
                        
                        <div class="modal-footer">
                        </div>
                    </div>
                    <div class="right">
                      <p align="center">
                        <!-- /. ROW  -->   
                          <font face="Comic sans MS" size="3">Data Baru</font></p>
                        {{ csrf_field() }}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection