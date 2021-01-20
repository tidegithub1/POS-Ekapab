@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                    <div class="card div-transparent">
                        <div class="card-body">
                            <h4>Supplier Code</h4>{{ $sup->SplCode }}<hr>
                            <h4>Name </h4>{{ $sup->SplName }}<hr>
                            <h4>Tel</h4>{{ $sup->SplTel }}<hr>
                        </div>
                        <div class="card-footer">
                            <h4>Created</h4>{{ $sup->created_at }}<hr>
                            <h4>Updated</h4>{{ $sup->updated_at }}<hr>
                        </div>
                    
                    </div>
                
            </div>
        </div>
    </div>
@endsection