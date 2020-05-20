@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users List : </div>

                <div class="card-body">

                <table>
                    <tr>
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Rôles</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td><a href="{{ route('user/show', $user->id) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }} </td>
                        <td>{{ $user->role }} </td>
                    </tr>
                    @endforeach
                    </table>

                    <button><a href="{{ route('users/create') }}">Create a user</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
