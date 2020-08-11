@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card login-card">
                
            <div class="login-logo section-header"><p class="section-title text-center"><b>Sign In</b></p></div>
            <div class="login-box-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                     <div class="form-group has-feedback">
                        <input type="email" placeholder="Email"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                        <span class="glyphicon form-control-feedback glyphicon-envelope"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="form-group has-feedback">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" > 
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div> 
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary pull-right">
                            {{ __('Sign In') }}
                        </button>
                    </div>
                </div>
            </form> 
            
            @if (Route::has('password.request'))
            <a class="btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif<br> <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
