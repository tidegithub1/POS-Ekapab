@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">
                    <form action="{{ route('products.destroy', $product->id ) }}" method="POST">
                        <label class="font-weight-bold">
                            <h4 class="font-weight-bold">แก้ไขสินค้า</h4>
                        </label>
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm float-right"
                            onclick="return confirm('คุณต้องการที่จะลบสินค้าหรือไม่');">ลบสินค้า</button>
                    </form>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                    @include('layouts.flash-error',[ 'message'=> Session('error') ])
                    @endif
                    @if(Session::has('success'))
                    @include('layouts.flash-success',[ 'message'=> Session('success') ])
                    @endif
                    <form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="qty" value="{{ $product->qty }}">
                        <div class="form-group">
                            <label for="product">ชื่อสินค้า</label>
                            <input type="text" class="form-control" name="name"
                                value="{{ old('name', $product->name) }}">
                            @include('layouts.error', ['name' => 'name'])
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="price">ราคาสินค้า</label>
                                    <input type="number" class="form-control" name="price"
                                        value="{{ old('price' , $product->price) }}">
                                    @include('layouts.error', ['name' => 'price'])
                                </div>
                                <div class="form-group">
                                    <label>รูปสินค้า</label>
                                    <div>
                                        <div class="custom-file">
                                            <br>
                                            <input name="image" id="image" type="file" class="custom-file-input"
                                                accept="image/*"
                                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0]); document.getElementById('preview').style.display = 'none'">
                                                <label class="custom-file-label">เลือกไฟล์</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <img id="output" src="" class="img-fluid">
                                    </div>
                                    @if($product->image)
                                        <img src="{{asset($product->image)}}" class="img-fluid" id="preview">
                                    @endif
                                    @include('layouts.error', ['name' => 'image'])
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="qty">จำนวนสินค้า</label>
                                    <input type="number" class="form-control" value="{{ old('qty', $product->qty) }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="addQty">เพิ่ม / ลดจำนวน </label>
                                    <input type="number" 
                                            class="form-control" 
                                            name="addQty" 
                                            value="{{ old('addQty') }}"
                                            placeholder="ใส่จำนวนที่ต้องการเพิ่ม / ลดสินค้า">
                                    @if(Session::has('errorQty'))
                                    <small class="text-danger font-weight-bold">
                                        {{ Session('errorQty') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">คำอธิบาย</label>
                            <textarea name="description" 
                                    cols="30" 
                                    rows="10"
                                    class="form-control">{{ old('description', $product->description) }}
                            </textarea>
                            @include('layouts.error', ['name' => 'description'])
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">อัพเดตสินค้า</button>
                        </div>
                    </form>
                    <H4>ประวัติการอัพเดต</H4>
                    <table class="table" id="dtMaterialDesignExample">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>อัพเดตโดย</th>
                                <th>จำนวนที่มีอยู่</th>
                                <th>จำนวนเพิ่ม / ลด</th>
                                <th>จำนวน</th>
                                <th>เวลา</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $index=>$item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->qtyChange}}</td>
                                <td>{{$item->qty + $item->qtyChange}}</td>
                                <td>{{$item->created_at->diffForHumans()}}</td>
                                <td>{{$item->tipe}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

