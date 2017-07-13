@extends('layouts.admin')
@section('css_addon')
    <style>
        [hidden] {
          display: none !important;
        }
    </style>
@endsection
@section('js_addon')
    <script>       
        $(document).ready(function() {
            $('#table-penduduk-sortable').DataTable({
                "searching": false,
                "bPaginate": false
            });
        } );
        $('.btn-edit').on('click', function(){
            var penduduk_id = $(this).attr('penduduk');
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
            $('select[id="selectTipe"]').val(selectTipe);
            $('input[id="agama"]').val(agama);
            $('textarea[id="alamat"]').val(alamat);

        });
        $('.btn-delete').on('click', function () {
            var url = $(this).attr('url');

            swal({
                title: "Anda Yakin?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus saja",
                closeOnConfirm: false
            }, function(){
                window.location.href = url;
            });
        });
        $('.btn-tambah').on('click', function(){
            var nips = $(this).attr('nips');
            // var seek = false;
            swal({
                title: "Cek NIP!",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                animation: "slide-from-top",
                inputPlaceholder: "Masukkan NIP"
            },
            function(inputValue){
                if(inputValue === false) return false;
                if(inputValue === ""){
                    swal.showInputError("Mohon inputkan NIP");
                    return false;
                }
                var seek = nips.indexOf(inputValue);
                if(seek == -1){
                    swal.close();
                    $('#add-ktp').val(inputValue);
                    $('#modalAdd').modal("toggle");
                }else{
                    swal.showInputError("NIP Sudah Ada");
                    return false;
                }
                // for(i=0;i<nips.length;i++){
                //     if(nips[i].localeCompare(inputValue) == 0){
                //         break;
                //     }
                // }
                // if(seek === true){
                //     swal.showInputError("NIP Sudah Ada");
                //     return false;
                // }else{
                //     swal.close();
                //     $('#modalAdd').modal("toggle");
                // }
            });
        });
        {{--$('.btn-upload').on('click',function(){
                            var uploadFile = $('input[id="upload-file"]').val().replace(/C:\\fakepath\\/i, '');
                            $('#label-file').html(uploadFile);
                        });--}}
    </script>
