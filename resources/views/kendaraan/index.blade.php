{{ Session::get('message') }}
<a href="/parkiran/create"><h3>Create</h3></a>
@foreach($kendaraans as $kendaraan)
<a href="/parkiran/{{$kendaraan->id}}">
	<p>{{ $kendaraan -> plat_nomer }}</p></a>
	<p>{{ $kendaraan -> jam_masuk }}</p>
	<p>{{ $kendaraan -> jam_keluar }}</p>
	<a href="/parkiran/{{$kendaraan->id}}/edit">Edit</a>
	<form action="/parkiran/{{$kendaraan->id}}" method="post">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" name="name" value="Delete">
	</form>
	<hr>
@endforeach