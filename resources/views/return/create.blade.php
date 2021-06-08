@php $active = 'returns' @endphp
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
                                <input type="integer"  class="form-control" name="asset_id" value="{{ old('asset_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned By</label>
                                <input type="text" class="form-control" name="returned_by" value="{{ old('returned_by') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Returned by Contact</label>
                                <input type="integer"  class="form-control" name="returned_by_contact" value="{{ old('returned_by_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Quantity</label>
                                <input type="text"  class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="return" class="form-label">Reason</label>
                                <input type="text"  class="form-control" name="reason" value="{{ old('reason') }}" required>
                            </div> 
                           
                            
                            
                            {{-- End assets Input Field --}}
                        
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