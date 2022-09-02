@section('title-page')
    Step 2 : Membuat Logo Brand dan  Prototyping
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
                        <h3>Prototyping dan Alur Produk</h3>
                        <small>Dalam tahap ini, silahkan membuat protoyping dari produk dalam bisnis ini.Dalam pembuatan prototyping ini yang digunakan 
                            adalah Figma. Silahkan melihat referensi dan tutorial di bawah ini untuk untuk membuat prototyping sekalligus Design User Interface
                            dari produkmu<small>
                            <br><br>
                            <button class="btn btn-primary">Tutorial Prototyping</button>
                            <button class="btn btn-warning">Referensi UI Design</button>                         
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
                        <h3>Link Figma</h3>
                        <p style="font-size:15px;">
                            Langkah menggunakan figma project <br>
                            1. Buka Figma.com <br>
                            2. Buatlah Project Baru Figma <br>
                            3. Buatlah UI Design dan Lakukan Prototyping
                        </p>
                        <br>
                        <label for="" style="font-size:12px;">Shared Link Figma</label>
                        <br> 
                        <input type="text" name="" id="" class="form-control">
                        <br> <br><br> <br>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Logo Produk</h3>
                    <center>
                        <img class="w-70" src="{{asset('assets/images/noimage.png')}}" alt="">
                    </center>
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
