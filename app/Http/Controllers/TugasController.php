<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pasien = Tugas::all();
        // return view('dosendashboard', ['pasien0256'=> $pasien]);

        $coba = "test";
        var_dump($test);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien_tambah0256');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pasien::create([
            'id' => $request-> id,
            'nama' => $request-> nama,
            'alamat' => $request-> alamat,
        ]);

        return redirect('pasien0256');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = pasien::find($id);
        return view('pasien_edit0256',['pasien'=>$pasien]);
        
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
        $pasien = pasien::find($id);
        $pasien->id = $request->id;
        $pasien->nama = $request->nama;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return redirect('pasien0256');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();

        return redirect('pasien0256');
    }
}
