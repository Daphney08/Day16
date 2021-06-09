@php $active = 'assets' @endphp
@extends('layout.main')
@section('title', 'assets')
@section('content')
<div class="row align-items-center"> 
    <div class="row p-5">
        <div class="col-10">
            <h1>Assets</h1>
        </div>
        <div class="col-2">
            <a href="/assets/create" class="btn btn-success">Add New</a>
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
                                    <th>Name</th>
                                    <th>Description</th> 
                                    <th>Category</th>
                                    <th>Supplier id</th> 
                                    <th>Storage id</th>
                                    <th>Total Stocks</th> 
                                    <th>Action</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                                <!--$x is the -->
                                @foreach($data as $x)
                                    <tr> 
                                        <td>{{$x->name}}</td> 
                                        <td>{{$x->description}}</td>
                                        <td>{{$x->category}}</td> 
                                        <td>{{$x->supplier_id}}</td>
                                        <td>{{$x->storage_id}}</td> 
                                        <td>{{$x->total_stocks}}</td>
                                      
                                      
                                        <td style="width: 200px;">
                                            <a href="{{ URL::route('assets.edit', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                                            <a href="{{ URL::route('assets.delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>      
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