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
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{old('name') ?? $user->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Officer's Email:</label>
                            <input name="email" type="text" class="form-control" id="exampleFormControlInput1" value="{{old('email') ?? $user->email}}">
                        </div>

                        <button class="btn btn-primary" type="submit">Update</button>
                        
                    </form>
                    {{-- <div class="card-header">Edit {{$user->name}}'s Password</div>

                    <form class="m-5" action="{{route('super-admin.update-password', $user)}}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Officer's New Password</label>
                            <input name="password" type="password" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                            <input name="confirmPassword" type="password" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <button class="btn btn-primary" type="submit">Change Password</button>

                    </form> --}}
                
            </div>
        </div>
    </div>
</div>
@endsection
