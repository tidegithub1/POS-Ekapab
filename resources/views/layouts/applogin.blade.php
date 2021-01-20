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

    <!-- bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            background: rgb(231, 231, 231);
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
        </style>
    

    @stack('style')
</head>

<body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar" style="background: linear-gradient(to right, #ff5858, #f857a6); ">
            <div class="container-fluid">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bolder" 
                            href="{{{url('transcation')}}}">{{ __('เอกภาพอินเตอร์อิเล็คตริก') }}
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler"
                        type="button" 
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" 
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" 
                                    href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" 
                                    href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}
                                </a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" 
                                    class="nav-link dropdown-toggle" 
                                    href="#" 
                                    role="button"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true" 
                                    aria-expanded="false" v-pre>{{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" 
                                        href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('ออกจากระบบ') }}
                                    </a>
                                    <form id="logout-form" 
                                            action="{{ route('logout') }}" 
                                            method="POST"
                                            style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
@stack('script')

</html>
