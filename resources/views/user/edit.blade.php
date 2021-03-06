@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h1>Edit User {{$user->name}}</h1>
                        </div>
                        <div class="col-3">
                            <a class="btn btn-secondary" href="/users">
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
                                <form action="/users/{{$user->id}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete={{$user->name}} autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>

                                        <label for="lastname">Last Name:</label>
                                        <div class="col-md-6">
                                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                            @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>


                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label for="type">Type:</label>
                                        <select class="form-select" style="width:150px;" id="type" name="type">
                                            <option>user</option>
                                            <option>admin</option>
                                        </select>


                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>



                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
