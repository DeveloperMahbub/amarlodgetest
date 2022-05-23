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
                <a href="#home" class="nav-link active" data-toggle="tab">New Product</a>
            </li>
            <li class="nav-item">
                <a href="#manu1" class="nav-link" data-toggle="tab">Alternative Product</a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <div class="col">
                <form action="{{ route('qcProduct-detail') }}" method="POST">
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
                        <div class="form-group col-md-12 text-center">
                            <button style="width: 200px" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="manu1">
            <div class="col">
                <form action="{{ route('qcaltProduct-detail') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6 d-flex">
                            <label for="date"><b>Date</b></label>&nbsp; &nbsp; 
                            <input  style="width: 200px" type="date" class="form-control" name="altdate" id="date"/>
                        </div>
                        <div class="form-group col-md-6 d-flex">
                            <label for="factoryCode"><b>Factory Code</b></label>&nbsp; &nbsp; 
                            <input style="width: 200px" type="text" class="form-control" name="altfactoryCode" value=""  id="factoryCode"/>
                        </div>
                        <div class="form-group col-md-12 text-center">
                            <button style="width: 200px" type="submit" class="btn btn-primary">Submit</button>
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
       
    });
</script>
@endsection