@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>My Data</h1>
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
                    <tr >
                        <td >
                            {{Auth::user()->name }}
                        </td>
                        <td >
                            {{ Auth::user()->lastname }}
                        </td>
                        <td>
                            {{Auth::user()->type }}
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/pets">My pets</a>
                        </td>
                        @if(Auth::user()->type == 'admin')
                            <td>
                                <a class="btn btn-secondary" href="/users">All users</a>
                            </td>
                            @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
