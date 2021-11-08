@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h1>Pets</h1>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="/pets/create">
                                <img src="https://cdn-icons-png.flaticon.com/512/64/64522.png" width="15" height="15" alt="New">

                                <img src="https://cdn-icons-png.flaticon.com/512/93/93155.png" width="25" height="25" alt="Pet">

                            </a>
                        </div>

                        <div class="col ">
                            <div class="rounded float-right">
                                <a class="btn btn-secondary" href="/me">
                                    <img src="https://cdn-icons-png.flaticon.com/512/860/860774.png" width="25" height="25" alt="Back">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="card-boy">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pets->where('user_id',Auth::user()->id) as $pet )

                            <tr >
                                <td >
                                    {{$pet ->name }}
                                </td>
                                <td>
                                    {{$pet ->type }}
                                </td>
                                <td>
                                    <a href="/pets/{{$pet->id}}/edit">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="/pets/{{$pet->id}}/deletePet">
                                        <img src="https://cdn-icons-png.flaticon.com/512/3096/3096673.png" width="20" height="20" alt="Delete">
                                    </a>

                                </td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div></div>
            </div>
        </div>
    </div>
@endsection
