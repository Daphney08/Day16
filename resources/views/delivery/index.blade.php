@php $active = 'delivery' @endphp
@extends('layout.main')
@section('title', 'Delivery')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>Delivery</h1>
        </div>
        <div class="col-2">
            <a href="/delivery/create" class="btn btn-success">Add New</a>
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
                                    <th>Distribution Id</th> 
                                    <th>Transportation Id</th>
                                    <th>Date Distributed</th> 
                                    <th>Status</th>
                                  
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->distribution_id}}</td> 
                                        <td>{{$x->transportation_id}}</td>
                                        <td>{{$x->date_distributed}}</td> 
                                        <td>{{$x->Status}}</td>                                      
                                      
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('delivery.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('delivery.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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