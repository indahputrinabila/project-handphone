@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Penjualan
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a>
		</div></div>

		<div class="panel-body">
			<form action="{{route('penjualan.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-label">Nama Barang</label>
					<select class="form-control" name="d">
					@foreach($barang as $data)
					<option value="{{$data->id}}">{{$data->nama_barang}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Satuan</label>
					<input type="text" name="b" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-label">Jumlah Beli</label>
					<input type="text" name="c" class="form-control" required="">
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