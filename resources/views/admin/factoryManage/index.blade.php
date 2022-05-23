@extends('admin.layouts.master')
@section('main-content')
<div class="row my-3" style="margin: 0px 12px;">
    <div class="card container-fluid">
        <h2 class="text-left" style="padding: 30px 0px; text-transform: uppercase; color:#000000;"><b>Factory Management</b></h2>
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
            <form action="{{ route('factory-store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 d-flex">
                        <label for="date"><b>Date</b></label>&nbsp; &nbsp; 
                        <input  style="width: 200px" type="date" class="form-control" name="date" id="date"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="factoryCode"><b>Factory Code</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="factoryCode" value=""  id="factoryCode"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="factoryName"><b>Factory Name</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="factoryName" value=""  id="factoryName"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="factoryPhone"><b>Phone</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="factoryPhone" value=""  id="factoryPhone"/>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="factoryValue"><b>Factory Value</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="number" class="form-control" name="factoryValue" value=""  id="factoryValue"/>&nbsp; &nbsp;
                        <label><b>Goj</b></label>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="factoryaddress"><b>Address</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="text" class="form-control" name="factoryaddress" value=""  id="factoryaddress"/>
                    </div>
                    <div class="form-group col-md-12 d-flex">
                        <label for="unit_price"><b>Design Approved</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="checkbox" name="designApproved" class="form-control" value="1"/>&nbsp; &nbsp;
                        <label for="unit_price"><b>Yes</b></label>
                        <input style="width: 200px" type="checkbox"  name="designNotApproved" class="form-control"  value="0"/>&nbsp; &nbsp; 
                        <label for="unit_price"><b>No</b></label>
                    </div>
                    <div class="form-group col-md-6 d-flex">
                        <label for="received_date"><b>Received Date</b></label>&nbsp; &nbsp; 
                        <input style="width: 200px" type="date" class="form-control" name="receivedDate" value=""  id="received_date"/>
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
       
    });
</script>
@endsection