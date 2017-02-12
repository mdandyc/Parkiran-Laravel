

<h1>Create Blog Post</h1>

<form action="/parkiran" method="post">
	<input type="text" name="plat_nomer" placeholder="Plat Nomor"><br>
	{{ ($errors->has('plat_nomer')) ? $errors->first('plat_nomer') : '' }} <br>
	<input type="text" name="jam_masuk" placeholder="Jam Masuk"><br>
	{{ ($errors->has('jam_masuk')) ? $errors->first('jam_masuk') : '' }} <br>
		<input type="text" name="jam_keluar" placeholder="Jam Keluar"><br>
	{{ ($errors->has('jam_keluar')) ? $errors->first('jam_keluar') : '' }} <br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
	<input type="submit" name="name" value="Post">
</form>