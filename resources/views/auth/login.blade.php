@extends('layouts.app')
<<<<<<< HEAD
<link rel="stylesheet" href="../css/Form.css">
@section('content')

<div class="ImgBack">
    <img>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="UserStatus">
            <h1 class="FormHead Activate ">Login</h1>
            <h1 class="FormHead  ">Sign Up</h1>
        </div>
        <div class="Form">
            <form method="POST" >
                <div class="form-group row">
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="UserName">
                </div>
                </div>
                    <div class="form-group row">
                    <div class="col-sm-10">
                     <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="Pass">
                </div>
            </form>
        </div>
</div>
=======

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
>>>>>>> 84e22bb6b08e9e5d81ff9cb4462fd2a79a6b0e2a
    </div>
</div>
@endsection
