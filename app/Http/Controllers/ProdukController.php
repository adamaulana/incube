<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class ProdukController extends Controller
{
    
    public function index(){
        $getmentor = DB::table('mentor')->get();
        return view('dashboard/tahap_abstract')->with(compact('getmentor'));
    }

    // pendaftaran produk
    public function registerProduk(Request $request){
        $id_ceo = Session::get('id_siswa');
        $nama_produk = $request->nama_produk;
        $cek = DB::table('product')
        ->where('nama_produk',$nama_produk)
        ->count();
        
        if($cek == 0){
            $input = DB::table('product')->insert([
                'nama_produk'   => $request->nama_produk,
                'deskripsi'     => $request->deskripsi,
                'id_mentor'     => $request->mentor,
                'id_ceo'        => $id_ceo
            ]);
            if($input){
                $input_track = DB::table('track_step')->insert([
                    'id_ceo' => $id_ceo,
                    'id_step'  => '2'
                ]);                
                // session(['produk' => $request->nama_produk]);
                return redirect('/tahap_team');
            } 
        }else{
            return redirect('/product_abstract')->with('status', 'Maaf produk sudah ada');
        }
    }
}
