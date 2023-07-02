<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\lokasi;
use App\Models\sumbang_makan;
use App\Models\donasi;
use App\Models\kontak;


class AccountController extends Controller
{
    public function login(Request $request){
        return view('login');
    }

    public function submit(Request $request){
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min:4|max:255',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $obj = user::where('email', $email)
        ->first();

        if(!Hash::check($password, $obj->password)){
            return back()->withErrors([
                'Wrong password'
            ]);
        }

        if($obj === NULL) {
         return back()->withErrors([
                'email' => 'email / password salah..!'
            ]);
        }

        $user = Auth::loginUsingId($obj-> id);

        // dd($user);

        if($user->username == 'yeni'){
            $data = sumbang_makan::all();
            return view('admin', ['data' => $data]);
        } else {
            return redirect()->route('home');}
    }

    public function home(Request $request){

        // dd($user);

        // dd($validated);

        $data = sumbang_makan::select()->where('tanggal_kadaluarsa', '>', Carbon::now());

        if(request('id_lokasi')){
            $data->where('id_lokasi', request('id_lokasi'));
        }

        return view('home', ['data' => $data->get()]);
    }

    public function register(Request $request){
        return view('register');
    }

    public function signup(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|min:4|max:255',
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return redirect()->route('home');
    }

    public function donasi(){
        return view('donasi');
    }

    public function mulaiBerbagi(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nominal' => 'required',
            'metode_bayar' => 'required',
            'catatan' => 'required',
        ]);

        donasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nominal' => $request->nominal,
            'tanggal_dibuat' => $request->tanggal_dibuat,
            'metode_bayar' => $request->metode_bayar,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('home');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function detail_makanan($id) {
        $data = sumbang_makan::findOrFail($id);
        return view('detail_makanan', ['data' => $data]);
    }

    public function min_detail_makanan(string $id){
        $makanan = sumbang_makan::find($id);
        $porsi_makanan = $makanan->porsi_makanan-1;
        $status = $makanan->status;
        if($porsi_makanan == 0){
            $status = 'Tidak Tersedia';
        }

        $makanan->update([
            'porsi_makanan' => $porsi_makanan,
            'status' => $status
        ]);

        return back();
    }

    public function berbagi_tuban(Request $request) {
        return view('berbagi_tuban');
    }

    public function berbagi_gresik(Request $request) {
        return view('berbagi_gresik');
    }

    public function berbagi_surabaya(Request $request) {
        return view('berbagi_surabaya');
    }

    public function edit(Request $request, $id) {
        $sumbang_makan = sumbang_makan::where('id', $id)->first();
        return view('edit', ['sumbang_makan' => $sumbang_makan]);
    }

    public function kontak(Request $request) {
        return view('home');
    }

    public function kirim(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        // dd($validated);

        return redirect()->route('home');
    }

    public function lokasi(string $id)
    {
        $lokasi = lokasi::where('user_id', $id) -> first();
        if (!$student) {
            return response()->json(['isregistered' => false, 'message' => 'Lokasi tidak ditemukan'], 200);
        }

        $regency = $student->regency;
        $jobs =JobListing::with('company', 'categories')->where('regency',$regency)->get();

        if ($jobs->isEmpty()) {
            return response()->json(['success'=>false, 'message'=>'Lokasi anda diluar jangkauan'],200);
        }

        return response()->json(['jobs' => $jobs], 200);
    }

}
