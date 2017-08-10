@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Penjualan
		<div class="panel-title pull-right"><a href="/penjualan/create">
		Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama Barang</th>
						<th>Satuan</th>
						<th>Jumlah Barang</th>
						<th>Id Barang</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($penjualan as $data)
					<tr>
						<td>{{$data->nama_barang}}</td>
						<td>{{$data->satuan}}</td>
						<td>{{$data->jumlah_barang}}</td>
						<td>{{$data->barang->id_barang}}</td>
						<td>
							<a href="/penjualan/{{$data->id}}/edit" class="btn btn-warning">Edit</a></td>
							<td>
							<a href="/penjualan/{{$data->id}}" class="btn btn-success">Show</a></td>
							<td><form action="{{route('penjualan.destroy',$data->id)}}" method="post">
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