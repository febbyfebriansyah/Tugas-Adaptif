@extends('layouts.user')
@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"><div class="col-md-12"> 
                   
                  <p align="center">
                    <!-- /. ROW  -->   
					  <font face="Comic sans MS" size="5">Status Pengajuan</font></p>
                  <br>
                  
                  <div class="table-responsive">
                        <table id="table-penduduk-sortable" class="table table-hover table-sm">
                            <thead>
                                <tr>    
                                    <th class="text-xs-center">no</th>
                                    <th style="text-align: center">Tanggal Pengajuan</th>
                                    <th style="text-align: center">Tanggal Pemrosesan</th>
                                    <th style="text-align: center">Status</th>
									<th style="text-align: center">Alasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
									<td>1</td>
                                    <td>29 agustus 2016</td>
                                    <td>30 agustus 2016</td>
									<td>diterima</td>
                                    <td><button type="cancel" class="btn btn-primary">Alasan</button></td>
                                    
                                </tr>
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
@endsection        