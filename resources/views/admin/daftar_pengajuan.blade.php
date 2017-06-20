@extends('layouts.admin')
@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center">
                    <!-- /. ROW  -->           
                    <br>
                    <br>
                  </p>
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
                                    <th style="text-align: center">Tanggal</th>
									<th style="text-align: center">Terima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
									<td>19029</td>
                                    <td>Andhika Gilang</td>
                                    <td>Alamat: Jl. Sukaasih No 30, Bandung</td>
									<td>20-06-2017</td>
                                    <td><button type="button" class="btn btn-primary">Ya</button> <button type="button" class="btn btn-primary">Tidak</button></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
@endsection