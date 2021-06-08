@php $active = 'storage' @endphp
@extends('layout.main')
@section('title', 'Create Storage')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Create Storage</h4>
                    </div>
                    <div class="col-12">
                         {{-- Supplier Form--}}
                         <form class =" row g-3 " action="{{ URL::route('storage.create.save') }}" method="post">
                            @csrf

                            {{-- Supplier Input Field --}}
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Name</label>
                                <input type="text" id="storage" class="form-control" name="name" value="{{ old('name') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Building</label>
                                <input type="text" id="storage" class="form-control" name="building" value="{{ old('building') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Floor</label>
                                <input type="text" id="storage" class="form-control" name="floor" value="{{ old('floor') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Room</label>
                                <input type="text" id="storage" class="form-control" name="room" value="{{ old('room') }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="storage" class="form-label">Cabinet</label>
                                <input type="text" id="storage" class="form-control" name="cabinet" value="{{ old('cabinet') }}" required>
                            </div> 
                            
                            
                            {{-- End Storage Input Field --}}
                        
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