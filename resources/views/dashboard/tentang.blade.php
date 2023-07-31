@section('title-page')
    Dashboard
@endsection

@section('css')
<style>
    .card-step{
        min-height:250px;
    }

    .desc-card{
        padding-top:20px;
        font-size:18px;
    }

    .card-mhs img{
        width:150px;
    }

    .card-mhs .badge-status{
        background-color:#F1592F;
        color: #fff;
        font-size:13px;
        padding:5px 10px;
        text-align:center;
        margin-top:-30px;
        margin-bottom:20px;
        border-radius:5px;
    }

    .card-mhs  p{
        font-size:12px;
    }

</style>
@endsection

@extends('dashboard_template/index')
@section('content')
<div class="container-fluid">
    <div class="row p-4">
        <div class="card card-step">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img src="{{asset('assets/images/logo_white.png')}}" alt="" style="width:60%;margin-top:10%;">
                    </div>
                    <div class="col-md-7 desc-card">
                        <p class="nunito">
                        <strong>INCUBE </strong> 
                        adalah aplikasi pembelajarn untuk menunjang  kegiatan belajar mengajar pada mata pelajaran projek kreatif dan kewirausahaan SMK. Aplikasi ini dikembangkan , untuk memenuhi skripsi yang berjudul “Pengembangan  Platform Inkubasi Bisnis Untuk Meningkatkan Motivasi Belajar Siswa SMK Pada Mata Pelajaran Projek Kreatif dan Kewirausahaan”,  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-mhs">
                <div class="card-body row ">
                    <div class="col-md-5">
                        <img src="{{asset('assets/images/pengembang.png')}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="badge-status nunito">Pengembang</div>
                        <h3 class="nunito">Adam Maulana Dzikri</h3>
                        <p class="nunito">
                            Mahasiswa Prodi Pendidikan Teknik Informatika Universtias Negeri Malang <br>
                            Angkatan 2018 <br>
                            NIM : 180533631533
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-mhs">
                <div class="card-body row ">
                    <div class="col-md-5">
                        <img src="{{asset('assets/images/pemb1.png')}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="badge-status nunito">Pembimbing 1</div>
                        <h3 class="nunito">Prof. Dr. Ir Syaad <br> Patmanthara,  M.Pd.</h3>
                        <p class="nunito">
                        Bidang Keahlian : <br>
                        Pengembangan Strategi 
                        Pembelajaran Kejuruan
                        bidang Keinformatikaan
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-mhs">
                <div class="card-body row ">
                    <div class="col-md-5">
                        <img src="{{asset('assets/images/pemb2.png')}}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="badge-status nunito">Pembimbing 2</div>
                        <h3 class="nunito">Wahyu Nur <br> Hidayat, M.Pd</h3>
                        <p class="nunito">
                        Bidang Keahlian : <br>
                        Pengembangan Sertifikasi Profesi 
                        pada Pendidikan Kejuruan,
                        Vocational education,
                        IT fusion in learning and education,
                        Informatics engineering education

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pelatihan Yang Diikuti</h5>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection