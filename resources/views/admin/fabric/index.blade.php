@extends('admin.layouts.master')
@section('main-content')
<div class="row my-3" style="margin: 0px 12px;">
    <div class="card container-fluid">
        <h2 class="text-left" style="padding: 30px 0px; text-transform: uppercase; color:#000000;"><b>Fabric</b></h2>
        {{--  error message  --}}
        @if ($errors->any())
            <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        {{--  success msg show  --}}
        @if(session()->has('success'))
        <div id="success" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
       @endif
        <div class="col">
            <form action="{{ route('fabric-store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 d-flex">
                        <label for="date"><b>Date</b></label>&nbsp; &nbsp; 
                        <input  style="width: 200px" type="date" class="form-control" name="date" id="date"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="purchaseCode"><b>Purchase Code</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="purchaseCode"  id="purchaseCode"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="buyerName"><b>Buyer Name</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="buyerName"  id="buyerName"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="buyerPhone"><b>Phone</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="buyerPhone"  id="buyerPhone"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="fabricValue"><b>Fabric Value</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="number" class="form-control fabricValue" name="fabricValue"   id="fabricValue"/>&nbsp; &nbsp;
                        <label><b>Goj</b></label>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="buyeraddress"><b>Address</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="buyeraddress" id="buyeraddress"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="unit_price"><b>Unit Price</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="number" class="form-control" name="unit_price"  id="unit_price"/>&nbsp; &nbsp; 
                        <label><b>BDT</b></label>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="total_amount"><b>Total Amount</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="number" class="form-control" name="total_amount"  id="total_amount" readonly/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="fabric_name"><b>Fabric Name</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="fabric_name"  id="fabric_name"/>
                    </div>
                    <div class="form-group col-md-6">
                        <button style="width: 200px" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('main-script')
<script>
    $(document).ready(function(){
        $("#fabricValue").keyup(function (){
            if($(this).val() != "" && $(this).val() != null && $(this).val() != undefined){
                $("#fabricValue").val(parseFloat($(this).val()));
            }else{
                $("#fabricValue").val("");
            }
            // console.log( $("#fabricValue").val());
            total();
        });

        $("#unit_price").keyup(function (){
            if($(this).val() != "" && $(this).val() != null && $(this).val() != undefined){
                $("#unit_price").val(parseFloat($(this).val()));
            }else{
                $("#unit_price").val("");
            }
            total();
        });
        function total(){
        $("#total_amount").val(parseFloat($("#fabricValue").val() * $("#unit_price").val())); 
        }
        
    });
    
</script>
@endsection