@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a New Report for {{$student->name}}</div>

                    <form class="m-5" method="POST" action="{{route('admin.reports.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Report Title</label>
                            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" >
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">{{$student->name}}'s Offence:</label>
                            <textarea rows="5" class="form-control" id="exampleFormControlInput1" name="offence" ></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">For {{$student->name}}</label>
                            <input hidden name="student_id" value="{{$student->id}}" type="text" class="form-control" id="exampleFormControlInput1" >
                        </div>

                        <button class="btn btn-primary" type="submit">Create Report</button>
                        
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
