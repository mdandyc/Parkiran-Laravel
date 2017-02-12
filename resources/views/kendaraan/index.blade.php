{{ Session::get('message') }}

@foreach($kendaraans as $kendaraan)
	<p>{{ $kendaraan -> plat_nomer }}</p></a>
	<p>{{ $kendaraan -> jam_masuk }}</p>
	<p>{{ $kendaraan -> jam_keluar }}</p>
	<hr>
@endforeach