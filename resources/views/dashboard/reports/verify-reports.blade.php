@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.confirmed')}}"><span class="badge badge-lg badge-pill badge-primary">Varified</span></a>
                    <a href="{{route('admin.confirm')}}"><span class="badge badge-pill badge-danger">Unvarified</span></a>
                </div>
                <div >
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Institution</th>
                            <th scope="col">view</th>
                            <th scope="col">action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($unconfirmed as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->title}}</td>
                                <td>
                                    {{$item->student->institution->name}}
                                </td>
                                <td>
                                    <a href="{{route('admin.show-report', $item->student->id)}}"><button class="btn btn-info" type="submit">View</button></a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('admin.verified', $item->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <select name="confirmation_status" class="custom-select">
                                            <option value="0">Unverified</option>
                                            <option value="1">Verified</option>
                                        </select>
                                        <button class="btn btn-danger">Update</button>
                                    </form>
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
