@extends('layouts.base')

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
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Owner</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pets as $pet)

                    <tr >
                        <td >
                            {{$pet ->name }}
                        </td>
                        <td>
                            {{$pet ->type }}
                        </td>
                        <td>
                            Default
                        </td>
                        <td>
                            <a href="/pets/{{$pet->id}}/edit">Edit</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
