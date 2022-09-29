
@extends('mentor/template/blankindex')
@if(Session::has('id_mentor'))
    <script>
        window.location.href = "{{url('/mentor')}}"
    </script>
@endif
@section('css')
    <style>
        #cover-page{
            margin:0px;
            width:100%;
            overflow-x:hidden;
            min-height:100vh;
            padding-top:20vh;
            background-image: linear-gradient(to right, #03192E , #153A5C);
        }

        #cover-page h1{
            color:white;
            font-size:60px;
            font-weight:700;
        }
        #cover-page .iso{
            width:100%;
            margin-top:3%;
        }
        #cover-page .desc{
            padding:5% 10%;
        }
        #cover-page .desc .btn{
            padding:10px 25px;
        } 

        #cover-page .login-box{
            width:100%;
            margin:10%;
            margin-top:15%;
            padding:5%;
            background-color:#ffff;
            border-radius:10px;
        }

        #cover-page .login-box label{
            font-weight:700;
            color:var(--sblue);
        }
        #cover-page .login-box .label-box{
            width:50%;
            background-color:#ffff;
            padding:20px;
            font-family:nunito;
            margin-top: -61px;
            margin-left: -22px;
            font-weight:700;
            border-radius:10px;
            text-align:center;

        }

        
        /* Responsive */

        @media only screen and (max-width: 720px) {  
            #cover-page{
                min-height:100vh;
                padding-top:10vh
            } 
            #cover-page .iso{
                display:none;
            }
            #cover-page .desc{
                text-align:center;                
            }
            #cover-page .desc h1{
                font-size:40px; 
                margin-bottom:5vh;               
            }
            #cover-page .desc p{
                display:none;
            }
            #cover-page .desc .btn{
                display:none;
            }
            #cover-page .login-box{
                width:80%;
                margin:5% 10%;                                
                background-color:#ffff;
                border-radius:10px;
            }
            #cover-page .login-box .label-box{
            width:50%;
            background-color:#ffff;
            padding:20px;
            font-family:nunito;
            margin-top: -61px;
            margin-left: -18px;
            font-weight:700;
            border-radius:10px;
            text-align:center;
        }

        }
    </style>
@endsection
@section('content')
<section  id="cover-page">    
        <div class="row">
            <div class="col-lg-6 col-12 hidden-xs desc"  data-aos="fade-up" data-aos-duration="1500">
                <h1 class="nunito">IN<span class="main-text">CUBE<span></h1>
                <p class="text-white nunito">
                INCUBE  adalah platform untuk menginkubasi bisnis siswa pada mata pelajara Produk Kreatif dan Kewirausahaan
                </p>
                <a href="{{url('/register_siswa')}}" class="btn bt-linear nunito">Pendaftaran Siswa</a>
                
                
            </div>
            <div class="col-lg-4 col-12">
                <div class="login-box">
                    <div class="label-box">Login Mentor</div>
                    @if(isset($login_error))
                    <div class="alert alert-danger">
                        Maaf Email  atau Password Salah
                    </div>
                    @endif
                    <br>
                    <form action="{{url('/mentor/signin')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="nunito">Email Mentor</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="nunito">Password</label>
                        <input type="password" name="password" class="form-control" required> 
                    </div>                    
                    <button class="btn bt-main w-100" type="submit">Login</button>
                    <br><br>
                    </form>

                </div>
            </div>
        </div>   
</section>

@endsection