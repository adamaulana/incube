@section('title-page')
    Step 3 : Membuat Poster dan Video Produk
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
                    <div class="row p-2">
                        <h3>Luaran Publikasi Produk</h3>
                        <small>Dalam tahap ini, dilakukan pembuatan poster dan video produk, 
                            dengan tujuan untuk mempublish konsep produk yang akan dibuat agar dapat dimengerti oleh 
                            semua kalangan. Dalam pembuatan video dan poster dapat memanfaatkan bahan dari busines model canvas 
                            dan UI Design yang pernah dibuat di tahap sebelumnya<small>
                            <br><br>
                            <button class="btn btn-primary">Referensi Video Produk</button>
                            <button class="btn btn-warning">Referensi Poster Produk </button>                         
                    </div>               
                </div>
            </div>            
        </div>    
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h3>Video Produk</h3>
                        <p style="15px">Video Produk yang di unggah adalah embed dari platform youtube</p>             
                        <br>           
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MEOn5GX_-hU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br><br>
                        <label for="" style="font-size:12px;">Upload Video Profil</label>
                        <br>  
                        <input type="text" name="" id="" class="form-control" placeholder="Link Embed Youtube">
                        <br>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Poster Produk</h3>
                    <center>
                        <img class="w-100" src="https://unblast.com/wp-content/uploads/2020/01/Mobile-App-Promotion-Flyer-Template.jpg" alt="">
                    </center>
                    <p>Silahkan upload poster produk</p>
                    <input type="file" class="form-control">
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
