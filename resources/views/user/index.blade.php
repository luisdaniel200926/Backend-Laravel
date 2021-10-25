@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Users</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary">Add User</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table>
                @foreach($users as $user)
                    <tr >
                        <td >
                            {{$user ->name }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
