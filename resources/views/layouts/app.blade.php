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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"rel="stylesheet">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    <style>
        .affix {
            top: 0;
            width: 100%;
            z-index: 9999 !important;
        }
        .affix + .container-fluid {
            padding-top: 70px;
        }
        html, body {
                background: linear-gradient(to right, #fcf1f3, #fcf8f9);
                color: #636b6f;
                font-family: 'Sriracha', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        table {
            counter-reset: tableCount;     
        }
        .counterCell:before {              
            content: counter(tableCount); 
            counter-increment: tableCount; 
        }
        .b1 {
            float: left;
            text-align: center;
        }
        .h{
            font-size: 12px ;
            color: darkgray;
        }
        .navbar {
            border: 0;
            border-radius: 0;
            background: linear-gradient(to right, #ff5858, #f857a6);
        }
        .navbar-brand {
            max-height: 50px;
            width: auto;
            background: transparent !important;
            font-size: 20px;
            transition: 0.2s ease-in-out;
        }
        </style>
    @stack('style')
</head>

<body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar" style="background: linear-gradient(to right, #ff5858, #f857a6); font-size: 14px;">
            <div class="container-fluid">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item     ">&nbsp;&nbsp;
                            
                            <a class="navbar-brand"
                                style="font-size: 20px"
                                href="{{url('transcation')}}">
                                <img src="/img/logo2.png" width="30px" height="30px">&nbsp;ระบบจัดการขายหน้าร้าน
                            </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" 
                            id="navbarDropdownMenuLink" 
                            data-toggle="dropdown"
                            aria-haspopup="true" 
                            aria-expanded="false">
                            สินค้า
                        </a>
                        <div class="dropdown-menu dropdown-primary"aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" 
                                href="{{route('products.index')}}"><i class="fa fa-list"></i>&nbsp;รายการสินค้า
                            </a>
                            <a class="dropdown-item" 
                                href="{{url('stock')}}"><i class="fa fa-th"></i>&nbsp;สต๊อกสินค้า
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" 
                            id="navbarDropdownMenuLink" 
                            data-toggle="dropdown"
                            aria-haspopup="true" 
                            aria-expanded="false">
                            ประวัติการชื้อขาย
                        </a>
                        <div class="dropdown-menu dropdown-primary"
                            aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fa fa-file-text-o"></i>&nbsp;ประวัติการชื้อ</a>
                            <a class="dropdown-item" href="{{url('/transcation/history')}}"><i class="fa fa-file-text-o"></i>&nbsp;ประวัติการขาย</a>
                        </div>
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
                <div class="collapse navbar-collapse ml-auto float-right" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bolder" 
                                href="{{url('suppliers')}}" target="_blank">Supplier
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bolder" 
                                href="{{url('dashboard')}}" target="_blank">Dashboard
                            </a>
                        </li>
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
                            <li class="nav-item dropdown float-right">
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
                                    href="{{url('profile', Auth::user()->id)}}"><i class="fa fa-cog"></i>&nbsp;จัดการบันชี
                                    </a>
                                    <a class="dropdown-item" 
                                        href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>&nbsp;ออกจากระบบ
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
