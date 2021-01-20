@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-6 offset-sm-3">
                <div class="card">
                    <div class="card-header">
                    EDIT suppliers DETAILS ({{ $supplier->SplCode }})
                    </div>
                    <div class="card-body">
                        <form action="{{url('/suppliers')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $supplier->id }}">
                            <input type="hidden" name="SplCode" value="{{ $supplier->SplCode }}">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" class="form-control" name="SplName" value="{{ $supplier->SplName }}" required>
                            </div>
                            <div class="form-group">
                                <label>SplNameOTH</label>
                                <input type="text" class="form-control" name="SplNameOTH" value="{{ $supplier->SplNameOTH }}" required>
                            </div>
                            <div class="form-group">
                                <label>SplAddress1</label>
                                <input type="number" class="form-control" name="SplAddress1" value="{{ $supplier->SplAddress1 }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplAddress2</label>
                                <input type="number" class="form-control" name="SplAddress2" value="{{ $supplier->SplAddress2 }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplTaxNo</label>
                                <input type="number" class="form-control" name="SplTaxNo" value="{{ $supplier->SplTaxNo }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplTel</label>
                                <input type="number" class="form-control" name="SplTel" value="{{ $supplier->SplTel }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplEmail</label>
                                <input type="text" class="form-control" name="SplEmail" value="{{ $supplier->SplEmail }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplOthinfo</label>
                                <input type="text" class="form-control" name="SplOthinfo" value="{{ $supplier->SplOthinfo }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplCraditterm</label>
                                <input type="text" class="form-control" name="SplCraditterm" value="{{ $supplier->SplCraditterm }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplVatType</label>
                                <input type="text" class="form-control" name="SplVatType" value="{{ $supplier->SplVatType }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplLimit</label>
                                <input type="text" class="form-control" name="SplLimit" value="{{ $supplier->SplLimit }}" required>
                            </div> 
                            <div class="form-group">
                                <label>SplAmt</label>
                                <input type="text" class="form-control" name="SplAmt" value="{{ $supplier->SplAmt }}" required>
                            </div>
                            <div class="form-group">
                                <label>PdtAge</label>
                                <input type="text" class="form-control" name="PdtAge" value="{{ $supplier->PdtAge }}" required>
                            </div>
                            <div class="form-group">
                                <label>UnitType</label>
                                <input type="text" class="form-control" name="UnitType" value="{{ $supplier->UnitType }}" required>
                            </div> 
                            <hr>
                            <input type="submit" value="Update" class="btn btn-outline-secondary btn-block">
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection