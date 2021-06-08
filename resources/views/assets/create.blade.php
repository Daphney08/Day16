@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'Create distribution')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Distribution</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('distribution.create.save') }}" method="post">
                            @csrf

                            {{-- distribution Input Field --}}
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Requestor Name</label>
                                <input type="text" id="distribution" class="form-control" name="requestor_name" value="{{ old('requestor_name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Requestor Contact</label>
                                <input type="number" id="distribution" class="form-control" name="requestor_contact" value="{{ old('requestor_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Purpose</label>
                                <input type="text" id="distribution" class="form-control" name="purpose" value="{{ old('purpose') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Asset id</label>
                                <input type="number" id="distribution" class="form-control" name="asset_id" value="{{ old('asset_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Quantity</label>
                                <input type="number" id="distribution" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                            </div>  
                            <div class="col-md-12">
                                <label for="distribution" class="form-label">Status</label>
                                <select class="form-control" name="status" value="{{ old('status') }}" required>
                                       <option selected>choose....</option>
                                       <option>Proccesing</option>
                                       <option>Declined</option>
                                       <option>Destribution</option>
                                    </select>
                                 </div>
                            </div> 
                            
                            
                            {{-- End distribution Input Field --}}
                        
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