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
            var tmptLahir = $(this).attr('tmptLahir');
            var tglLahir = $(this).attr('tglLahir');
            var selectTipe = $(this).attr('jk');
            var agama = $(this).attr('agama');
            var no_telp = $(this).attr('no_telp');
            var alamat = $(this).attr('alamat');
            
            var noKtpLama = $(this).attr('noKtpLama');
            var namaLama = $(this).attr('namaLama');
            var tmptLahirLama = $(this).attr('tmptLahirLama');
            var tglLahirLama = $(this).attr('tglLahirLama');
            var selectTipeLama = $(this).attr('jkLama');
            var agamaLama = $(this).attr('agamaLama');
            var no_telpLama = $(this).attr('no_telpLama');
            var alamatLama = $(this).attr('alamatLama');

            $('input[id="penduduk_id"]').val(penduduk_id);
            $('input[id="noKtp"]').val(noKtp);
            $('input[id="nama"]').val(nama);
            $('input[id="tmptLahir"]').val(tmptLahir);
            $('input[id="tglLahir"]').val(tglLahir);
            if(selectTipe == 1) {
                $('input[id="jk"]').val("Laki-laki");
            }
            else $('input[id="jk"]').val("Perempuan");
            $('input[id="agama"]').val(agama);
            $('input[id="no_telp"]').val(no_telp);
            $('textarea[id="alamat"]').val(alamat);
            
            $('input[id="noKtpLama"]').val(noKtpLama);
            $('input[id="namaLama"]').val(namaLama);
            $('input[id="tmptLahirLama"]').val(tmptLahirLama);
            $('input[id="tglLahirLama"]').val(tglLahirLama);
            if(selectTipe == 1) {
                $('input[id="jkLama"]').val("Laki-laki");
            }
            else $('input[id="jkLama"]').val("Perempuan");
            $('input[id="agamaLama"]').val(agamaLama);
            $('input[id="no_telpLama"]').val(no_telpLama);
            $('textarea[id="alamatLama"]').val(alamatLama);
            
            $('#request_detail').modal('show');
        });
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
@endsection
@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center">
                    <!-- /. ROW  -->   
					  <font face="Comic sans MS" size="5">Status Pengajuan Perubahan</font></p>
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
									<td>{{ $loop->iteration }}</td>
                                    <td>{{ $mod_req->created_at }}</td>
                                    <td>{{ $mod_req->updated_at }}</td>
                                    @if($mod_req->accepted == 1)
                                        <td>DITERIMA</td>
                                    @elseif($mod_req->accepted == -1)
                                        <td>DITOLAK</td>
                                    @else
                                        <td>BELUM DIPERIKSA</td>
                                    @endif
                                    <td>{{ $mod_req->alasan }}</td>
                                    
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

                        <label>Tempat Lahir</label>
                        <input class="form-group form-control" id="tmptLahirLama" type="text" name="tmptLahirLama" readonly>

                        <label>Tanggal Lahir</label>
                        <input class="form-group form-control" id="tglLahirLama" type="text" name="tglLahir" readonly>

                        <label>Jenis Kelamin</label>
                        <input class="form-group form-control" id="jkLama" type="text" name="jk" readonly>

                        <label>Agama</label>
                        <input class="form-group form-control" id="agamaLama" type="text" name="agama" readonly>

                        <label>No. Telp</label>
                        <input class="form-group form-control" id="no_telpLama" type="text" name="no_telpLama" readonly>

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

                        <label>Tempat Lahir</label>
                        <input class="form-group form-control" id="tmptLahir" type="text" name="tmptLahir" readonly>

                        <label>Tanggal Lahir</label>
                        <input class="form-group form-control" id="tglLahir" type="text" name="tglLahir" readonly>

                        <label>Jenis Kelamin</label>
                        <input class="form-group form-control" id="jk" type="text" name="jk" readonly>

                        <label>Agama</label>
                        <input class="form-group form-control" id="agama" type="text" name="agama" readonly>

                        <label>No. Telp</label>
                        <input class="form-group form-control" id="no_telp" type="text" name="no_telp" readonly>

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