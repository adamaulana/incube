@section('title-page')
    Step 3 : Membuat Logo Brand dan  Prototyping
@endsection
@section('css')
    <style>
        .modal-dialog{
            max-width:75%;
        }
        

        @media only screen and (max-width:720px){
            .modal-dialog{
                max-width:100%;
            }         
        }
    </style>
@endsection
@extends('dashboard_template/index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <center><img src="{{asset('assets/images/team_spirit.svg')}}" style="width:60%" class="m-5" alt=""></center>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mt-5"> <strong>Selamat Datang Tahap di Prototyping dan Branding Logo </strong></h2>        
                            <p>Dalam tahap ini, silahkan membuat protoyping dari produk dalam bisnis ini.Dalam pembuatan prototyping ini yang digunakan 
                            adalah Figma.<</p>
                            <a href="" class="btn btn-primary text-white"> Submit Progress &nbsp;<i class="fas fa-arrow-circle-right"></i> </a>
                        </div>    
                    </div>
        
                </div>
            </div>            
        </div>    
    </div>
    
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    
                    <div class="row p-2">
                        <h3>Link Figma</h3>
                        <p style="font-size:15px;">
                        Dalam membuat UI Design sekaligus prototyping di alur inkubasi ini. Kita menggunakan 
                        tools protoyping yaitu <strong>Figma. </strong> <br>
                        Adapun langka langkah menggunakan Figma sebagai berikut : <br>
                        </p>
                        <div class="p-1" style="font-size:13px;">
                            <ol>
                                <li>Buka <a href="https://www.figma.com" class="badge rounded-pill bg-primary" target="_blank">www.figma.com</a></li>                        
                                <li>Arahkan cursor ke menu  <strong>Draft</strong> di sidebar menu kiri, hingga muncul tanda <strong>'+'</strong>. Dan klik tranda 
                                <strong>+</strong> , lalu pilih <strong>New Design File</strong> untuk membuat project design baru di figma</li>
                                <li>Pelajari Video dan Referensi berikut untuk mengawali design dan prototyping
                                <a class="btn btn-xs btn-warning"><i class="fas fa-play"></i> Referensi dan Pembelajaran UI Design dan protoyping  </a>                         
                                </li>                        
                                <li> Invite email mentormu, pada project figma, Adapun email mentormu adalah <br><h3 class="badge rounded-pill bg-secondary">radityawajyusasono@gmail.com</h3></li>
                                <li> Jangan lupa juga menyematkan link Figma dari produkmu pada form di bawah ini</h3></li>
                            </ol>         
                        </div>
                        
                        <div class="m-1">
                            <form action="{{url('/setFigma')}}" methos="post" >
                            {{csrf_field()}}   
                            <label for="" style="font-size:12px;">Shared Link Figma</label>
                            <br> 
                            <input type="text" name="link_figma" id="" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3>Logo Produk</h3>
                    <p>Logo akan menjadi identitas yang pertama di lihat dari produkmu. Ada banyak sekali tools 
                        yang dapat digunakan untuk memuat logo yang menarik. Mulai dari Adobbe Ilustrator, Figma, Coreldraw, dan sejenisnya.
                        Untuk memudahkan mengawali pembuatan logo, <strong>Hipster</strong> dalam tim mu dapat mengakses
                        referensi ini <br>
                        <a class="btn btn-xs btn-warning"><i class="fas fa-play"></i> Referensi dan Pembelajaran Logo Produk</a>
                        <br> <br>
                        Jangan lupa uplad foto dari logomu sebagai bukti progress kepada mentor
                    </p>
                    <center>
                        <img class="w-70" src="{{asset('assets/images/noimage.png')}}" alt="">
                    </center>
                    <input type="file" class="form-control">
                    <label for="">Deskripsi singkat dan makna logo :</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
    $(function(){
        // $("#jadwalTabel").DataTable({
        //   "responsive": true,
        //     "autoWidth": false,
        // });

        $("#fotoproduk").change(function(){
            readURL(this,'#img-prev');
        });        
        $("#edit-fotoproduk").change(function(){
            readURL(this,'#ed-foto-produk');
        });
        
        $(".produk-edit").click(function(){
            var id   = $(this).data('id');
            var nama = $(this).data('nama');
            var namafile = $(this).data('foto');
            var foto = '{{asset('cover_produk/')}}/'+namafile;
            var harga = $(this).data('harga');
            var kategori = $(this).data('kategori');
            var deskripsi = $(this).data('deskripsi');
            $('#ed-nama-produk').val(nama);
            $('#ed-harga-produk').val(harga);
            $('#ed-deskripsi-produk').val(deskripsi);
            $('#ed-id-produk').val(id);            
            $('#ed-foto-produk').attr('src',foto);
        });
    });
</script>
@endsection
