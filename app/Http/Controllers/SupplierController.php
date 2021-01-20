<?php

namespace App\Http\Controllers;

use File;
use App\Sup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;


class SupplierController extends Controller
{
    public function index(){
       
        $Supplier = Sup::when(request('search'), function($query){
                        return $query->where('SplName','like','%'.request('search').'%');
                    })
                    ->orderBy('created_at','desc')
                    ->paginate(8);
        return view('supplier.index_sup', compact('Supplier'));
    }

    public function create(){
        return view('supplier.create_sup');
    }

    public function store(Request $request){       

        DB::beginTransaction();

        try{
            $id = $request->id;

            if($id){
                $this->validate($request, [
                    'SplCode' => 'required',
                    'SplName' => 'required|min:2|max:200',
                    'SplNameOTH' => 'required',
                    'SplAddress1' => 'required',
                    'SplAddress2' => 'required',
                    'SplTaxNo' => 'required',
                    'SplTel' => 'required',
                    'SplEmail' => 'required',
                    'SplOthinfo' => 'required',
                    'SplCraditterm' => 'required',
                    'SplVatType' => 'required',
                    'SplLimit' => 'required',
                    'SplAmt' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required', 
                ]);


                $Supplier_edit = Sup::find($id);

                $Supplier = [
                    'SplCode' => $request->SplCode,
                    'SplName' => $request->SplName,    
                    'SplNameOTH' => $request->SplNameOTH,    
                    'SplAddress1' => $request->SplAddress1,
                    'SplAddress2' => $request->SplAddress2,
                    'SplTaxNo' => $request->SplTaxNo,
                    'SplTel' => $request->SplTel,
                    'SplEmail' => $request->SplEmail,
                    'SplOthinfo' => $request->SplOthinfo,
                    'SplCraditterm' => $request->SplCraditterm,
                    'SplVatType' => $request->SplVatType,
                    'SplLimit' => $request->SplLimit,
                    'SplAmt' => $request->SplAmt,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,        
                    'user_id' => Auth::id()
                ];

                $Supplier_edit->update($Supplier);

                $message = 'Data Berhasil di update';
                
                DB::commit();
                return redirect()->route('suppliers.index')->with('success',$message);  

            }else{
                $this->validate($request, [
                    'SplCode' => 'required',
                    'SplName' => 'required|min:2|max:200',
                    'SplNameOTH' => 'required',
                    'SplAddress1' => 'required',
                    'SplAddress2' => 'required',
                    'SplTaxNo' => 'required',
                    'SplTel' => 'required',
                    'SplEmail' => 'required',
                    'SplOthinfo' => 'required',
                    'SplCraditterm' => 'required',
                    'SplVatType' => 'required',
                    'SplLimit' => 'required',
                    'SplAmt' => 'required',
                    'PdtAge' => 'required',
                    'UnitType' => 'required', 
                ]);

                $Supplier = Sup::create([
                    
                    'SplCode' => $request->SplCode,
                    'SplName' => $request->SplName,    
                    'SplNameOTH' => $request->SplNameOTH,    
                    'SplAddress1' => $request->SplAddress1,
                    'SplAddress2' => $request->SplAddress2,
                    'SplTaxNo' => $request->SplTaxNo,
                    'SplTel' => $request->SplTel,
                    'SplEmail' => $request->SplEmail,
                    'SplOthinfo' => $request->SplOthinfo,
                    'SplCraditterm' => $request->SplCraditterm,
                    'SplVatType' => $request->SplVatType,
                    'SplLimit' => $request->SplLimit,
                    'SplAmt' => $request->SplAmt,
                    'PdtAge' => $request->PdtAge,
                    'UnitType' => $request->UnitType,        
                    'user_id' => Auth::id()
                ]);        

                $message = 'Data Berhasil di update';

                DB::commit();
                return redirect()->route('suppliers.index')->with('success',$message);   
            }            
        }
        catch(\Exeception $e){
            DB::rollback();
            return redirect()->route('supplers.create')->with('error',$e);
        }         
    }

    public function view($id){

        $data[] = "";
        $data['error'] = "";
        $data['sup'] = Sup::where('id', $id)->first();

        return view('supplier.view_sup',$data);
    }

    public function edit($id){
        
        $supplier = Sup::find($id);
        return view('supplier.edit_sup',compact('supplier'));
    }

    public function delete($id){
        
        Sup::find($id)->delete();
        return redirect()->route('suppliers.index');
    }

    
    

}
