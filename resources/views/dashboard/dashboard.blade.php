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
        @foreach($data_tahap as $data)
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset('assets/images/'.$data->gambar)}}" alt="" class="w-50 mt-2">
                    <h5 class="mt-3" ><br>{{$data->nama_step}} </h5>
                    <p>{{$data->deskripsi}} </p>
                    @if($data->status == '')
                        <a href="#" class="w-100 btn btn-info text-white"><i class="fas fa-check-circle"></i> SELESAI</a>
                    @elseif($data->status == 1)
                    <a href="#" class="w-100 btn btn-success text-white"><i class="fas fa-edit"></i> PROSES VALIDASI MENTOR</a>
                    @else
                        <a href="{{url($data->route)}}" class="w-100 btn btn-warning">MULAI</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
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