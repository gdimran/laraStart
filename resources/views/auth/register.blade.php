@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-4">
            <div class="card register-card">
                <div class="register-logo section-header"><p class="section-title text-center"><b>Sign Up</b></p></div>
                <div class="register-box-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group has-feedback">
                            <input type="text" id="name" placeholder="Full Name" name="name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control @error('name') is-invalid @enderror">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 
                        <div class="form-group has-feedback">
                            <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror"> 
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 
                        <div class="form-group has-feedback">
                            <input id="password" type="password"  name="password" required autocomplete="new-password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror"> 
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> 
                        <div class="form-group has-feedback">
                            <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"   placeholder="Retype password" class="form-control"> 
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div> 
                        <div class="form-group has-feedback">
                          
                            <div class="submission-content"><button type="submit" class="btn btn-primary  btn-flat pull-left">Register</button>
                                <span class="login-link">Or&nbsp; | </span><a href="{{ route('login') }}" class="text-center">&nbsp; I already have a membership</a>
                            </div>
                        </div>
                    </form> 
                   
                </div>
               

                
            </div>
        </div>
    </div>
</div>
@endsection
