@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>
			
			<div class="panel-body">
				<form action="{{route('karyawan.update',$karyawan->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">Nik</label>
						<input type="text" name="a" class="form-control" required="" value="{{$karyawan->nik}}">
					</div>

					<div class="form-group">
						<label class="control-label">Nama Karyawan</label>						
						<input type="text" name="b" class="form-control" required="" value="{{$karyawan->nama_karyawan}}">
					</div>

					<div class="form-group">
						<label class="control-label">Jabatan</label>
						<input type="text" name="c" class="form-control" required="" value="{{$karyawan->jabatan}}">
					</div>



					

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>

				</form>
				
			</div>
			</div>
			</div>
			</div>
@endsection