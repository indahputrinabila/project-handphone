@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Transaksi
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>

			<div class = "panel-body">
				<!-- <form action="{{route('transaksi.show',$transaksi->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> -->

					<div class="form-group">
					<label class="control-label">nama pembeli</label>
					<input type="text" name="" class="form-control" name="a" value="{{$transaksi->pembeli->nama_pembeli}}" readonly="">
				</div>

					<div class="form-group">
						<label class="control-label">Tanggal</label>
						<input type="text" name="b" class="form-control" value="{{$transaksi->tanggal}}" readonly="" >
					</div>

					
			

<!-- 				</form>
 -->				
 </div>
			</div>
			</div>
			</div>
@endsection
		