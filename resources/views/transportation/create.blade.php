@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title', 'Create Transportation')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Transportation</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('transportation.create.save') }}" method="post">
                            @csrf

                            {{-- transportation Input Field --}}
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Plate Number</label>
                                <input type="text"  class="form-control" name="plate_number" value="{{ old('plate_number') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Driver Naame</label>
                                <input type="text" class="form-control" name="driver_name" value="{{ old('driver_name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Driver Contact</label>
                                <input type="text"  class="form-control" name="driver_contact" value="{{ old('driver_contact') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Notes</label>
                                <input type="text"  class="form-control" name="notes" value="{{ old('notes') }}" required>
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