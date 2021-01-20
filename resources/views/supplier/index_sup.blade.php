@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="min-height: 85vh">
                <div class="card-header bg-white">
                    <form action="{{ route('suppliers.index') }}" method="get">
                        <div class="row">  
                            <div class="col">
                            </div>
                            <div class="col">
                                <input type="text" 
                                        name="search"
                                        class="form-control form-control-sm col-sm-12 float-right"
                                        placeholder="ค้นหา" 
                                        onblur="this.form.submit()">
                            </div>
                            <a href="{{ url('/suppliers/create')}}"
                                class="btn btn-sm-2 ml-auto text-white" style="background: linear-gradient(to right, #ff5858, #f857a6);"> ค้นหาสินค้า
                            </a>

                        </div>
                    </form>
                </div>
                <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <div class="row">
                                        <hr>
                                        <h4 class="font-weight-bold p-2">Supplier</h4>
                                        <div class="col d-flex">
                                                <a href="{{ url('/suppliers/create')}}"
                                                    class="btn btn-sm-2 ml-auto text-white"  style="background: linear-gradient(to right, #ff5858, #f857a6);"> Add Supplier
                                                </a>
                                            </div>
                                    </div>
                                    
                                    <tr style="text-align:center">
                                        
                                        <th>SplCode</th>
                                        <th>SplName</th>
                                        <th>SplNameOTH</th>
                                        <th>SplAddress1</th>
                                        <th>SplAddress2</th>
                                        <th>วันที่เพิ่ม</th>
                                        <th>วันที่อัพเดต</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($Supplier))
                                        @foreach($Supplier as $sup)
                                            <tr>
                                                <td>{{ $sup->SplCode }}</td>
                                                <td>{{ $sup->SplName}}</td>
                                                <td>{{ $sup->SplNameOTH}}</td>
                                                <td>{{ $sup->SplAddress1 }}</td>
                                                <td>{{ $sup->SplAddress2 }}</td>
                                                <td>{{ $sup->created_at }}</td>
                                                <td>{{ $sup->updated_at }}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" href="{{ route('view_sup', $sup->id) }}" class="btn btn-success"  title="view PRODUCT"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        <a type="button" href="{{ route('suppliers.edit', $sup->id) }}" class="btn btn-success"  title="edit PRODUCT"><i class="fa fa-file" aria-hidden="true"></i></a>
                                                        <a type="button" href="{{ route('delete_sup', $sup->id) }}" class="btn btn-danger"  title="DELETE PRODUCT"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                </div>
                @else
                    <tr style="text-align:center">
                    <td colspan='9'>No Products Available</td>
                    </tr>
                @endif
                <div>
                    {{ $Supplier->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('style')
    <style>
        .gambar {
            width: 100%;
            height: 175px;
            padding: 0.9rem 0.9rem
        }

       @media only screen and (max-width: 600px) {
            .gambar {
                width: 100%;
                height: 100%;
                padding: 0.9rem 0.9rem
            }
        }

    </style>
    @endpush