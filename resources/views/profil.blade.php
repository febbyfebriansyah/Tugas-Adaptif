@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
        @if($user != null)
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">Profil</div>
                        <div class="panel-body">
                            <div style="margin: auto">
                                <label>No. KTP</label>
                                <input class="form-group form-control" id="noKtp" type="text" name="noKtp" placeholder="{{ $user->noKtp  }}" readonly>

                                <label>Nama</label>
                                <input class="form-group form-control" id="nama" type="text" name="nama" placeholder="{{ $user->nama  }}" readonly>

                                <label>Tanggal Lahir</label>
                                <input class="form-group form-control" id="tglLahir" type="text" name="tglLahir" placeholder="{{ $user->tglLahir  }}" readonly>

                                <label>Jenis Kelamin</label>
                                @if($user->jk == 1)
                                    <input class="form-group form-control" id="jk" type="text" name="jk" placeholder="Laki-laki" readonly>
                                @elseif($user->jk == 2)
                                    <input class="form-group form-control" id="jk" type="text" name="jk" placeholder="Perempuan" readonly>
                                @endif

                                <label>Agama</label>
                                <input class="form-group form-control" id="agama" type="text" name="agama" placeholder="{{ $user->agama  }}" readonly>

                                <label>Alamat</label>
                                <textarea class="form-group form-control" id="alamat" rows="5" name="alamat" placeholder="{{ $user->alamat  }}" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{ "ANDA BELUM TERDAFTAR" }}
        @endif

    </div>
@endsection