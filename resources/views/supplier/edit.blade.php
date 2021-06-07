@php $active = 'supplier' @endphp
@extends('layout.main')
@section('title', 'Create Supplier')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Supplier</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('supplier.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- Supplier Input Field --}}
                            <div class="col-md-12">
                                <label for="department" class="form-label">Name</label>
                                <input type="text" id="supplier" class="form-control" name="name" required value="{{ $data->name }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="department" class="form-label">Building</label>
                                <input type="text" id="supplier" class="form-control" name="contact" required value="{{ $data->contact }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="department" class="form-label">Floor</label>
                                <input type="text" id="supplier" class="form-control" name="address" required value="{{ $data->address }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="department" class="form-label">Room</label>
                                <input type="number" id="supplier" class="form-control" name="contact_person" required value="{{ $data->contact_person }}">
                            </div> 
                            <div class="col-md-12">
                                <label for="department" class="form-label">Cabinet</label>
                                <input type="text" id="supplier" class="form-control" name="category" required value="{{ $data->category }}">
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