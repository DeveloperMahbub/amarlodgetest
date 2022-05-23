<?php

namespace App\Http\Controllers;

use App\Models\FactoryManagement;
use Illuminate\Http\Request;

class FactoryManageController extends Controller
{
    public function index()
    {
        return view('admin.factoryManage.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request -> validate([
            'date'   => 'required',
            'factoryCode'   => 'required',
            'factoryName'   => 'required',
            'factoryPhone'   => 'required',
            'factoryValue'   => 'required',
            'factoryaddress'   => 'required',
            'receivedDate'   => 'required',
       ]); 

       $factoryData = new FactoryManagement();
       $factoryData->factoryDate = date('Y-m-d',strtotime($request->date));
       $factoryData->factoryCode = $request->factoryCode;
       $factoryData->factoryName = $request->factoryName;
       $factoryData->factoryPhone = $request->factoryPhone;
       $factoryData->factoryValue = $request->factoryValue;
       $factoryData->factoryaddress = $request->factoryaddress;
       if ($request->designApproved != null) {
        $factoryData->designApproved = $request->designApproved;
       }
       if ($request->designNotApproved != null) {
        $factoryData->designNotApproved = $request->designNotApproved;
       }
       $factoryData->receivedDate = $request->receivedDate;
       $factoryData->save();
       
           return redirect()-> back() -> with("success",'Data added Successfully');
    }
}
