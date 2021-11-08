@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
            <div class="row">
                <div class="col">
                    <h1>New Pet</h1>
                </div>
                <div class="col-3">
                <a class="btn btn-secondary" href="/pets">
                    <img src="https://cdn-icons-png.flaticon.com/512/860/860774.png" width="25" height="25" alt="Back">
                </a>
                </div>

            </div>
                </div>
                <div class="card-body">
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
                        <form action="/pets" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the pet">
                                <label for="type">Type:</label>
                                <select class="form-select" style="width:150px;" id="type" name="type">
                                    <option>Cat</option>
                                    <option>Dog</option>
                                    <option>Hamster</option>
                                </select>
                            </div>
                            <input type="hidden" name="userid" id="userid" value={{ Auth::user()->id }}>
                            <h1> </h1>
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </form>
                    </table>
                </div>
            </div>
            </div>
            </div>
            </div>
@endsection
