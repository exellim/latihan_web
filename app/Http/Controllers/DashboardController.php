<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tugas;


class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('mahasiswa')){
        $tugas = Tugas::all();
        return view('mahasiswadashboard', ['coba'=> $tugas]);
        }elseif(Auth::user()->hasRole('dosen')){
        $tugas = Tugas::all();
        return view('dosendashboard', ['coba'=> $tugas]);
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }

    public function create()
    {
        return view('tambahtugas');
    }

    public function store(Request $request)
    {
        Tugas::create([
            'id' => $request-> id,
            'kelas' => $request-> kelas,
            'nama_tugas' => $request-> nama_tugas,
            'tugas_deadline' => $request-> tugas_deadline,
        ]);

        return redirect('dashboard');
    }
    public function edit($id)
    {
        $ambil = Tugas::find($id);
        return view ('edittugas', ['ambil'=> $ambil]);
    }

    public function update(request $request, $id)
    {
        $ambil = Tugas::find($id);
        $ambil->id = $request->id;
        $ambil->kelas = $request ->kelas;
        $ambil->nama_tugas = $request ->nama_tugas;
        $ambil->tugas_deadline = $request ->tugas_deadline;
        $ambil ->save();

        return redirect('dashboard');

    }

    public function destroy($id)
    {
        $hapus = Tugas::find($id);
        $hapus->delete();

        return redirect('dashboard');
    }

}
