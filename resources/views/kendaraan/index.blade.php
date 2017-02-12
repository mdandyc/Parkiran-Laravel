{{ Session::get('message') }}
<a href="/parkiran/create"><h3>Create</h3></a>
@foreach($kendaraans as $kendaraan)
<a href="/parkiran/{{$kendaraan->id}}">
	<p>{{ $kendaraan -> plat_nomer }}</p></a>
	<p>{{ $kendaraan -> jam_masuk }}</p>
	<p>{{ $kendaraan -> jam_keluar }}</p>
	<hr>
@endforeach