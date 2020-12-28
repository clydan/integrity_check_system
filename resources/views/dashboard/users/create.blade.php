@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>
                <div >
                    <form   method="POST" action="{{route('super-admin.users.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input name="name" type="text" class="form-control" id="name" >
                        </div>
        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address:</label>
                            <input name="email" type="email" class="form-control" id="email" >
                        </div>
        
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input name="password" type="password" class="form-control" id="password" >
                        </div>
    
                        <label for="exampleDataList" class="form-label">Select Institution</label>
                        <input name="institution_id" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Select School Here">
                            <datalist id="datalistOptions">
                                @foreach ($institutions as $institution)
    
                                <option value="{{$institution->id}}">{{$institution->name}}</option>
                                    
                                @endforeach
                            </datalist>
        
                        <button class="btn btn-primary">Create User</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
