@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Pets</h1>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/pets/create">Add Pet</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/me">Back</a>
        </div>
    </div>
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
                            <a class="btn btn-danger" href="/pets/{{$pet->id}}/deletePet">Delete</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
