<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>POS | Point Of Sale for Ekapab</title>

    <script type="text/javascript">
        document.write(unescape('%3c%6c%69%6e%6b%20%72%65%6c%20%3d%20%22%69%63%6f%6e%22%20%68%72%65%66%20%3d%22%69%6d%67%2f%6c%6f%67%6f%2e%70%6e%67%22%20%74%79%70%65%20%3d%20%22%69%6d%61%67%65%2f%70%6e%67%22%3e'));
    </script>

        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    
    

    <style>
        html, body {
            background-color:rgb(255, 255, 255);
            color: #636b6f;
            font-family: 'Sriracha', cursive;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 5px;
        }
        .content {
            text-align: center;
        }
        .title {
            color:rgb(58, 52, 57);
            font-size: 50px;
        }
        .links > a {
            color:rgb(243, 0, 203);
            padding: 0 25px;
            font-size: 25px;
            font-weight: 200;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase; 
            }
        .m-b-md {
            margin-bottom: 30px;
            align-self: center;
        }
        #div1 {
            text-align: center;
            display: inline-flex;
            color:rgb(243, 0, 203);
            
        }
        #div2 {
            text-align: center;
            display: inline-flex;
            color:rgb(243, 0, 203);
            size: 100px;
        }
        html, body {
            background-color:rgb(255, 255, 255);
            color: #636b6f;
            font-family: 'Sriracha', cursive;
            
            height: 100vh;
            margin: 0;
        }
        .card {
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            float: none;
            margin-bottom: 0; 
            max-width: 100%;
            max-height: 100%;
            left: 0;
            right: 0;
            top: 0;
            display:flex;
            vertical-align: middle;
            border: 0 ;
            
        }
        .card-header {
            
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(245, 245, 245);
            border-bottom: 1px solid rgba(245, 245, 245);
        }
        .card-body {
            margin-left: auto;
            margin-right: auto;
            margin-top: 30px;
            margin-bottom: 50px;

        }
        .back {
            background: rgb(212, 211, 211);
            width: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            justify-content: center;
        }
        .h3 {
            background: -webkit-linear-gradient( #ff5858, #f5a4cb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .custom {
            width: 290px !important;
        }
    
        .custom1 {
            width: 295px !important;
        }
        .p {
            font-size: 14px;
            background: -webkit-linear-gradient( #ff5858, #f5a4cb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    

    @stack('style')
</head>

<body>
    <div class="back">
    <div class="page-center-in">
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-6 " >
                <div class="card" style="width: 26rem; height: 20rem; margin-top: 150px;">
                    <div class="card-body">
                        <div class="h3" style="text-align: center;">
                            <h3>Point Of Sale</h3>
                            <div class="p">
                                <p>ระบบชื้อขายหน้าร้าน</p>
                            </div>
                        </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-16">
                                            <input id="username" 
                                                    type="text" 
                                                    class="form-control @error('username') is-invalid @enderror" 
                                                    name="username" 
                                                    size= "30"
                                                    value="{{ old('username') }}" 
                                                    placeholder="รหัสพนักงาน"
                                                    required autocomplete="username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <div class="col-md-16">
                                            <input id="password" 
                                                    type="password" 
                                                    class="form-control @error('password') is-invalid @enderror" 
                                                    name="password" 
                                                    size= "30"
                                                    placeholder="รหัสผ่าน"
                                                    required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0 justify-content-center" >
                                        <div class="col-md-16 ">
                                                <button type="submit" class="btn custom text-white "  style="background: linear-gradient(to right, #ff5858, #f857a6);">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;เข้าสู่ระบบ
                                                </button>   
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
@stack('script')

</html>
