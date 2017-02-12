<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view ('kendaraan.index',compact('kendaraans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'plat_nomer' => 'required|unique:kendaraan|max:15|min:5',
        'jam_masuk' => 'required',
        'jam_keluar' => 'required',
        ]);
         $kendaraan = new Kendaraan;

        $kendaraan->plat_nomer = $request->plat_nomer;
        $kendaraan->jam_masuk = $request->jam_masuk;
        $kendaraan->jam_keluar = $request->jam_keluar;

        $kendaraan->save();

        return redirect ('parkiran')->with('message','Create Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($plat_nomer)
    {
         $kendaraan=Kendaraan::find($plat_nomer);
        if (!$kendaraan) {
            abort(404);
        }
        return view('kendaraan.single')->with('kendaraan',$kendaraan);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kendaraan=Kendaraan::find($id);
        if (!$kendaraan) {
            abort(404);
        }
        return view('kendaraan.edit')->with('kendaraan',$kendaraan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'plat_nomer' => 'required|unique:kendaraan|max:15|min:5',
        'jam_masuk' => 'required',
        'jam_keluar' => 'required',
        ]);

        $kendaraan=Kendaraan::find($id);

        $kendaraan->plat_nomer = $request->plat_nomer;
        $kendaraan->jam_masuk = $request->jam_masuk;
        $kendaraan->jam_keluar = $request->jam_keluar;

        $kendaraan->save();

        return redirect ('parkiran')->with('message','Edit Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
