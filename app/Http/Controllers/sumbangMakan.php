<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sumbang_makan;

class sumbangMakan extends Controller
{
    public function sumbangMakan(){
        return view('sumbangMakan');
    }
    public function mulaiBerbagi(Request $request){
        $validated = $request->validate([
            'nama_makanan' => 'required',
            'porsi_makanan' => 'required',
            'no_telp' => 'required',
            'tanggal_dibuat' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'id_lokasi' => 'required',
            'foto_makanan' => 'required',
        ]);

        sumbang_makan::create([
            'user_id' => Auth::user()->id,
            'nama_makanan' => $request->nama_makanan,
            'porsi_makanan' => $request->porsi_makanan,
            'no_telp' => $request->no_telp,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,
            'id_lokasi' => $request->id_lokasi,
            'foto_makanan' => $request->file('foto_makanan')->store('foto_makanan'),
        ]);

        return redirect()->route('home');
    }
    public function dashboard(){
        $user = Auth ::id();
        $produk =  sumbang_makan::where('user');
    }

    public function donasi(){
        return view('donasi');
    }

    public function detailMenu(){
        return view('');
    }

    public function approve($id)
    {
        $sumbang_makan = sumbang_makan::where('id', $id)->first();

        $sumbang_makan->status = 'approved';

        $sumbang_makan->save();

        return redirect()->back();
    }
}
