@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>

			<div class = "panel-body">
				<!-- <form action="{{route('barang.show',$barang->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> -->

					<div class="form-group">
						<label class="control-label">Nama Barang</label>
						<input type="text" name="a" class="form-control" value="{{$barang->nama_barang}}" readonly="" >
					</div>

					<div class="form-group">
						<label class="control-label">Satuan</label>						
						<input type="text" name="b" class="form-control" value="{{$barang->satuan}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Jumlah beli</label>
						<input type="text" name="c" class="form-control" value="{{$barang->jumlah_beli}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Harga Beli</label>
						<input type="text" name="d" class="form-control" value="{{$barang->harga_beli}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Harga Jual</label>
						<input type="text" name="e" class="form-control" value="{{$barang->harga_jual}}" readonly="">
					</div>

					
			

<!-- 				</form>
 -->				
 </div>
			</div>
			</div>
			</div>
@endsection
		