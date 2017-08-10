@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Transaksi
		<div class="panel-title pull-right"><a href="/transaksi/create">
		Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						
						<th>Tanggal</th>
						<th>Nama Pembeli</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($transaksi as $data)
					<tr>
						<td>{{$data->tanggal}}</td>
						<td>{{$data->pembeli->nama_pembeli}}</td>
						<td>
							<a href="/transaksi/{{$data->id}}/edit" class="btn btn-warning">Edit</a></td>
							<td>
							<a href="/transaksi/{{$data->id}}" class="btn btn-success">Show</a></td>
							<td><form action="{{route('transaksi.destroy',$data->id)}}" method="post">
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