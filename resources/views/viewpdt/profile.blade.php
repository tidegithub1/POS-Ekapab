@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 offset-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h2>PROFILE</h2>
                    </div>
                    <div class="card-body">
                        <p>Username = {{ $user->username }}</p>
                        <p>Name = {{ $user->name }}</p>
                        <p>Email = {{ $user->email }}</p>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>
@endsection