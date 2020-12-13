@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New University</div>

                    <form class="m-5" method="POST" action="{{route('admin.schools.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">School Name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" >
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">School's Email:</label>
                            <input name="email" type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">School's Address</label>
                            <input name="address" type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <button class="btn btn-primary" type="submit">Create School</button>
                        
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
