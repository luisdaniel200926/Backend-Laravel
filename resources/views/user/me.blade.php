@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h1>My Data</h1>
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
                                        <a class="btn btn-secondary" href="/pets">
                                            <img src="https://cdn-icons-png.flaticon.com/512/93/93155.png" width="25" height="25" alt="My Pets">
                                        </a>

                                    </td>
                                    @if(Auth::user()->type == 'admin')
                                        <td>

                                            <a class="btn btn-secondary" href="/users">
                                                <img src="https://cdn-icons-png.flaticon.com/512/1570/1570094.png" width="25" height="25" alt="All Users">
                                            </a>
                                        </td>
                                        @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
