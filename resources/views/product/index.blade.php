@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="min-height: 85vh">
                <div class="card-header bg-white">
                    <form action="{{ route('products.index') }}" method="get">
                        <div class="row">  
                            <div class="col"><h4 class="font-weight-bold">รายการสินค้า</h4></div>
                            <div class="col" style="width: 50px;">
                                <input type="text" 
                                        name="search"
                                        style="width: 300px;"
                                        class="form-control form-control-sm col-sm-12 float-right"
                                        placeholder="ค้นหา" 
                                        onblur="this.form.submit()">
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="card-body">
                            <table class="table">
                                <thead>
                                    <div class="row">
                                        <hr>
                                        <div class="col d-flex">
                                                <a href="{{ url('/products/create')}}"
                                                    class="btn btn-sm-2 ml-auto text-white"  style="background: linear-gradient(to right, #ff5858, #f857a6); width: 120px"> 
                                                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;เพิ่มสินค้า
                                                </a>
                                            </div>
                                    </div>
                                    
                                    <tr style="text-align:center">
                                        
                                        <th>Barcode</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>ราคา</th>
                                        <th>จำนวน</th>
                                        <th>ประเภท</th>
                                        <th>วันที่/เวลาเพิ่มสินค้า</th>
                                        <th>วันที่/เวลาอัพเดตสินค้า</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    {{-- ราคา}}
                                    @foreach($Barcode as $Bar)
                                        <td>{{ $Bar->Price1}}</td>
                                    @endforeach
                                    {{-- ราคา--}}

                                    {{-- Uint}}
                                    @foreach($Unit as $Ut)
                                        <td>{{ $Ut->UnitType}}</td>
                                    @endforeach
                                    {{-- Uint--}}

                                    @if(count($products))
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product->PdtSKUCode }}</td>
                                                <td>{{ $product->PdtName}}</td>
                                                <td>{{ $product->Price1}}</td>
                                                <td>{{ $product->PdtStkQty }}</td>
                                                <td>{{ $product->PdtType }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>{{ $product->updated_at }}</td>
                                                <td>{{ $product->status ? 'Available' : 'Not Available' }} </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" href="{{ route('view_product', $product->id) }}" class="btn btn-success"  title="view PRODUCT"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                        <a type="button" href="{{ route('products.edit', $product->id) }}" class="btn btn-success"  title="edit PRODUCT"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a type="button" href="{{ route('delete_product', $product->id) }}" class="btn btn-danger"  title="DELETE PRODUCT"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr style="text-align:center">
                                        <td colspan='9'>No Products Available</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                </div>

                <div>
                    {{ $products->links() }}
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