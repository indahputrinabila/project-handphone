@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Karyawan
		<div class="panel-title pull-right"><a href="/karyawan/create">
		Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nik</th>
						<th>Nama Karyawan</th>
						<th>Jabatan</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($karyawan as $data)
					<tr>
						<td>{{$data->nik}}</td>
						<td>{{$data->nama_karyawan}}</td>
						<td>{{$data->jabatan}}</td>
						<td>
							<a href="/karyawan/{{$data->id}}/edit" class="btn btn-warning">Edit</a></td>
							<td>
							<a href="/karyawan/{{$data->id}}" class="btn btn-success">Show</a></td>
							<td><form action="{{route('karyawan.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
	</div>
@endsection