<?php

namespace App\Http\Controllers;

use App\Models\FactoryManagement;
use App\Models\QcAltproduct;
use App\Models\QcNewproduct;
use Illuminate\Http\Request;

class QcProductController extends Controller
{
    public function index()
    {
        return view('admin.qcProduct.index');
    }

    public function qcnewDetails(Request $request)
    {
        $details = FactoryManagement::where('factoryCode',$request->factoryCode)->first();
        return view('admin.qcProduct.newProduct',compact('details'));
    }

    public function qcnewStore(Request $request)
    {
        $validateData = $request -> validate([
            'received_date'   => 'required',
            'factoryCode'   => 'required',
            'factoryphone'   => 'required',
            'total_pieces'   => 'required',
            'reject_pieces'   => 'required',
            'costPer_pieces'   => 'required',
            'alternative_product'   => 'required',
            'used_fabric'   => 'required',
            'altReceive_date'   => 'required',
       ]); 

       $storeNewProduct = new QcNewproduct();
       $storeNewProduct->received_date = date('Y-m-d',strtotime($request->received_date));
       $storeNewProduct->factoryCode = $request->factoryCode;
       $storeNewProduct->factoryphone = $request->factoryphone;
       $storeNewProduct->total_pieces = $request->total_pieces;
       $storeNewProduct->reject_pieces = $request->reject_pieces;
       $storeNewProduct->costPer_pieces = $request->costPer_pieces;
       $storeNewProduct->total_cost = $request->total_cost;
       $storeNewProduct->alternative_product = $request->alternative_product;
       $storeNewProduct->used_fabric = $request->used_fabric;
       $storeNewProduct->altReceive_date = date('Y-m-d',strtotime($request->altReceive_date));
       $storeNewProduct->save();

       return redirect()-> route('qcProduct') -> with("success",'Data added Successfully');
    }

    public function qcnewList()
    {
        $allData = QcNewproduct::all();
        return view('admin.qcProduct.allNewProductlist',compact('allData'));
    }

    public function qcnewProductDetails($id)
    {
        $details = FactoryManagement::where('factoryCode',$id)->first();
        $allDetails = QcNewproduct::where('factoryCode',$id)->first();
        return view('admin.qcProduct.allNewProductdetails',compact('allDetails','details'));
    }

    public function altproduct(Request $request)
    {
        $details = FactoryManagement::where('factoryCode',$request->altfactoryCode)->first();
        $altrd = QcNewproduct::select('altReceive_date')->where('factoryCode',$request->altfactoryCode)->first();
        return view('admin.qcProduct.altProduct',compact('details','altrd'));
    }


    public function qcaltStore(Request $request)
    {
        // dd($request->all());
        $validateData = $request -> validate([
            'received_date'   => 'required',
            'factoryCode'   => 'required',
            'factoryphone'   => 'required',
            'total_pieces'   => 'required',
            'reject_pieces'   => 'required',
            'costPer_pieces'   => 'required',
            'alternative_product'   => 'required',
            'alter_received'   => 'required',
       ]); 

       $storealtProduct = new QcAltproduct();
       $storealtProduct->received_date = date('Y-m-d',strtotime($request->received_date));
       $storealtProduct->factoryCode = $request->factoryCode;
       $storealtProduct->factoryphone = $request->factoryphone;
       $storealtProduct->total_pieces = $request->total_pieces;
       $storealtProduct->reject_pieces = $request->reject_pieces;
       $storealtProduct->costPer_pieces = $request->costPer_pieces;
       $storealtProduct->total_cost = $request->total_cost;
       $storealtProduct->alternative_product = $request->alternative_product;
       $storealtProduct->alter_received = $request->alter_received;
       $storealtProduct->total_piece = $request->total_piece;
       $storealtProduct->total_amount = $request->total_amount;
       $storealtProduct->save();

       return redirect()-> route('qcProduct') -> with("success",'Data added Successfully');
    }

    public function qcaltList()
    {
        $allData = QcAltproduct::all();
        return view('admin.qcProduct.altProductList',compact('allData'));
    }


    public function qcaltProductDetails($id)
    {
        $details = FactoryManagement::where('factoryCode',$id)->first();
        $altrd = QcNewproduct::select('altReceive_date')->where('factoryCode',$id)->first();
        $allDetails = QcAltproduct::where('factoryCode',$id)->first();
        return view('admin.qcProduct.altproductdetail',compact('allDetails','details','altrd'));
    }
    
}
