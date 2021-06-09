@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title', 'Create Delivery')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>Edit Delivery</h4>
                    </div>
                    <div class="col-12">
                         {{-- Delivery Form--}}
                         <form class =" row g-3 " action="{{ URL::route('delivery.update', ['id' => $data->id ]) }}" method="post">
                            @csrf

                            {{-- Delivery Input Field --}}
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Distribution Id</label>
                                <input type="number" id="delivery" class="form-control" name="distribution_id" value="{{ $data->distribution_id }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Transportation_id</label>
                                <input type="number" id="delivery" class="form-control" name="transportation_id" value="{{ $data->transportation_id }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Date Distributed</label>
                                <input type="date" id="delivery" class="form-control" name="date_distributed" value="{{ $data->date_distributed }}" required>
                            </div> 
                            <div class="col-md-12">
                                <label for="delivery" class="form-label">Status</label>
                                <input type="text" id="delivery" class="form-control" name="Status" value="{{ $data->Status }}" required>
                            </div> 
                            {{-- End delivery Input Field --}}
                        
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