@endsection
@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center">
                    <!-- /. ROW  -->   
					  <font face="Comic sans MS" size="5">List Pegawai</font></p>
                  <br>
                    @include('flash::message')
                    @include('sweet::alert')
                  <form method="get">
                        <div class="row">
                            <div class="col-md-9">
                                <button type="button" class="btn btn-primary btn-tambah" nips="{{ $nips }}">Tambah Penduduk</button>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12 float-md-right float-sm-none">
                                <div class="form-group">
                                    <input type="text"
                                           class="search form-control"
                                           placeholder="Search by No.KTP/Nama"
                                           name="search" value="{{ $search or "" }}" >
                                </div>
                            </div>
                        </div>
                  </form>
                  <br>
                  <div class="table-responsive">
                        <table id="table-penduduk-sortable" class="table table-hover table-sm">
                            <thead>
                                <tr>    
                                    <th class="text-xs-center">#</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $skipped = ($penduduks->currentPage() * $penduduks->perPage())
                            - $penduduks->perPage();?>
                            @foreach($penduduks as $penduduk)
                                <tr>
                                    <td class="text-xs-center">{{ $loop->iteration + (($page-1) * 10) }}</td>
                                    <td>{{ $penduduk->noKtp }}</td>
                                    <td>{{ $penduduk->nama }}</td>
                                    <td>{{ $penduduk->getJK() }}</td>

                                    <td th style="text-align: center">
                                        <a href="{{ url('/home/detail') }}/{{ $penduduk->id }}" type="button" class="btn btn-success btn-sm">Detail</a>
                                        <button type="button" class="btn btn-info btn-sm btn-edit"
                                                data-toggle="modal" penduduk="{{ $penduduk->id }}"
                                                noKtp="{{ $penduduk->noKtp }}"
                                                nama="{{ $penduduk->nama }}"
                                                tglLahir="{{ $penduduk->tglLahir }}"
                                                agama="{{ $penduduk->agama }}"
                                                jk="{{ $penduduk->jk }}"
                                                alamat="{{ $penduduk->alamat }}"
                                                data-target="#modalEdit">Edit
                                        </button>
                                        <button type="button" url="{{ url('/home/delete') }}/{{ $penduduk->id }}"
                                           class="btn btn-danger btn-sm btn-delete">Delete
                                        </button>
                                        <button type="button" data-toggle="modal" data-target="#modalUpload" url="{{ url('/home/upload') }}/{{ $penduduk->id }}" type="file" class="btn btn-primary btn-sm">Upload</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    {{ $penduduks->appends(['search' => $search])->links('vendor.pagination.bootstrap-4') }}
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
         
    <!-- Modal Add Pegawai-->
    <div class="modal fade" id="modalAdd" tabindex="-1">
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalAddLabel">Tambah Penduduk</h4>
                </div>
                <div class="modal-body">
                    <form class="form" enctype="multipart/form-data" action="{{ url('/home/create') }}" method="post">
                        {{ csrf_field() }}

                        <label>NIP</label>
                        <input class="form-group form-control" type="text" name="noKtp" required>

                        <label>Nama</label>
                        <input class="form-group form-control" type="text" name="nama" required>

                        <label>Tempat Lahir</label>
                        <input class="form-group form-control" type="text" name="tmptLahir" required>

                        <label>Tanggal Lahir</label>
                        <input class="form-group form-control" type="text" name="tglLahir" required>

                        <label>Jenis Kelamin</label>
                        <div class="form-group">
                            <select class="form-control" id="selectTipe" name="jk">
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>

                        <label>Agama</label>
                        <input class="form-group form-control" type="text" name="agama" required>

                        <label>Alamat</label>
                        <textarea class="form-group form-control" rows="5" name="alamat" required></textarea>

                        <label>No. Telepon/HP</label>
                        <input class="form-group form-control" type="text" name="noTelp" required>

                        {{-- Testing Upload Button --}}
                        {{--<label>File</label>
                                                                        <div class="form-group">
                                                                            <label class="btn btn-primary btn-upload">
                                                                                Upload File <input id="upload-file" type="file" name="file_url" onchange="javascript: document.getElementById('file-upload').value = this.value" hidden>
                                                                            </label>
                                                                            <p id="label-file">choose file</p>
                                                                            <br>
                                                                            <small class="form-text text-muted">Upload File (types : *.pdf | *.ppt |*.pptx | *.doc | *.docx | *.jpg | *.png)</small>
                                                                        </div>--}}

                        <label>Foto</label>
                        <small class="form-text text-muted">(types : *.jpg | *.png)</small>
                        <input type="file" accept=".jpg, .png, .jpeg" name="image_url" class="filestyle form-group" data-buttonName="btn-info" data-placeholder="Tidak ada file" data-buttonText="Upload Foto" data-iconName="glyphicon glyphicon-user" data-buttonBefore="true">

                        <label>Berkas</label>
                        <small class="form-text text-muted">(types : *.pdf | *.ppt |*.pptx | *.doc | *.docx | *.jpg | *.png, etc)</small>
                        <input type="file" name="file_url" class="filestyle form-group" data-buttonName="btn-success" data-placeholder="Tidak ada file" data-buttonText="Upload File" data-iconName="glyphicon glyphicon-file" data-buttonBefore="true">
                        {{--<label>Upload File</label>
                                                                         <div class="form-group" style="display: inline;">
                                                                             <input type="button" style="position: relative; left: -1p"xtr class="btn btn-primary " id="button" value="Upload File">
                                                                             <input type="file" style="opacity: 0; position: relative; left: -40px" class="form-control-file" name="file_url" onchange="javascript: document.getElementById('fileName').value = this.value" required>
                                                                             <span><input type="text" id="fileName" readonly></span>
                                                                             <small class="form-text text-muted">Upload File (types : *.pdf | *.ppt |*.pptx | *.doc | *.docx | *.jpg | *.png)</small>
                                                                         </div>--}} 

                        <div class="modal-footer">
                            <hr>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Agenda-->
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
                    <form class="form" action="{{ url('/home/edit') }}" method="post">
                        {{ csrf_field() }}
                        <input id="penduduk_id" style="display: none" name="penduduk_id">

                        <label>NIP</label>
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
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upload File-->
    <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form" action="{{ url('/home/upload') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Upload Berkas</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Upload File</label>
                            <input type="file" class="form-control-file" name="file_url" required>
                            <small class="form-text text-muted">Upload File (types : *.pdf | *.ppt |*.pptx | *.doc | *.docx | *.jpg | *.png)</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection        