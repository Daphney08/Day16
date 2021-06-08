@php $active = 'distribution' @endphp
@extends('layout.main')
@section('title', 'distribution')
@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-10">
            <h1>Distribution</h1>
        </div>
        <div class="col-2">
            <a href="/distribution/create" class="btn btn-success">Add New</a>
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
                                    <th>Requestor Name</th>
                                    <th>Requestor Contact</th> 
                                    <th>Purpose</th>
                                    <th>Asset id</th> 
                                    <th>Quantity</th>
                                    <th>Status</th> 
                                    <th>Action</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->requestor_name}}</td> 
                                        <td>{{$x->requestor_contact}}</td>
                                        <td>{{$x->purpose}}</td> 
                                        <td>{{$x->asset_id}}</td>
                                        <td>{{$x->quantity}}</td> 
                                        <td>{{$x->status}}</td>
                                      
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('distribution.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('distribution.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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