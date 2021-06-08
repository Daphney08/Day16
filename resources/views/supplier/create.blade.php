@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title', 'Create Supplier')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Supplier</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('supplier.create.save') }}" method="post">
                            @csrf

                            {{-- Supplier Input Field --}}
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Name</label>
                                <input type="text" id="supplier" class="form-control" name="name" value="{{ old('name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Contact</label>
                                <input type="text" id="supplier" class="form-control" name="contact" value="{{ old('contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Address</label>
                                <input type="text" id="supplier" class="form-control" name="address" value="{{ old('address') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Contact Person</label>
                                <input type="text" id="supplier" class="form-control" name="contact_person" value="{{ old('contact_person') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="supplier" class="form-label">Category</label>
                                <input type="text" id="supplier" class="form-control" name="category" value="{{ old('category') }}" required>
                            </div> 
                            
                            
                            {{-- End Supplier Input Field --}}
                        
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