@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Users</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/users/create">Add User</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr >
                        <td >
                            {{$user ->name }}
                        </td>
                        <td >
                            {{$user ->lastname }}
                        </td>
                        <td>
                            {{$user ->type }}
                        </td>
                        <td>
                            <a href="/users/{{$user->id}}/edit">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="/users/{{$user->id}}/deleteUser">Delete</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
