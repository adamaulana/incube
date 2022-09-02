@section('title-page')
    Step 4 : Membuat Pitch Deck
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
                        <h3>Pitch Deck</h3>
                        <small>Pitch Deck merupakan media nomor satu agar produk aplikasi 
                            dalam bisis ini diburu olhe investor. Untuk itu ikuti tahap pembuatan </small>
                            <br><br>
                            <button class="btn btn-primary" style="width:200px;">Contoh Pitch Deck</button>                                                     
                    </div>               
                </div>
            </div>            
        </div> 
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row p-2">
                        <h2>Slide 1 : Masalah yang diangkat </h2>
                        <small>Jabarkan masalah yang diangkat se detail mungkin , sehingga dapat memperkuat 
                            solusi yang di tawarkan dari bisnis anda.</small>
                        <div class="row p-2">
                            <textarea name="" id=""  rows="5" class="form-control"></textarea>                            
                            <button class="btn btn-success mt-3">Simpan</button>
                        </div>
                    </div>               
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row p-2">
                        <h2>Slide 2 : Solusi yang ditawarkan </h2>
                        <small>Jabarkan masalah yang diangkat se detail mungkin , sehingga dapat memperkuat 
                            solusi yang di tawarkan dari bisnis anda.</small>
                        <div class="row p-2">
                            <textarea name="" id=""  rows="5" class="form-control"></textarea>
                            <br><br>
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </div>               
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
