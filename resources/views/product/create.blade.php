@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <h4 class="font-weight-bold">เพิ่มสินค้า</h4>
                </div>
                
                    <div class="card-body">

                            @if(Session::has('error'))
                                @include('layouts.flash-error',[ 'message'=> Session('error') ])
                            @endif
                           
                            <form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
                                <table class="table">
                                    <td>
                                    @csrf
                                    <input type="hidden" name="id">
                                    <div class="form-group">
                                        <label for="PdtSKUCode">
                                            <h6>Product Stock Keeping Unit Code</h6>
                                            <h6 class="h">PdtSKUCode</h6>

                                        </label>
                                        <input type="text" class="form-control" name="PdtSKUCode"value="{{ old('PdtSKUCode') }}">
                                        @include('layouts.error', ['name' => 'PdtSKUCode'])
                                    </div>
                                    <div class="form-group">
                                        <label for="PdtName">
                                            <h6>Product Name</h6>
                                            <h6 class="h">PdtSKUCode</h6>
                                        </label>
                                        <input type="text" class="form-control" name="PdtName" value="{{ old('PdtName') }}">
                                        @include('layouts.error', ['name' => 'PdtName'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtNameOTH">
                                            
                                            <h6>Product Name Other</h6>
                                            <h6 class="h">PdtNameOTH</h6>

                                        </label>
                                        <input type="text" class="form-control" name="PdtNameOTH" value="{{ old('PdtNameOTH') }}">
                                        @include('layouts.error', ['name' => 'PdtNameOTH'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtStkQty">
                                            
                                            <h6>Product Stock Quantity</h6>
                                            <h6 class="h">PdtStkQty</h6>

                                        </label>
                                        <input type="number" class="form-control" name="PdtStkQty" value="{{ old('PdtStkQty') }}">
                                        @include('layouts.error', ['name' => 'PdtStkQty'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtStkAmt">
                                            
                                            <h6>Product Stock amount</h6>
                                            <h6 class="h">PdtStkAmt</h6>

                                        </label>
                                        <input type="number" class="form-control" name="PdtStkAmt" value="{{ old('PdtStkAmt') }}">
                                        @include('layouts.error', ['name' => 'PdtStkAmt'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtVatType">
                                            
                                            <h6>Product vat type</h6>
                                            <h6 class="h">PdtVatType</h6>
                                        </label>
                                        <input type="number" class="form-control" name="PdtVatType" value="{{ old('PdtVatType') }}">
                                        @include('layouts.error', ['name' => 'PdtVatType'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtType">
                                            
                                            <h6>Product type</h6>
                                            <h6 class="h">PdtType</h6>
                                        </label>
                                        <input type="number" class="form-control" name="PdtType" value="{{ old('PdtType') }}">
                                        @include('layouts.error', ['name' => 'PdtType'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtGrpCode">
                                            
                                            <h6>Product Group Code</h6>
                                            <h6 class="h">PdtGrpCode</h6>
                                        </label>
                                        <input type="text" class="form-control" name="PdtGrpCode" value="{{ old('PdtGrpCode') }}">
                                        @include('layouts.error', ['name' => 'PdtGrpCode'])
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="PdtBndCode">
                                            
                                            <h6>Product Brand Code</h6>
                                            <h6 class="h">PdtBndCode</h6>
                                        </label>
                                        <input type="text" class="form-control" name="PdtBndCode" value="{{ old('PdtBndCode') }}">
                                        @include('layouts.error', ['name' => 'PdtBndCode'])
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="PdtSizeCode">
                                            <h6>Product Size Code</h6>
                                            <h6 class="h">PdtSizeCode</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="PdtSizeCode" value="{{ old('PdtSizeCode') }}">
                                        @include('layouts.error', ['name' => 'PdtSizeCode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtColorCode">
                                            
                                            <h6>Product Color Code</h6>
                                            <h6 class="h">PdtColorCode</h6>
                                        </label>
                                        <input type="text" class="form-control" name="PdtColorCode" value="{{ old('PdtColorCode') }}">
                                        @include('layouts.error', ['name' => 'PdtColorCode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="SplCode">
                                            
                                            <h6>Supplier Code</h6>
                                            <h6 class="h">SplCode</h6>
                                        </label>
                                        <input type="text" class="form-control" name="SplCode" value="{{ old('SplCode') }}">
                                        @include('layouts.error', ['name' => 'SplCode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="GLAccNO">

                                            <h6>General Account Number</h6>
                                            <h6 class="h">GLAccNO</h6>
                                        </label>
                                        <input type="text" class="form-control" name="GLAccNO" value="{{ old('GLAccNO') }}">
                                        @include('layouts.error', ['name' => 'GLAccNO'])
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

                                <td>
                                    <div class="form-group">
                                        <label for="PdtBarcode">
                                            <h6>PdtBarcode</h6>
                                            <h6 class="h">PdtBarcode</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="PdtBarcode" value="{{ old('PdtBarcode') }}">
                                        @include('layouts.error', ['name' => 'PdtBarcode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtSKURef">
                                            <h6>PdtSKURef</h6>
                                            <h6 class="h">PdtSKURef</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="PdtSKURef" value="{{ old('PdtSKURef') }}">
                                        @include('layouts.error', ['name' => 'PdtSKURef'])
                                    </div>

                                    <div class="form-group">
                                        <label for="PdtUnitCode">
                                            <h6>PdtUnitCode</h6>
                                            <h6 class="h">PdtUnitCode</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="PdtUnitCode" value="{{ old('PdtUnitCode') }}">
                                        @include('layouts.error', ['name' => 'PdtUnitCode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="Price1">
                                            <h6>Price1</h6>
                                            <h6 class="h">Price1</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="Price1" value="{{ old('Price1') }}">
                                        @include('layouts.error', ['name' => 'Price1'])
                                    </div>

                                    <div class="form-group">
                                        <label for="Price2">
                                            <h6>Price2</h6>
                                            <h6 class="h">Price2</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="Price2" value="{{ old('Price2') }}">
                                        @include('layouts.error', ['name' => 'Price2'])
                                    </div>

                                    <div class="form-group">
                                        <label for="Price3">
                                            <h6>Price3</h6>
                                            <h6 class="h">Price3</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="Price3" value="{{ old('Price3') }}">
                                        @include('layouts.error', ['name' => 'Price3'])
                                    </div>

                                    <div class="form-group">
                                        <label for="Price4">
                                            <h6>Price4</h6>
                                            <h6 class="h">Price4</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="Price4" value="{{ old('Price4') }}">
                                        @include('layouts.error', ['name' => 'Price4'])
                                    </div>

                                    <div class="form-group">
                                        <label for="Price5">
                                            <h6>Price5</h6>
                                            <h6 class="h">Price5</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="Price5" value="{{ old('Price5') }}">
                                        @include('layouts.error', ['name' => 'Price5'])
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label for="UnitCode">
                                            <h6>UnitCode</h6>
                                            <h6 class="h">UnitCode</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="UnitCode" value="{{ old('UnitCode') }}">
                                        @include('layouts.error', ['name' => 'UnitCode'])
                                    </div>

                                    <div class="form-group">
                                        <label for="UnitName">
                                            <h6>UnitName</h6>
                                            <h6 class="h">UnitName</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="UnitName" value="{{ old('UnitName') }}">
                                        @include('layouts.error', ['name' => 'UnitName'])
                                    </div>

                                    <div class="form-group">
                                        <label for="UnitFactor">
                                            <h6>UnitFactor</h6>
                                            <h6 class="h">UnitFactor</h6>
                                            
                                        </label>
                                        <input type="text" class="form-control" name="UnitFactor" value="{{ old('UnitFactor') }}">
                                        @include('layouts.error', ['name' => 'UnitFactor'])
                                    </div>
                                </td>
                            </table>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">เพิ่มสินค้า</button>
                                </div>
                            </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
