@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Student</div>

                    <form class="m-5" method="POST" action="{{route('admin.students.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" >
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student's Email:</label>
                            <input name="email" type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student's Contact</label>
                            <input name="contact" type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Student's level</label>
                            <input name="level" type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{$institution->name}}</label>
                            <input hidden value="{{$institution->id}}" name="institution_id" type="text" class="form-control" id="exampleFormControlInput1">
                        </div>

                        



                        <button class="btn btn-primary" type="submit">Create Student</button>
                        
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
