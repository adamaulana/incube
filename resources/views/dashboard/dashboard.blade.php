@section('title-page')
    Dashboard
@endsection
@extends('dashboard_template/index')
@section('content')
<div class="container-fluid">
    <div class="row text-center">
        
        <h2>Selamat Datang Samsan Tech</h2>
        <p>Silahkan ikuti alur inkubasi dibawah ini, untuk mempermudah anda dalam membangaun StartUp yang hebat </p>
        
    </div>    
    <br>
    <div class="row p-30">    
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{asset('assets/images/alur1.png')}}" alt="" class="w-50 mt-2">
                    <h5 class="mt-3" ><br>Profil Bisnis</h5>
                    <p>Profil bisnis yang ingin di bangun dengan format Bussines Model Canvas </p>
                    <a href="{{url('/profile')}}" class="w-100 btn btn-warning">MULAI</a>
                </div>
            </div>
        </div>    
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{asset('assets/images/alur2.png')}}" alt="" class="w-50 mt-2">
                    <h5 class="mt-3" ><br> Prototyping</h5>
                    <p>
                        Membuat Prototypie dari produk, untuk menjelaskan cara pennggunaan dan tujuan
                    <p>
                    <a href="{{url('/shadesa')}}" class="w-100 btn btn-secondary">MULAI</a>
                </div>
            </div>
        </div>          
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{asset('assets/images/alur3.png')}}" alt="" class="w-50 mt-2">
                    <h5 class="mt-3" > <br> Publikasi</h5>
                    <p>Membuat beberapa luaran meningkatkan publikasi produk</p>
                    <a href="#" onclick="alert('Masih Dalam Proses Pengembangan')" class="w-100 btn btn-secondary">MULAI</a>
                </div>
            </div>
        </div>  
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{asset('assets/images/alur4.png')}}" alt="" class="w-50 mt-2">
                    <h5 class="mt-3" > <br> Pitch Deck</h5>
                    <p>Pembuatan slide presentasi , sebagai media promosi dan mencari investor
                    </p>
                    <a href="#" onclick="alert('Masih Dalam Proses Pengembangan')" class="w-100 btn btn-secondary">MULAI</a>  
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