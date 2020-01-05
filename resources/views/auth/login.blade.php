@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layouts.navbar') 
@section('content')
<div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-10">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5>Login</h5>
                            <form method="POST" action="{{ route('login') }}">
                                    @csrf
                            <div class="row offset-md-3">
                                <div class="col-sm-8">
                                    <input id="email" type="text" name="email" placeholder="Please enter the email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row offset-md-3">
                                <div class="col-sm-8">
                                    <input required  type="password" name="password" placeholder="Password " class="form-control form-control-sm  @error('password') is-invalid @enderror" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row offset-md-3">
                                    <div class="col-sm-8">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        &nbsp;Rememeber
                                    </div>
                                </div>
                                <br>
                            <div class="row offset-md-3">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-success btn-block btn-sm">Login &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>
                            </div>
                            <br>
                        <a href="{{ route('register')}}">Don't have an account?</a>
                            <router-link to='/users'>admin</router-link>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
