@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li><a href="{{ route('users/index') }}">User's List</a></li>
                        <li><a href="{{ route('trainings/index') }}">Training's List</a></li>
                        <li><a href="{{ route('sessions/index') }}">Session's List (admin view)</a></li>
                        <li><a href="{{ route('rooms/index') }}">Room's List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
