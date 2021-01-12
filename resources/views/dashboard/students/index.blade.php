@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Students List </div>

                
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
                            @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{$student->id}}</th>
                                <td>{{$student->name}}</td>
                                <td>
                                    {{$student->institution->name}}
                                </td>
                                <td>
                                    <a href="{{route('admin.show-report', $student->id)}}"><button class="btn btn-info" type="submit">View Reports</button></td> </a>
                              </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                    
                
            </div>
        </div>
    </div>
</div>
@endsection
