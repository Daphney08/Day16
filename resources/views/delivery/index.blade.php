@php $active = 'transportation' @endphp
@extends('layout.main')
@section('title', 'transportation')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>Transportation</h1>
        </div>
        <div class="col-2">
            <a href="/transportation/create" class="btn btn-success">Add New</a>
        </div>
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12 mt-5">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="col-12 mt-5">
                            <table class="table">
                                <thead>
                                <tr>                                    
                                    <th>Plate Number</th> 
                                    <th>Driver Name</th>
                                    <th>Driver Contact</th> 
                                    <th>Notes</th>
                                    <th>Action</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->plate_number}}</td> 
                                        <td>{{$x->driver_name}}</td>
                                        <td>{{$x->driver_contact}}</td> 
                                        <td>{{$x->notes}}</td>                                      
                                      
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('transportation.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('transportation.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
                                        </td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div> 
    </div> 
@endsection