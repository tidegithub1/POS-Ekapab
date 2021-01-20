@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-6 offset-sm-3">
                <div class="card">
                    <div class="card-header text-white" style="background: linear-gradient(to right, #ff5858, #f857a6);">
                    EDIT PRODUCT DETAILS ({{ $product->PdtSKUCode }})
                    </div>
                        <form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <table class="table">
                                    <td>
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="PdtSKUCode" value="{{ $product->PdtSKUCode }}">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="PdtName" value="{{ $product->PdtName }}" required>
                            </div>
                            <div class="form-group">
                                <label>PdtNameOTH</label>
                                <input type="text" class="form-control" name="PdtNameOTH" value="{{ $product->PdtNameOTH }}" required>
                            </div>
                            <div class="form-group">
                                <label>PdtStkQty</label>
                                <input type="number" class="form-control" name="PdtStkQty" value="{{ $product->PdtStkQty }}" required>
                            </div> 
                            <div class="form-group">
                                <label>PdtStkAmt</label>
                                <input type="number" class="form-control" name="PdtStkAmt" value="{{ $product->PdtStkAmt }}" required>
                            </div> 
                            <div class="form-group">
                                <label>PdtVatType</label>
                                <input type="number" class="form-control" name="PdtVatType" value="{{ $product->PdtVatType }}" required>
                            </div> 
                            <div class="form-group">
                                <label>PdtType</label>
                                <input type="number" class="form-control" name="PdtType" value="{{ $product->PdtType }}" required>
                            </div> 
                            <div class="form-group">
                                <label>PdtGrpCode</label>
                                <input type="text" class="form-control" name="PdtGrpCode" value="{{ $product->PdtGrpCode }}" required>
                            </div> 
                            </td>
                            <td>
                            <div class="form-group">
                                <label>PdtBndCode</label>
                                <input type="text" class="form-control" name="PdtBndCode" value="{{ $product->PdtBndCode }}" required>
                            </div> 
                            <div class="form-group">
                                <label>PdtSizeCode</label>
                                <input type="text" class="form-control" name="PdtSizeCode" value="{{ $product->PdtSizeCode }}" required>
                            </div> 
                            <div class="form-group">
                                <label>PdtColorCode</label>
                                <input type="text" class="form-control" name="PdtColorCode" value="{{ $product->PdtColorCode }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplCode</label>
                                <input type="text" class="form-control" name="SplCode" value="{{ $product->SplCode }}" required>
                            </div> 
                            <div class="form-group">
                                <label>GLAccNO</label>
                                <input type="text" class="form-control" name="GLAccNO" value="{{ $product->GLAccNO }}" required>
                            </div>
                            <div class="form-group">
                                <label>PdtAge</label>
                                <input type="text" class="form-control" name="PdtAge" value="{{ $product->PdtAge }}" required>
                            </div>
                            <div class="form-group">
                                <label>UnitType</label>
                                <input type="text" class="form-control" name="UnitType" value="{{ $product->UnitType }}" required>
                            </div> 
                                    </td>
                                </table>
                            <hr>
                            <button type="submit" value="Update" class="btn btn-block text-white" style="background: linear-gradient(to right, #ff5858, #f857a6);"> Update
                            </button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection