@section('title-page')
    Step 1 : Membuat Busines Model Cnvas
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
                        <h2>1. Key Partners </h2>
                        <small>Key partners adalah hubungan yang bisnis kalian miliki dengan pihak-pihak eksternal agar bisnis kalian dapat berjalan. Pihak-pihak ini bisa saja bisnis lain, pemerintah, ataupun pihak non-konsumen. Contohnya seperti pabrik, partner kerjasama, distributor, dan lain-lain. Dengan mengetahui key partners, kalian dapat menganalisa mana pihak yang vital bagi bisnis kalian, seperti “Apabila hubungan kita dengan distributor X tidak baik, apakah performa bisnis kita akan menurun?”</small>
                        <div class="row p-2">
                            <label for="">What Our Key Partners ?</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Jawaban Anda">
                            <br><br><br>
                            <label for="">What Our Key Surpliers ?</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Jawaban Anda">
                            <br><br><br>
                            <label for="">Which key resources are we acquiring form partners ?</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Jawaban Anda">
                            <br><br><br>
                            <label for="">Which key activites do partners perform  ?</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Jawaban Anda">
                            <br><br><br>
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
