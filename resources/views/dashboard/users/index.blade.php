@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users Management <a href="{{route('super-admin.users.create')}}"><button class="btn btn-primary">Create User</button></a></div>

                
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if ($user->id != 1)

                                    <div class="d-inline">
                                        <form class="d-inline" method="POST" action="{{route('super-admin.users.destroy', $user)}}">@csrf @method('DELETE')<button class="btn btn-danger" type="submit">Delete</button></form>
                                        <a class="d-inline" href="{{route('super-admin.users.edit', $user->id)}}"><button class="btn btn-warning" type="submit">Patch</button></td> </a>
                                    </div>
                                        
                                    @else

                                    <div class="d-inline">
                                        <form class="d-inline" method="POST" action="{{route('super-admin.users.destroy', $user)}}">@csrf @method('DELETE')<button disabled class="btn btn-danger" type="submit">Delete</button></form>
                                        <a class="d-inline" href="{{route('super-admin.users.edit', $user->id)}}"><button class="btn btn-warning" type="submit">Patch</button></td> </a>
                                    </div>
                                        
                                    @endif
                              </tr>
                            @endforeach
                          
                         
                        </tbody>
                      </table>
                    
                
            </div>
        </div>
    </div>
</div>
@endsection
