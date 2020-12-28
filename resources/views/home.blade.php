@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body ml-5 pl-5">
                    @foreach ($institutions as $institution)
                        <div class="card text-white bg-secondary ml-5 mb-3" style="max-width: 18rem;">
                            <div class="card-header">{{$institution->name}}</div>
                            <div class="card-body">
                            <h5 class="card-title">{{$institution->address}}</h5>
                            <p class="card-text">{{$institution->email}}</p>
                            <a href="{{route('admin.schools-students', $institution->id)}}"><button type="submit" class="btn btn-secondary">View Students</button></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
