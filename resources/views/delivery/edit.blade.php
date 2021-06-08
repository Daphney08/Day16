@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title', 'Create Transportation')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Transportation</h4>
                    </div>
                    <div class="col-12">
                         {{-- Transportation Form--}}
                         <form class =" row g-3 " action="{{ URL::route('transportation.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- Transportation Input Field --}}
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Plate Number</label>
                                <input type="text" id="assets" class="form-control" name="plate_number" value="{{ $data->plate_number }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Driver Naame</label>
                                <input type="text" id="assets" class="form-control" name="driver_name" value="{{ $data->driver_name }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Driver Contact</label>
                                <input type="text" id="assets" class="form-control" name="driver_contact" value="{{ $data->driver_contact }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="transportation" class="form-label">Notes</label>
                                <input type="text" id="assets" class="form-control" name="notes" value="{{ $data->notes }}" required>
                            </div> 
                            {{-- End Transportation Input Field --}}
                        
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