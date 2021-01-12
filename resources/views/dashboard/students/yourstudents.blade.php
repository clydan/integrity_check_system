@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$institution->name}}'s Student List <a href="{{route('admin.students.create')}}"><button class="btn btn-primary">Create new Student</button></a>
                    <a href="{{route('admin.schools.edit', $institution->id)}}"><button class="btn btn-warning">Edit My School</button></a>
                </div>

                
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Institution</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($thisUsersStudents as $student)
                            <tr>
                                <th scope="row">{{$student->id}}</th>
                                <td>{{$student->name}}</td>
                                <td>
                                    {{$student->institution->name}}
                                </td>
                                <td>
                                    <div class="d-inline p-2 ">
                                        <a href="{{route('admin.show-report', $student->id)}}"><button class="btn btn-info" type="submit">View Reports</button></a> <a href="{{route('admin.yourstudent-create-report', $student->id)}}"><button class="btn btn-danger ml-2 mt-2" type="submit">Add Report</button></a>
                                    </div>
                                    <div class="d-inline p-2 ">
                                        <a href="{{route('download-student-reports', $student->id)}}">
                                            <button class="btn btn-success" type="button">
                                                Get PDF <span class="badge">{{$student->reports->count()}}</span>
                                              </button>
                                        </a>
                                    </div>
                                </td> 
                              </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                    
                
            </div>
        </div>
    </div>
</div>
@endsection
