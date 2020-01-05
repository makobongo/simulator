@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layouts.navbar') 
@section('content')
<div class="container">
        <div class="container mt-3">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-sm-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5>Register</h5>
                                    <form method="POST" action="{{ route('register') }}">
                                     @csrf
                                    <div class="row offset-md-3">
                                        <div class="col-sm-8">
                                            <input id="name" type="text" placeholder="Full name" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row offset-md-3">
                                        <div class="col-sm-8">
                                            <input id="phone"  type="text" placeholder="Phone No." class="form-control form-control-sm @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row offset-md-3">
                                        <div class="col-sm-8">
                                            <input id="email" type="text" placeholder="Email address" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                            <input id="password" type="password" placeholder="Password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
                                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <br>
                                    <div class="row offset-md-3">
                                        <div class="col-sm-8">
                                            <button type="submit" class="btn btn-success btn-block btn-sm">Register &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                                        </div>
                                    </div>
                                    <br>
                                <a href="{{ route('login')}}">Already have an account?</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
