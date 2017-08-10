@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">	
	<center><h1>Data Pembeli</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Pembeli
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>

			<div class = "panel-body">
				<!-- <form action="{{route('pembeli.show',$pembeli->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}"> -->

					<div class="form-group">
						<label class="control-label">Nama Pembeli</label>
						<input type="text" name="a" class="form-control" value="{{$pembeli->nama_pembeli}}" readonly="" >
					</div>

					<div class="form-group">
						<label class="control-label">Alamat</label>
						<textarea class="form-control" rows="10" name="b" readonly="">{{$pembeli->alamat}}</textarea>
					</div>
			

<!-- 				</form>
 -->				
 </div>
			</div>
			</div>
			</div>
@endsection
		