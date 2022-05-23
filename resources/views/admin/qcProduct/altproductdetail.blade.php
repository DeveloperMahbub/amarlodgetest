@extends('admin.layouts.master')
@section('main-content')
<div class="row my-3" style="margin: 0px 12px;">
    <div class="card container-fluid">
        <h2 class="text-left" style="padding: 30px 0px; text-transform: uppercase; color:#000000;"><b>Q.C New Product Details</b>&nbsp; &nbsp;  Alternative Product</h2>
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

       <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <div class="col">
                    <div class="form-row">
                        <div class="form-group col-md-6 d-flex">
                            <label for="received_date"><b>Received Date</b></label>&nbsp; &nbsp; 
                            <b>{{ @$allDetails->received_date }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="factoryCode"><b>Factory Code</b></label>&nbsp; &nbsp; 
                            <b>{{ @$details->factoryCode }}</b>
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
                            <b>{{ @$allDetails->total_pieces }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="reject_pieces"><b>Reject Pieces</b></label>&nbsp; &nbsp; 
                            <b>{{ @$allDetails->reject_pieces }}</b>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="costPer_pieces"><b>Cost Per Pieces</b></label>&nbsp; &nbsp;
                            <b>{{ @$allDetails->costPer_pieces }}</b> 
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="total_cost"><b>Total Cost</b></label>&nbsp; &nbsp; 
                            <b>{{ @$allDetails->total_cost }}</b> 
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="alternative_product"><b>Alternative Product</b></label>&nbsp; &nbsp; 
                            <b>{{ @$allDetails->alternative_product }}</b> 
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="altReceive_date"><b>Alternative Received Date</b></label>&nbsp; &nbsp; 
                            <b>{{ @$altrd->altReceive_date }}</b>
                        </div>
                        <div class="form-group col-md-12 d-flex">
                            <label for="alter_received"><b>Alter Received</b></label>&nbsp; &nbsp;
                            <b>{{ @$allDetails->alter_received }}</b>  &nbsp; &nbsp;&nbsp; &nbsp;
                            <label for="alter_received"><b>Pieces</b></label>&nbsp; &nbsp;
                        </div>

                        <div class="form-group col-md-12 d-flex">
                            <label for="total_piece"><b>Total Pieces</b></label>&nbsp; &nbsp; 
                            <b>{{ @$allDetails->total_piece }}</b>  &nbsp; &nbsp;&nbsp; &nbsp;
                            <label for="alter_received"><b>Pieces</b></label>&nbsp; &nbsp;
                        </div>

                        <div class="form-group col-md-6 d-flex">
                            <label for="total_amount"><b>Total Amount</b></label>&nbsp; &nbsp; 
                            <b>{{ @$allDetails->total_amount }}</b>  
                        </div>
                    </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile">
            
        </div>
    </div>
    </div>
</div>
@endsection

@section('main-script')
<script>
    $(document).ready(function(){
       
    });
</script>
@endsection