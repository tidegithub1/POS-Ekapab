@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <h4 class="font-weight-bold">Add Supplier</h4>
                </div>
                    <div class="card-body">
                            @if(Session::has('error'))
                                @include('layouts.flash-error',[ 'message'=> Session('error') ])
                            @endif
                           
                            <form action="{{url('/suppliers')}}" method="POST" enctype="multipart/form-data">
                                <table class="table">
                                    <td>
                                    @csrf
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label for="SplCode">
                                            <h6>Product Stock Keeping Unit Code</h6>
                                            <h6 class="h">SplCode</h6>

                                        </label>
                                        <input type="text" class="form-control" name="SplCode" value="{{ old('SplCode') }}">
                                        @include('layouts.error', ['name' => 'SplCode'])
                                    </div>
                                    <div class="form-group">
                                        <label for="SplName">
                                            <h6>Product Name</h6>
                                            <h6 class="h">SplName</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplName" value="{{ old('SplName') }}">
                                        @include('layouts.error', ['name' => 'SplName'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplNameOTH">
                                            
                                            <h6>Product Name Other</h6>
                                            <h6 class="h">SplNameOTH</h6>

                                        </label>
                                        <input type="text" class="form-control" name="SplNameOTH" value="{{ old('SplNameOTH') }}">
                                        @include('layouts.error', ['name' => 'SplNameOTH'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplAddress1">
                                            
                                            <h6>Product Stock Quantity</h6>
                                            <h6 class="h">SplAddress1</h6>

                                        </label>
                                        <input type="number" class="form-control" name="SplAddress1" value="{{ old('SplAddress1') }}">
                                        @include('layouts.error', ['name' => 'SplAddress1'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplAddress2">
                                            
                                            <h6>Product Stock amount</h6>
                                            <h6 class="h">SplAddress2</h6>

                                        </label>
                                        <input type="number" class="form-control" name="SplAddress2" value="{{ old('SplAddress2') }}">
                                        @include('layouts.error', ['name' => 'SplAddress2'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplTaxNo">
                                            
                                            <h6>Product vat type</h6>
                                            <h6 class="h">SplTaxNo</h6>
                                        </label>
                                        <input type="number" class="form-control" name="SplTaxNo" value="{{ old('SplTaxNo') }}">
                                        @include('layouts.error', ['name' => 'SplTaxNo'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplTel">
                                            
                                            <h6>Product type</h6>
                                            <h6 class="h">SplTel</h6>
                                        </label>
                                        <input type="number" class="form-control" name="SplTel" value="{{ old('SplTel') }}">
                                        @include('layouts.error', ['name' => 'SplTel'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplEmail">
                                            
                                            <h6>Product Group Code</h6>
                                            <h6 class="h">SplEmail</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplEmail" value="{{ old('SplEmail') }}">
                                        @include('layouts.error', ['name' => 'SplEmail'])
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="SplOthinfo">
                                            
                                            <h6>Product Brand Code</h6>
                                            <h6 class="h">SplOthinfo</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplOthinfo" value="{{ old('SplOthinfo') }}">
                                        @include('layouts.error', ['name' => 'SplOthinfo'])
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="SplCraditterm">
                                            <h6>Product Size Code</h6>
                                            <h6 class="h">SplCraditterm</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="SplCraditterm" value="{{ old('SplCraditterm') }}">
                                        @include('layouts.error', ['name' => 'SplCraditterm'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplVatType">
                                            
                                            <h6>Product Color Code</h6>
                                            <h6 class="h">SplVatType</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplVatType" value="{{ old('SplVatType') }}">
                                        @include('layouts.error', ['name' => 'SplVatType'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplLimit">
                                            
                                            <h6>Supplier Code</h6>
                                            <h6 class="h">SplLimit</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplLimit" value="{{ old('SplLimit') }}">
                                        @include('layouts.error', ['name' => 'SplLimit'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplAmt">

                                            <h6>General Account Number</h6>
                                            <h6 class="h">SplAmt</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplAmt" value="{{ old('SplAmt') }}">
                                        @include('layouts.error', ['name' => 'SplAmt'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtAge">
                                            
                                            <h6>Product Age</h6>
                                            <h6 class="h">PdtAge</h6>
                                        </label>
                                        <input type="text" class="form-control" name="PdtAge" value="{{ old('PdtAge') }}">
                                        @include('layouts.error', ['name' => 'PdtAge'])
                                    </div>

                                    <div class="form-group">
                                        <label for="UnitType">
                                            <h6>Unit Type</h6>
                                            <h6 class="h">UnitType</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="UnitType" value="{{ old('UnitType') }}">
                                        @include('layouts.error', ['name' => 'UnitType'])
                                    </div>
                                    
                                </td>
                            </table>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Add supplier</button>
                                </div>
                            </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
