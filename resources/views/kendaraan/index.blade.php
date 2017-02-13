@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Parkir</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('message'))
					    <div class="alert alert-success">
				           {{ Session::get('message') }}
				        </div>
					@endif
					<a href="/parkiran/create" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>Plat Nomor</th>
							<th>Jam Masuk</th>
							<th>Jam Keluar</th>
							<th>Action</th>
						</tr>
					@foreach($kendaraans as $kendaraan)
						<tr>
						<td>{{ $kendaraan -> plat_nomer }}</td></a>
						<td>{{ $kendaraan -> jam_masuk }}</td>
						<td>{{ $kendaraan -> jam_keluar }}</td>
							<td>
							<form method="POST" action="/parkiran/{{$kendaraan->id}}" accept-charset="UTF-8">
									<input type="hidden" name="_method" value="delete">
		                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                            <a href="/parkiran/{{$kendaraan->id}}/edit" class="btn btn-primary">Edit</a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form>
							</td>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection