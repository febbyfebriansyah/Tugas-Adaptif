@extends('layouts.user')
@section('css_addon')
<style>
	.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
		margin: 0;
		padding: 0;
		border: none;
		box-shadow: none;
		text-align: center;
	}
	.kv-avatar .file-input {
		display: table-cell;
		max-width: 220px;
	}
	.kv-reqd {
		color: red;
		font-family: monospace;
		font-weight: normal;
	}
</style>
@endsection
@section('js_addon')
<!-- the fileinput plugin initialization -->
<script>
	var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
	'onclick="alert(\'Call your custom code here.\')">' +
	'<i class="glyphicon glyphicon-tag"></i>' +
	'</button>'; 
	$("#avatar-1").fileinput({
		overwriteInitial: true,
		maxFileSize: 1500,
		showClose: false,
		showCaption: false,
		browseLabel: '',
		removeLabel: '',
		browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
		removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
		removeTitle: 'Cancel or reset changes',
		elErrorContainer: '#kv-avatar-errors-1',
		msgErrorClass: 'alert alert-block alert-danger',
		defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar" style="width:160px">',
		layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
		allowedFileExtensions: ["jpg", "png", "gif"]
	});
</script>


@endsection
@section('content')
<div id="page-wrapper" >
	<div id="page-inner">
		<br>
		<div class="kv-avatar center-block text-center" style="width:200px">
		{{-- http://localhost:8000/storage/storage/image_upload/71/tset (copy).png --}}
			<img class="img-responsive img-thumbnail" src="{{ $image }}">
		</div>
		<br>
		<table class="col-sm-12 table-condensed">
			<tr>
				<td class="col-sm-3">NIP</td>
				<td class="col-sm-9">: {{ $penduduk->noKtp }}</td>
			</tr>
			<tr>
				<td class="col-sm-3">Nama</td>
				<td class="col-sm-9">: {{ $penduduk->nama }}</td>
			</tr>
			<tr>
				<td class="col-sm-3">Tempat</td>
				<td class="col-sm-9">: {{ $penduduk->tmptLahir }}</td>
			</tr>
			<td class="col-sm-3">Tanggal Lahir</td>
			<td class="col-sm-9">: {{ $penduduk->tglLahir }}</td>
		</tr>
		<tr>
			<td class="col-sm-3">Agama</td>
			<td class="col-sm-9">: {{ $penduduk->agama }}</td>
		</tr>
		<tr>
			<td class="col-sm-3">Jenis Kelamin</td>
			<td class="col-sm-9">: {{ $penduduk->getJK() }}</td>
		</tr>
		<tr>
			<td class="col-sm-3">Alamat</td>
			<td class="col-sm-9">: {{ $penduduk->alamat }}</td>
		</tr>
		<tr>
			<td class="col-sm-3">No. Telp</td>
			<td class="col-sm-9">: {{ $penduduk->noTelp }}</td>
		</tr>
		<tr>
			<td class="col-sm-3">Berkas Terupload</td>
			<td class="col-sm-9">: {{ $penduduk->file_url or "Belum Upload" }}</td>
		</tr>
	</table>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
@endsection