@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Edit User {{$user->name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/users">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class = "alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>   {{$error}}</li>
                        @endforeach
                    </ul>
                    </divclass>
                @endif
            <table>
                <form action="/users/{{$user->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder={{$user->name}}>
                        <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder={{$user->lastname}}>
                        <label for="type">Type:</label>
                        <select class="form-select" style="width:150px;" id="type" name="type">
                            <option>user</option>
                            <option>admin</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </table>
        </div>
    </div>
@endsection
