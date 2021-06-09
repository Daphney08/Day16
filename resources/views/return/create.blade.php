@php $active = 'return' @endphp
@extends('layout.main')
@section('title', 'Create Return')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Return</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('return.create.save') }}" method="post">
                            @csrf

                            {{-- Return Input Field --}}
                            <div class="col-md-12">
                                <label for="return" class="form-label">Asset id</label>
                                <input type="number"  id="return" name="asset_id" value="{{ old('asset_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned By</label>
                                <input type="text" id="return" name="returned_by" value="{{ old('returned_by') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned by Contact</label>
                                <input type="number"  id="return" name="returned_by_contact" value="{{ old('returned_by_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Quantity</label>
                                <input type="text"  id="return" name="quantity" value="{{ old('quantity') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Reason</label>
                                <input type="text"  id="return" name="reason" value="{{ old('reason') }}" required>
                            </div> 
                           
                            
                            
                            {{-- End Return Input Field --}}
                        
                            {{-- Submit and Cancel Button --}}
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div> {{-- End Submit and Cancel Button --}}
                            
                        </form> {{-- End Return Form--}}
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection