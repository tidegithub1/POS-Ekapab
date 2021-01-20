@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                    <div class="card div-transparent">
                        <div class="card-body">
                            <h4>Product Name</h4>{{ $product->PdtName }}<hr>
                            <h4>PdtVatType </h4>{{ $product->PdtVatType }}<hr>
                            <h4>PdtType</h4>{{ $product->PdtType }}<hr>
                            <h4>Price</h4>{{ $product->Price1 }}<hr>
                        </div>
                        <div class="card-footer">
                            <h4>Created</h4>{{ $product->created_at }}<hr>
                            <h4>Updated</h4>{{ $product->updated_at }}<hr>
                        </div>
                    
                    </div>
                
            </div>
        </div>
    </div>
@endsection