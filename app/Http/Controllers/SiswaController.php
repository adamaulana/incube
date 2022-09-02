<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class SiswaController extends Controller
{
    //Fungsi Registrasi Siswa
    public function register_siswa(Request $req){
        $pass = md5($req->password).sha1($req->password);
        $ceknis = DB::table('siswa')
        ->select('nomor_induk')
        ->where('nomor_induk',$req->nis)
        ->count();
        $status = "arrgghh";
        
        if($ceknis != 1){

            $sql = DB::table('siswa')->insert([
                'nama'          => $req->nama_siswa,
                'nomor_induk'   => $req->nis,
                'password'      => $pass,
                'tanggal_lahir' => $req->ttl 
            ]);

            if($sql){
                $status = "Pendaftaran Berhasil, Silahkan Login";                
                // return redirect(url('/register_siswa'),compact('status'));
                return view('page/register_siswa')->with('status','Pendaftaran berhasil, silahkan melakukan login');
                
            } 
        }else{
        //     $status = "NIS Sudah terdaftar, silahkan hubungi guru pengajar";
            return view('page/register_siswa')->with('status','Maaf, NIS sudah terdaftar, silahkan hubungi Guru Pendamping');
        }

    }

    // logout siswa
    public function logout(Request $request){        
        $request->session()->forget('id_siswa');
        return redirect('/login');
    }

    //login siswa
    public function login(Request $req){
        $enc =   md5($req->password).sha1($req->password);
		$logins = DB::table('siswa')
		->where('nomor_induk',$req->nis)
		->where('password',$enc)
		->count();        
        
		if($logins != 0 ){
            $data = DB::table('siswa')
            ->where('nomor_induk',$req->nis)
            ->where('password',$enc)
            ->get();
             foreach ($data as $val) {
             		$id_siswa =  $val->id;
             		$nis_siswa =  $val->nomor_induk;
             }

             $cektim = DB::table('member')
            ->where('id_siswa',$id_siswa)
            ->count();

            session(['id_siswa' => $id_siswa]);
            session(['nis_siswa' => $nis_siswa]);
            
            if($cektim != 0){
                $cekposition = 0; 
                $gettim = DB::table('member')
                ->where('id_siswa',$id_siswa)
                ->get();
                foreach($gettim as $tim){
                    $cekposition = $tim->position;
                }

                if($cekposition == 1){
                    $cektrack = DB::table('track_step')
                    ->where('id_ceo',$id_siswa)
                    ->get();

                    $track_poin = 0;
                    $acc_poin = 0;
                    foreach($cektrack as $datatrack){
                        $track_poin = $datatrack->id_step;
                        $acc_poin = $datatrack->status;
                    }

                    if($track_poin <= 2 && $acc_poin == 0){
                        $cekroute = DB::table('track_step')
                        ->select('master_step.route as routing')
                        ->join('master_step','master_step.id','track_step.id_step')
                        ->where('track_step.id_ceo',$id_siswa)
                        ->get();
                         
                        foreach($cekroute as $setroute){
                            return redirect($setroute->routing);
                        }
                    }elseif($track_poin <= 2 && $acc_poin == 1){
                        echo "Maaf anda perlu acc mentor untuk ke tahap selanjutnya";   
                    }else{
                        return redirect('/');
                    }
                }else{
                    return redirect('/');             

                }
            }else{
                return redirect('/product_abstract');             
            }

		}else{
			 return view('page/login')->with('login_error','Maaf Login Gagal');             
		}
    }


       // cari siswa berdasarkan nis
       public function searchByNis(Request $request){
        $nis = Session::get('nis_siswa');

        $cekdataceo = DB::table('member')
        ->where('id_siswa',$request->id_siswa)
        ->where('id_produk', $request->id_produk)
        ->count();

        if($cekdataceo == 0){
            $insertceo = DB::table('member')->insert([
                'id_siswa' =>$request->id_siswa,
                'id_produk' =>$request->id_produk,
                'position' => '1'
            ]);
        }

        $ceknis = DB::table('siswa')
                ->where('nomor_induk',$nis)
                ->count();

                if($nis == $request->nis){
                    return redirect('/tahap_team')->with('status', 'Maaf itu NIS anda sendiri');
                }else{
                    $cekData = DB::table('siswa')
                            ->where('nomor_induk',$request->nis)
                            ->count();
                    if($cekData != 0){
                        $cek_siswa = DB::table('siswa')
                        ->where('nomor_induk',$request->nis)
                        ->get();

                        foreach($cek_siswa as $ceksiswa){
                            $id_ditemukan = $ceksiswa->id;
                        }

                        
                        $cek_siswa_member = DB::table('member')
                        ->where('id_siswa', $id_ditemukan)
                        ->count();

                      

                        if($cek_siswa_member == 0){
                            $data_member = DB::table('siswa')
                            ->where('nomor_induk',$request->nis)
                            ->get();
                            return redirect('/tahap_team')->with(['data_member'=>  $cek_siswa]);
                        }else{
                         return redirect('/tahap_team')->with('status', 'Siswa dengan NIS tersebut sudah menjadi anggota di suatu tim');
                        }
                    }else{
                         return redirect('/tahap_team')->with('status', 'NIS tidak di temukan');
                    }
                }
        
    } 
}
