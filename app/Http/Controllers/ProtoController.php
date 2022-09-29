<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use File;

class ProtoController extends Controller
{
    public function index(){
        $id_produk =  Session::get('id_produk');
        $dataFigma =  DB::table('protolink')
        ->where('id_produk',$id_produk)
        ->get();

        $dataLogo =  DB::table('logo_produk')
        ->where('id_produk',$id_produk)
        ->get();

        $countFigma =  DB::table('protolink')
        ->where('id_produk',$id_produk)
        ->count();

        $countLogo =  DB::table('logo_produk')
        ->where('id_produk',$id_produk)
        ->count();

        $dataMentor = DB::table('product')
                      ->join('mentor','product.id_mentor','mentor.id')
                      ->where('product.id',$id_produk)
                      ->get();
        

        $track = Session::get('track');
        $track_status = Session::get('track_status');
        if($track == 4 && $track_status == 0){
            return view('dashboard/tahap_workflow')
            ->with(compact('dataFigma','dataLogo','countFigma','countLogo','dataMentor'));
        }else{
            return redirect('/');
        }
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


    public function uploadLogo(Request $req,$act){
        $id_produk =  Session::get('id_produk');
        $tgl = date("d_m_Y_h_i_s");
        $time_upload = $tgl;
        $tujuan_file = 'logo_produk/';           
        $file = $req->logo_produk;
        $ekstensi = $file->getClientOriginalExtension();
        $namafile = "$time_upload"."_"."$id_produk".'.'.$ekstensi;
        $pindahin =  $file->move($tujuan_file,$namafile);
        if($pindahin){
            if($act == 'insertgan'){
                $insert = DB::table('logo_produk')->insert([
                    'logo_produk'       =>  $namafile,
                    'id_produk'         =>  $id_produk,
                    'deskripsi'         =>  $req->deskripsi     
                ]);       
                return '1';     
            }else{
                $updategan = DB::table('logo_produk')
                ->where('id_produk',$id_produk)
                ->update([
                    'logo_produk'       =>  $namafile,
                    'deskripsi'         =>  $req->deskripsi     
                ]); 
                return '1';
            }
        }else{                                                                                                             
            return '0';

        }        
    }  

    public function deleteLogo($lokasigan){
        $hapus = unlink($lokasigan);
        if($hapus){
            return '1';
        }else{
            return '0';
        }
    }

    public function setLogo(Request $req){
        $id_prod = Session::get('id_produk');
        
        $cek = DB::table('logo_produk')
        ->where('id_produk',$id_prod)
        ->count();

        if($cek == 0){
            $uploadgan =  $this->uploadLogo($req,'insertgan');
            if($uploadgan == 1){ 
                return redirect('proto');
            }else{
                return redirect('proto');
            }
        }else{
            $cekfile = DB::table('logo_produk')
            ->where('id_produk',$id_prod)
            ->get();

            $cekname = '';
            foreach($cekfile as $datas){
                $cekname = $datas->logo_produk;
            }

         

            $myfile = 'logo_produk/'.$cekname;
            if(file_exists($myfile)){
                $delgan = $this->deleteLogo($myfile);
                if($delgan == '1'){
                    $uploadgan =  $this->uploadLogo($req,'updategan');
                    if($uploadgan == 1){
                        return redirect('/proto');
                    }else{
                        return redirect('/proto');
                    }
                }else{
                    return 'Hapus file gagal';
                }
            }else{
                $uploadgan =  $this->uploadLogo($req,'updategan');
                if($uploadgan == 1){
                    return redirect('/proto');
                }else{
                    return redirect('/proto');
                }
            }
        }
    }

    public function updateTrack(){
        $id_produk = Session::get('id_produk');
        $updatetrack = DB::table('track_step')
        ->where('id_produk', $id_produk)
        ->update([
            'id_step'   => '4',
            'status'    => '1'
        ]);

        return redirect("/");
    }
}
