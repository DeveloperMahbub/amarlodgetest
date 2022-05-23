<?php

namespace App\Http\Controllers;

use App\Models\Fabric;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    public function index()
    {
        return view('admin.fabric.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request -> validate([
            'date'   => 'required',
            'purchaseCode'   => 'required',
            'buyerName'   => 'required',
            'buyerPhone'   => 'required',
            'fabricValue'   => 'required',
            'buyeraddress'   => 'required',
            'unit_price'   => 'required',
            'fabric_name'   => 'required',
       ]); 

       $fabricData = new Fabric();
       $fabricData->date = date('Y-m-d',strtotime($request->date));
       $fabricData->purchaseCode = $request->purchaseCode;
       $fabricData->buyerName = $request->buyerName;
       $fabricData->buyerPhone = $request->buyerPhone;
       $fabricData->fabricValue = $request->fabricValue;
       $fabricData->buyeraddress = $request->buyeraddress;
       $fabricData->unit_price = $request->unit_price;
       $fabricData->total_amount = $request->total_amount;
       $fabricData->fabric_name = $request->fabric_name;
       $fabricData->save();
       
           return redirect()-> back() -> with("success",'Data added Successfully');
    }
}
