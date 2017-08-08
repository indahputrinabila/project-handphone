@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="/barang/create">
		Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Satuan</th>
						<th>Jumlah Beli</th>
						<th>Harga Beli</th>
						<th>Harga Jual</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($barang as $data)
					<tr>
						<td>{{$data->nama_barang}}</td>
						<td>{{$data->satuan}}</td>
						<td>{{$data->jumlah_beli}}</td>
						<td>{{$data->harga_beli}}</td>
						<td>{{$data->harga_jual}}</td>
						<td>
							<a href="/barang/{{$data->id}}/edit" class="btn btn-warning">Edit</a></td>
							<td>
							<a href="/barang/{{$data->id}}" class="btn btn-success">Show</a></td>
							<td><form action="{{route('barang.destroy',$data->id)}}" method="post">
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