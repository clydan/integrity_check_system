@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$institution->name}}'s Details</div>

                <form method="POST" action="{{route('admin.schools.update', $institution->id)}}" class="m-5">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{old('name') ?? $institution->name}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Address</label>
                        <input name="address" type="text" class="form-control" id="exampleFormControlInput1" value="{{old('address') ?? $institution->address}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" value="{{old('email') ?? $institution->email}}">
                      </div>

                      <button class="btn btn-primary btn-lg">Update</button>
                  </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
