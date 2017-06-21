@extends('layouts.pegawai')
@section('js_addon')
    <script>       
    $('.btn-edit').on('click', function(){
            var penduduk_id = $(this).attr('penduduk');
            var user_id = $(this).attr('user_id');
            var noKtp = $(this).attr('noKtp');
            var nama = $(this).attr('nama');
            var tglLahir = $(this).attr('tglLahir');
            var selectTipe = $(this).attr('jk');
            var agama = $(this).attr('agama');
            var alamat = $(this).attr('alamat');

            $('input[id="penduduk_id"]').val(penduduk_id);
            $('input[id="user_id"]').val(user_id);
            $('input[id="noKtp"]').val(noKtp);
            $('input[id="nama"]').val(nama);
            $('input[id="tglLahir"]').val(tglLahir);
            $('select[id="selectTipe"]').val(selectTipe);
            $('input[id="agama"]').val(agama);
            $('textarea[id="alamat"]').val(alamat);
    });
    </script>
@endsection
@section('content')
        	<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center" style="font-size: 18px">Profil Diri</p>
                  <div class="">
                    <label for="noKtp" class="col-md-3 control-label">NIP</label>

                      <div class="col-md-6">
                           <input id="NIP" type="text" class="form-control"  name="NIP" value="{{ Auth::user()->noKtp }}" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="nama" class="col-md-3 control-label">Nama</label>

                      <div class="col-md-6">
                           <input id="nama" type="text" class="form-control"  name="nama" value="{{ Auth::user()->name }}" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="alamat" class="col-md-3 control-label">Alamat</label>

                      <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control"  name="alamat" value="{{ Auth::user()->penduduk->alamat }}" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="notel" class="col-md-3 control-label">No Telepon</label>

                      <div class="col-md-6">
                        <input id="notel" type="text" class="form-control"  name="notel" value="{{ Auth::user()->penduduk->noTelp }}" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="email" class="col-md-3 control-label">Email</label>

                      <div class="col-md-6">
                        <input id="email" type="text" class="form-control"  name="email" value="{{ Auth::user()->email }}" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="password" class="col-md-3 control-label">Password</label>

                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control"  name="password" value="" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                      	<label for="file" class="col-md-3 control-label">File</label>
                  </div>
                  <br>
                  <div class="form-group">
                            <div class="col-md-11 col-md-offset-4">
                                <button type="button" class="btn btn-primary btn-edit"
                                                data-toggle="modal" penduduk="{{ Auth::user()->penduduk->id }}"
                                                user_id="{{ Auth::user()->id }}"
                                                noKtp="{{ Auth::user()->noKtp }}"
                                                nama="{{ Auth::user()->name }}"
                                                tglLahir="{{ Auth::user()->penduduk->tglLahir }}"
                                                agama="{{ Auth::user()->penduduk->agama }}"
                                                jk="{{ Auth::user()->penduduk->jk }}"
                                                alamat="{{ Auth::user()->penduduk->alamat }}"
                                                data-target="#modalEdit">Edit
                                </button>
					  </div>
                            
                  </div>
                  
                  </div>
                    
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                   
                 <!-- /. ROW  -->           
    	  </div>
             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
    <div class="modal fade" id="modalEdit" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Edit Penduduk</h4>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ url('/profil') }}" method="post">
                        {{ csrf_field() }}
                        <input id="penduduk_id" style="display: none" name="penduduk_id">
                        <input id="user_id" style="display: none" name="user_id">

                        <label>No. KTP</label>
                        <input class="form-group form-control" id="noKtp" type="text" name="noKtp" readonly>

                        <label>Nama</label>
                        <input class="form-group form-control" id="nama" type="text" name="nama" required>

                        <label>Tanggal Lahir</label>
                        <input class="form-group form-control" id="tglLahir" type="text" name="tglLahir" required>

                        <label>Jenis Kelamin</label>
                        <div class="form-group">
                            <select class="form-control" id="selectTipe" name="jk">
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>

                        <label>Agama</label>
                        <input class="form-group form-control" id="agama" type="text" name="agama" required>

                        <label>Alamat</label>
                        <textarea class="form-group form-control" id="alamat" rows="5" name="alamat" required></textarea>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection