@extends('layouts.app')
@section('title','Add Jobs')
@section('content')
<div class="content">
<form action="{{route('jobs.store')}}" method="POST">
    @csrf
    <h4 class="p-4">Add Location</h4>
  <div class="row">
    <div class="form-group col-12">
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Job Title">
    </div>
    <div class="form-group col-12">
      <input type="text" name="position" class="form-control" id="exampleFormControlInput1" placeholder="Position">
    </div>
    <div class="form-group col-6">
      <input type="number" name="salary" class="form-control" id="exampleFormControlInput1" placeholder="Salary">
    </div>
    <div class="form-group col-6">
      <input type="number" name="vacancy" class="form-control" id="exampleFormControlInput1" placeholder="vacancy">
    </div>
    <div class="form-group col-4">
      {{-- <label for="exampleFormControlSelect12">Select Category</label> --}}
      <select class="form-control">
        <option>Select Category</option>
        <option>Part Time</option>
      </select>
    </div>
    <div class="form-group col-4">
      <select class="form-control">
        <option>Select Location</option>
        <option>Dhaka</option>
      </select>
    </div>
    <div class="form-group col-4">
      <select class="form-control">
        <option>Select Industry</option>
        <option>Hospitality</option>
      </select>
    </div>
    <div class="form-group col-6">
      <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">Available</label>
      </div>
      <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">Not Available</label>
      </div>
    </div>
    
    <div class="form-group col-12">
        <textarea name="description"  class="form-control" placeholder="Job Description"></textarea>
    </div>
    <div id="editor"></div>
    <div class="form-footer mx-auto">
      <button type="submit" class="btn btn-primary btn-pill">Add</button>
    </div>
  </div>
</form>
</div>
@endsection