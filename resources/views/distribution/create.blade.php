@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'Create Assets')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Assets</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('assets.create.save') }}" method="post">
                            @csrf

                            {{-- assets Input Field --}}
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Name</label>
                                <input type="text" id="assets" class="form-control" name="name" value="{{ old('name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Description</label>
                                <input type="text" id="assets" class="form-control" name="description" value="{{ old('description') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Category</label>
                                <input type="text" id="assets" class="form-control" name="category" value="{{ old('category') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Supplier id</label>
                                <input type="number" id="assets" class="form-control" name="supplier_id" value="{{ old('supplier_id') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Storage id</label>
                                <input type="number" id="assets" class="form-control" name="storage_id" value="{{ old('storage_id') }}" required>
                            </div> 
                            </div> 
                            <div class="col-md-12">
                                <label for="assets" class="form-label">Total Stocks</label>
                                <input type="number" id="assets" class="form-control" name="total_stocks" value="{{ old('total_stocks') }}" required>
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