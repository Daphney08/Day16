@extends('layouts.main')
@section('content')
<div class="breakout"></div>
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row custyle">
    <table class="table table-striped custab">
    <thead>
    {{-- <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new Supplier</a> --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        <b>+</b> Create Supplier
      </button>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Contact Person</th>
            <th>Category</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    @foreach ($suppliers as $supply)
            <tr>
                <td>{{$supply->id}}</td>
                <td>{{$supply->name}}</td>
                <td>{{$supply->contact}}</td>
                <td>{{$supply->address}}</td>
                <td>{{$supply->contact_person}}</td>
                <td>{{$supply->category}}</td>
                <td class="text-center">
                    <a class='btn btn-info btn-xs' href="{{ route('suppliers.edit',$supply->id) }}"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                    @csrf
                    <a href="{{ route('suppliers.destroy', $supply->id) }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
               </td>
            </tr>
            @endforeach
    </table>
    </div>
</div>


<!-- create Category Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Supplier</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('suppliers.store') }}" method="POST">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputContact">Contact</label>
                    <input type="number" class="form-control" id="inputContact" placeholder="Contact" name="contact">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCperson">Contact Person</label>
                      <input type="text" class="form-control" name="contact_person" id="inputCperson" placeholder="Contact Person">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCat">Category</label>
                        <select id="inputCat" class="form-control" name="category">
                          <option selected>Choose...</option>
                          <option>Direct</option>
                          <option>In-Direct</option>
                        </select>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>