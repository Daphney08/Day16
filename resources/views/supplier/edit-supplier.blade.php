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
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputContact">Contact</label>
                <input type="number" class="form-control" id="inputContact" placeholder="Contact" name="contact" >
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" >
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
</div>