@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$user->name}}'s Details</div>

                    <form class="m-5" method="POST" action="{{route('super-admin.users.update', $user)}}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Officer's Name:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$user->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Officer's Email:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$user->email}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Officer's New Password:</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" value="{{$user->email}}">
                        </div>

                        <button class="btn btn-primary" type="submit">Update</button>
                        
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
