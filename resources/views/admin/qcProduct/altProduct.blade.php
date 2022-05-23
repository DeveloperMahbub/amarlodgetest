@extends('admin.layouts.master')
@section('main-content')
<div class="row my-3" style="margin: 0px 12px;">
    <div class="card container-fluid">
        <h2 class="text-left" style="padding: 30px 0px; text-transform: uppercase; color:#000000;"><b>Q.C Product Received</b></h2>
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
    <div class="m-4">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
                <a href="#home" class="nav-link " data-toggle="tab">New Product</a>
            </li>
            <li class="nav-item">
                <a href="#menu1" class="nav-link active" data-toggle="tab">Alternative Product</a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade" id="home">
            
        </div>
        <div class="tab-pane fade show active" id="menu1">
            <div class="col">
                <form action="{{ route('qcaltProduct-store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6 d-flex">
                            <label for="received_date"><b>Received Date</b></label>&nbsp; &nbsp; 
                            <input  style="width: 200px" type="text" class="form-control" value="{{ date('d-M-Y') }}" name="received_date" id="received_date" readonly/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="factoryCode"><b>Factory Code</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="text" class="form-control" name="factoryCode" value="{{ @$details->factoryCode }}" readonly/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="buyerName"><b>Date</b></label>&nbsp; &nbsp; 
                            <b>{{ @$details->factoryDate }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="buyerName"><b>Phone</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="hidden" class="form-control" name="factoryphone" value="{{ @$details->factoryPhone }}"/>
                            <b>{{ @$details->factoryPhone }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="buyerName"><b>Factory Name</b></label>&nbsp; &nbsp; 
                            <b>{{ @$details->factoryName }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="buyerPhone"><b>Address</b></label>&nbsp; &nbsp; 
                            <b>{{ @$details->factoryaddress }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="fabricValue"><b>Fabric Value</b></label>&nbsp; &nbsp; 
                            <b>{{ @$details->factoryValue }}</b>&nbsp; &nbsp;
                            <label><b>Goj</b></label>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="buyeraddress"><b>Received Date</b></label>&nbsp; &nbsp; 
                            <b>{{ @date('d M Y',strtotime($details->receivedDate)) }}</b>
                        </div>
                        @if (@$details->designApproved == 1)
                        <div class="form-group col-md-12 d-flex">
                            <label for="unit_price"><b>Design Approved</b></label>&nbsp; &nbsp;
                        </div>
                        @else
                        <div class="form-group col-md-12 d-flex">
                            <label for="unit_price"><b>Design Not Approved</b></label>&nbsp; &nbsp;
                        </div>
                        @endif
                        
                        <div class="form-group col-md-6 d-flex">
                            <label for="total_pieces"><b>Total Pieces</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="total_pieces"  id="total_pieces"/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="reject_pieces"><b>Reject Pieces</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="reject_pieces"  id="reject_pieces"/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="costPer_pieces"><b>Cost Per Pieces</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="costPer_pieces"  id="costPer_pieces" />
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="total_cost"><b>Total Cost</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="total_cost"  id="total_cost" readonly/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="alternative_product"><b>Alternative Product</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="alternative_product"  id="alternative_product"/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="altReceive_date"><b>Alternative Received Date</b></label>&nbsp; &nbsp; 
                            <b>{{ @$altrd->altReceive_date }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="alter_received"><b>Alter Received</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="alter_received"  id="alter_received"/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="alter_received"><b>Pieces</b></label>&nbsp; &nbsp;
                        </div>

                        <div class="form-group col-md-6 d-flex">
                            <label for="total_piece"><b>Total Pieces</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="total_piece"  id="total_piece" readonly/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="alter_received"><b>Pieces</b></label>&nbsp; &nbsp;
                        </div>

                        <div class="form-group col-md-6 d-flex">
                            <label for="total_amount"><b>Total Amount</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="number" class="form-control" name="total_amount"  id="total_amount" readonly/> &nbsp;<b>/-</b>
                        </div>

                        <div class="form-group col-md-12 text-center">
                            <button style="width: 200px" type="submit" class="btn btn-primary">Close Order</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('main-script')
<script>
    $(document).ready(function(){
        $("#total_pieces").keyup(function (){
            if($(this).val() != "" && $(this).val() != null && $(this).val() != undefined){
                $("#total_pieces").val(parseFloat($(this).val()));
            }else{
                $("#total_pieces").val("");
            }
            // console.log( $("#fabricValue").val());
            total();
            total_pieces();
        });

        $("#reject_pieces").keyup(function (){
            if($(this).val() != "" && $(this).val() != null && $(this).val() != undefined){
                $("#reject_pieces").val(parseFloat($(this).val()));
            }else{
                $("#reject_pieces").val("");
            }
            total();
            total_pieces();
        });
        $("#costPer_pieces").keyup(function (){
            if($(this).val() != "" && $(this).val() != null && $(this).val() != undefined){
                $("#costPer_pieces").val(parseFloat($(this).val()));
            }else{
                $("#costPer_pieces").val("");
            }
            total();
            total_amount();
        });
        $("#alter_received").keyup(function (){
            if($(this).val() != "" && $(this).val() != null && $(this).val() != undefined){
                $("#alter_received").val(parseFloat($(this).val()));
            }else{
                $("#alter_received").val("");
            }
            total();
            total_pieces();
        });
        function total(){
        $("#total_cost").val(parseFloat(($("#total_pieces").val() - $("#reject_pieces").val()) * $("#costPer_pieces").val())); 
        }



        function total_pieces(){
        $("#total_piece").val(parseFloat(($("#total_pieces").val() - $("#reject_pieces").val())) + parseFloat($("#alter_received").val())); 
        total_amount();
        }

        function total_amount(){
        $("#total_amount").val(parseFloat(($("#costPer_pieces").val() * $("#total_piece").val()))); 
        }
       
    });
</script>
@endsection