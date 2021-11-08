@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">

        @if(Auth::user()->type == 'admin')
            <div class="card">
                <div class="card-header">
        <div class="row">
            <div class="col">
                <h1>Users</h1>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="/users/create">
                    <img src="https://cdn-icons-png.flaticon.com/512/64/64522.png" width="15" height="15" alt="New">

                    <img src="https://cdn-icons-png.flaticon.com/512/64/64572.png" width="25" height="25" alt="User">
                </a>
            </div>
            <div class="col-3">
                <a class="btn btn-secondary" href="/me">
                    <img src="https://cdn-icons-png.flaticon.com/512/860/860774.png" width="25" height="25" alt="Back">
                </a>
            </div>

        </div>
                </div>
        <div class="card-body">
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
                                <a class="btn btn-danger" href="/users/{{$user->id}}/deleteUser">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3096/3096673.png" width="20" height="20" alt="Delete">
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
            </div>
    </div>
    </div>
    @endif
@endsection
