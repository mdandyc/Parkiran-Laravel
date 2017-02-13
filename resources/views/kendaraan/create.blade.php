@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Parkir</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="/parkiran/" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
							<input type="text" name="plat_nomer" class="form-control" placeholder="Plat Nomor">
							{!! ($errors->has('plat_nomer')) ? $errors->first ('plat_nomer' , '<p class="help-block">:message</p>' ) : '' !!}
						</div>
						<div class="form-group">
							<input type="text" name="jam_masuk" class="form-control" placeholder="Jam Masuk">
							{!! ($errors->has('jam_masuk')) ? $errors->first('jam_masuk' , '<p class="help-block">:message</p>' ) : '' !!} 
						</div>
						<div class="form-group">
							<input type="text" name="jam_keluar" class="form-control" placeholder="Jam Keluar" >
							{!! ($errors->has('jam_keluar')) ? $errors->first('jam_keluar' , '<p class="help-block">:message</p>' ) : '' !!} 
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection







