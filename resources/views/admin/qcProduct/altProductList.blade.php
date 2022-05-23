@extends('admin.layouts.master')
@section('main-content')
<div class="row my-3" style="margin: 0px 12px;">
    <div class="card container-fluid">
        <h2 class="text-left" style="padding: 30px 0px; text-transform: uppercase; color:#000000;"><b>Q.C Alter Product List</b></h2>
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

       <div class="table-responsive p-3">
                     
        <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
                <tr>
                    <th>SL</th>
                    <th>Received Date</th>
                    <th>Factory Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allData as $data)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $data -> received_date }}</td>
                        <td>{{ $data -> factoryCode }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ route('qcaltProduct-details', $data -> factoryCode) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('main-script')
<script>
    $(document).ready(function(){
       
    });
</script>
@endsection