<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class ProdukController extends Controller
{
    
    public function index(){
        $getmentor = DB::table('mentor')->get();
        $track = Session::get('track');
        $track_status = Session::get('track_status');

        if($track == 1 && $track_status == 0){
            return view('dashboard/tahap_abstract')->with(compact('getmentor'));
        }elseif($track == NULL && $track_status == NULL)
            return view('dashboard/tahap_abstract')->with(compact('getmentor'));        
        {
            return redirect('/');
        }
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

                $getproduk = DB::table('product')
                ->where('product.nama_produk',$request->nama_produk)
                ->get();
                $getidproduk = 0;
                foreach($getproduk as $prod){
                    $getidproduk = $prod->id;
                }
                
                $inputceo = DB::table('member')->insert([
                    'id_siswa'  =>$id_ceo,
                    'id_produk' => $getidproduk,
                    'position'  => '1'
                ]);


                $input_track = DB::table('track_step')->insert([
                    'id_ceo' => $id_ceo,
                    'id_produk' => $getidproduk,
                    'id_step'   => '1',
                    'status'    => '1'
                ]);                
                // session(['produk' => $request->nama_produk]);
                session(['track' => '1']);
                session(['track_status' => '1']);
                return redirect('/');
            } 
        }else{
            return redirect('/product_abstract')->with('status', 'Maaf produk sudah ada');
        }
    }
}
