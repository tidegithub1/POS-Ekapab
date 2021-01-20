<?php

namespace App\Http\Controllers;

use File;
use App\Product;
use App\Barcode;
use App\Unit;
use App\HistoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    //public function index(Product $product){
       
        //$product = Product::when(request('search'), function($query){
        //                return $query->where('PdtName','like','%'.request('search').'%');
        //            })
        //            ->orderBy('created_at','desc')
        //            ->paginate(8);

        //$barcode = Barcode::all();
        //$product->barcodes()->attach($barcode);

        //return view('product.index',compact('product'));
        
    //}



    public function create(){
        return view('product.create');
    }

    public function store(Request $request){       

        DB::beginTransaction();

        try{
            $id = $request->id;

            if($id){
                $this->validate($request, [
                    'PdtSKUCode' => 'required',
                    'PdtName' => 'required|min:2|max:200',
                    'PdtNameOTH' => 'required',
                    'PdtStkQty' => 'required',
                    'PdtStkAmt' => 'required',
                    'PdtVatType' => 'required',
                    'PdtType' => 'required',
                    'PdtGrpCode' => 'required',
                    'PdtBndCode' => 'required',
                    'PdtSizeCode' => 'required',
                    'PdtColorCode' => 'required',
                    'SplCode' => 'required',
                    'GLAccNO' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required', 

                    'PdtBarcode' => 'required', 
                    'PdtSKURef' => 'required', 
                    'PdtUnitCode' => 'required', 
                    'Price1' => 'required', 
                    'Price2' => 'required', 
                    'Price3' => 'required', 
                    'Price4' => 'required', 
                    'Price5' => 'required',

                    'UnitCode' => 'required',
                    'UnitName' => 'required',
                    'UnitFactor' => 'required',

                ]);

                if($request->addQty){
                    $qty = $request->PdtStkQty + $request->addQty;
                    if($qty < 0){
                        return redirect()->back()->with('errorQty','Quantity cant be lower than zero');
                    }
                }else{
                    $qty = $request->PdtStkQty;
                }

                $product_id = Product::find($id);
                //$Unit = Unit::find($id);
                //$Barcode = Barcode::find($id);

                $product = [
                    'PdtSKUCode' => $request->PdtSKUCode,
                    'PdtName' => $request->PdtName,    
                    'PdtNameOTH' => $request->PdtNameOTH,    
                    'PdtStkQty' => $request->PdtStkQty,
                    'PdtStkAmt' => $request->PdtStkAmt,
                    'PdtVatType' => $request->PdtVatType,
                    'PdtType' => $request->PdtType,
                    'PdtGrpCode' => $request->PdtGrpCode,
                    'PdtBndCode' => $request->PdtBndCode,
                    'PdtSizeCode' => $request->PdtSizeCode,
                    'PdtColorCode' => $request->PdtColorCode,
                    'SplCode' => $request->SplCode,
                    'GLAccNO' => $request->GLAccNO,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType, 
                    
                    'barcode_id' => 0,
                    'unit_id' => 0,
                    'user_id' => Auth::id()
                ];

                $Barcode = [
                    'PdtSKUCode' => $request->PdtSKUCode,
                    'PdtBarcode' => $product->PdtBarcode,
                    'PdtSKURef' => $request->PdtSKURef,
                    'PdtUnitCode' => $request->PdtUnitCode,
                    'Price1' => $request->Price1,
                    'Price2' => $request->Price2,
                    'Price3' => $request->Price3,
                    'Price4' => $request->Price4,
                    'Price5' => $request->Price5,
                    'PdtAge' => $product->PdtAge,
                    'UnitType' => $product->UnitType,  
                    'user_id' => Auth::id(),
                ];

                $Unit = [
                    'UnitCode' => $product->UnitCode,
                    'UnitName' => $request->UnitCode,
                    'UnitFactor' => $request->UnitCode,
                    'PdtAge' => $product->PdtAge,
                    'UnitType' => $product->UnitType,
                    'user_id' => Auth::id(),
                ];

                $product_id->update($product);
                //$Barcode->update($product);
                //$Unit->update($product);

                if($request->addQty){
                    HistoryProduct::create([
                        'product_id' => $product_id->id,
                        'user_id' => Auth::id(),
                        'PdtStkQty' => $request->PdtStkQty,
                        'UnitType' => $request->UnitType,
                        'qtyChange' => $request->addQty,
                    ]);
                }
                
                $message = 'Data Berhasil di update';
                
                DB::commit();
                return redirect()->route('products.index')->with('success',$message);   
            }else{
                $this->validate($request, [
                    'PdtSKUCode' => 'required',
                    'PdtName' => 'required|min:2|max:200',
                    'PdtNameOTH' => 'required',
                    'PdtStkQty' => 'required',
                    'PdtStkAmt' => 'required',
                    'PdtVatType' => 'required',
                    'PdtType' => 'required',
                    'PdtGrpCode' => 'required',
                    'PdtBndCode' => 'required',
                    'PdtSizeCode' => 'required',
                    'PdtColorCode' => 'required',
                    'SplCode' => 'required',
                    'GLAccNO' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required',
                    
                    'PdtBarcode' => 'required', 
                    'PdtSKURef' => 'required', 
                    'PdtUnitCode' => 'required', 
                    'Price1' => 'required', 
                    'Price2' => 'required', 
                    'Price3' => 'required', 
                    'Price4' => 'required', 
                    'Price5' => 'required',

                    'UnitCode' => 'required',
                    'UnitName' => 'required',
                    'UnitFactor' => 'required',
                ]);

                

                $product = Product::create([
                    
                    'PdtSKUCode' => $request->PdtSKUCode,
                    'PdtName' => $request->PdtName,    
                    'PdtNameOTH' => $request->PdtNameOTH,    
                    'PdtStkQty' => $request->PdtStkQty,
                    'PdtStkAmt' => $request->PdtStkAmt,
                    'PdtVatType' => $request->PdtVatType,
                    'PdtType' => $request->PdtType,
                    'PdtGrpCode' => $request->PdtGrpCode,
                    'PdtBndCode' => $request->PdtBndCode,
                    'PdtSizeCode' => $request->PdtSizeCode,
                    'PdtColorCode' => $request->PdtColorCode,
                    'SplCode' => $request->SplCode,
                    'GLAccNO' => $request->GLAccNO,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,   

                    'barcode_id' => 0,
                    'unit_id' => 0,
                    'user_id' => Auth::id()
                ]);        

                HistoryProduct::create([
                    'product_id' => $product->id,
                    'user_id' => Auth::id(),
                    'PdtStkQty' => $request->PdtStkQty,
                    'UnitType' => $request->UnitType,
                    'qtyChange' => 0,
                ]);

                Barcode::create([
                    'PdtSKUCode' => $product->PdtSKUCode,
                    'PdtBarcode' => $request->PdtBarcode,
                    'PdtSKURef' => $request->PdtSKURef,
                    'PdtUnitCode' => $request->PdtUnitCode,
                    'Price1' => $request->Price1,
                    'Price2' => $request->Price2,
                    'Price3' => $request->Price3,
                    'Price4' => $request->Price4,
                    'Price5' => $request->Price5,
                    'PdtAge' => $product->PdtAge,
                    'UnitType' => $product->UnitType,  
                    'user_id' => Auth::id(),
                ]);

                Unit::create([
                    'UnitCode' => $request->UnitCode,
                    'UnitName' => $request->UnitCode,
                    'UnitFactor' => $request->UnitCode,
                    'PdtAge' => $product->PdtAge,
                    'UnitType' => $product->UnitType,
                    'user_id' => Auth::id(),
                ]);

                $barcode = Barcode::find($id);
                $product->barcodes()->attach($barcode);

                $unit = Unit::find($id);
                $product->units()->attach($unit);

                $message = 'Data Berhasil di simpan';

                DB::commit();
                return redirect()->route('products.index',compact('product'))->with('success',$message);   
            }            
        }
        catch(\Exeception $e){
            DB::rollback();
            return redirect()->route('products.create')->with('error',$e);
        }         
    }


    public function index(Product $barcode){
       
        $product = Product::when(request('search'), function($query){
                        return $query->where('PdtName','like','%'.request('search').'%');
                    })
                    ->orderBy('created_at','desc')
                    ->paginate(8);

        //$product = Product::find(1);
        //$barcode->barcodes()->attach($product);

        return view('product.index',compact('product'));
        
    }

    public function view($id){

        $data[] = "";
        $data['error'] = "";
        $data['product'] = Product::where('id', $id)->first();
        //$data['Barcode'] = Barcode::where('id', $id)->first();

        return view('viewpdt.view_product',$data);
    }

    public function edit($id){
        
        $product = Product::find($id);
        $history = HistoryProduct::where('id',$id)->orderBy('created_at','desc')->get();
        return view('viewpdt.edit_product',compact('product','history'));
    }

    public function delete($id){
        
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }

    


    public function destroy(Request $request,$id){
        DB::beginTransaction();

        try{

        DB::commit();
        return redirect()->route('products.index')->with('success','Product berhasil dihapus');                             
        }
        catch(\Exeception $e){
            DB::rollback();      
            return redirect()->route('products.index')->with('error',$e);      
        }  

        
    }
    

}
