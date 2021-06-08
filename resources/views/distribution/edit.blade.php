@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'Create Distribution')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Distribution</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('distribution.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- distribution Input Field --}}
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Requestor Name</label>
                                <input type="text" id="distribution" class="form-control" name="requestor_name" required value="{{ $data->requestor_name }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Requestor Contact</label>
                                <input type="number" id="distribution" class="form-control" name="requestor_contact" required value="{{ $data->requestor_contact }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Purpose</label>                           
                                <input type="text" id="distribution" class="form-control" name="purpose" required value="{{ $data->purpose }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Asset id</label>
                                <input type="number" id="distribution" class="form-control" name="asset_id" required value="{{ $data->asset_id }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Quantity</label>
                                <input type="number" id="distribution" class="form-control" name="quantity" required value="{{ $data->quantity }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Status</label>
                                <input type="text" id="distribution" class="form-control" name="status" required value="{{ $data->status }}">
                            </div> 
                            
                            
                            
                            {{-- End Assets Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Supplier Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection