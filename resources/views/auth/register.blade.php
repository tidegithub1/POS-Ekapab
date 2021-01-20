@extends('layouts.applogin')
@section('content')
<div class="back">
    <div class="page-center-in">
        <div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card" id="cardre">
                <div class="card-header text-white" 
                    style="background: linear-gradient(to right, #ff5858, #f857a6);">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;สมัครสมาชิก
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-18">
                                <input id="name" 
                                        type="text" 
                                        class="form-control @error('name') is-invalid @enderror" 
                                        name="name" 
                                        placeholder="ชื่อ"
                                        value="{{ old('name') }}" 
                                        required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-18">
                                <input id="email" 
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        name="email" 
                                        placeholder="emill"
                                        value="{{ old('email') }}" 
                                        required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-18">
                                <input id="username" 
                                        type="text" 
                                        class="form-control @error('username') is-invalid @enderror" 
                                        name="username" 
                                        placeholder="รหัสผู้ใช้"
                                        value="{{ old('username') }}" 
                                        required autocomplete="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-18">
                                <input id="password" 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        name="password" 
                                        required autocomplete="new-password"
                                        placeholder="รหัสผ่าน">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-18">
                                <input id="password-confirm" 
                                        type="password" 
                                        class="form-control" 
                                        name="password_confirmation" 
                                        placeholder="ยืนรหัสผ่าน"
                                        required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0 justify-content-center" >
                            <div class="col-md-16 ">
                                    <button type="submit" class="btn text-white " style="background: linear-gradient(to right, #ff5858, #f857a6);">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;สมัครสมาชิก
                                    </button>   
                                    <a class="nav-link" 
                                        href="{{ route('login') }}">{{ __('เข้า') }}
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
