@extends('layouts.pegawai')
@section('content')
        	<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center" style="font-size: 18px">Profil Diri</p>
                  <div class="">
                    <label for="noKtp" class="col-md-3 control-label">NIP</label>

                      <div class="col-md-6">
                           <input id="NIP" type="text" class="form-control"  name="NIP" value="" required autofocus readonly>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="nama" class="col-md-3 control-label">Nama</label>

                      <div class="col-md-6">
                           <input id="nama" type="text" class="form-control" placeholder="Masukan nama lengkap anda" name="nama" value="" required autofocus>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="alamat" class="col-md-3 control-label">Alamat</label>

                      <div class="col-md-6">
                        <input id="alamat" type="text" class="form-control" placeholder="Masukan alamat lengkap anda" name="alamat" value="" required autofocus>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="notel" class="col-md-3 control-label">No Telepon</label>

                      <div class="col-md-6">
                        <input id="notel" type="text" class="form-control" placeholder="Masukan nomor telepon anda" name="notel" value="" required autofocus>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="email" class="col-md-3 control-label">Email</label>

                      <div class="col-md-6">
                        <input id="email" type="text" class="form-control" placeholder="Masukan alamat email anda" name="email" value="" required autofocus>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                    <label for="password" class="col-md-3 control-label">Password</label>

                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control" placeholder="Masukan alamat email anda" name="password" value="" required autofocus>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div class="">
                      	<label for="file" class="col-md-3 control-label">File</label>
						<input type="file" class="form-control-file" name="file_url" required>
                  </div>
                  <br>
                  <div class="form-group">
                            <div class="col-md-11 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Ajukan Perubahan</button>
                                <button type="cancel" class="btn btn-primary">Cancel</button> 
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
        </div>
@endsection