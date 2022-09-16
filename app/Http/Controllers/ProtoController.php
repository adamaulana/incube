<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class ProtoController extends Controller
{
    public function index(){
        return view('dashboard/tahap_workflow');
    }

    public function setFigma(Request $request){
        $id_produk = Session::get('id_produk');
        $cek = DB::table('protolink')
        ->where('id_produk',$id_produk)
        ->count();

        if($cek == 0){
            $insertFigma = DB::table('protolink')->insert([
                'link_figma' => $request->link_figma,
                'id_produk'  => $id_produk
            ]);

            return redirect('/proto');
        }else{
            $updateFigma = DB::table('protolink')
            ->where('id_produk',$id_produk)
            ->update([
                'link_figma' => $request->link_figma,
            ]);
            return redirect('/proto');
        }
    }
}
