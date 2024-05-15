@extends('layout.auth')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>{{ env('APP_NAME') }}</b></a>
        </div>

        <div class="card">
            <div class="card-img text-center">
                <img class="small card-img w-50" src="{{ env('APP_LOGO') }}">
            </div>

            <div class="card-body login-card-body">
                @if(session('danger') != null)
                    <p class="login-box-msg text-danger">{{ session('danger') }}</p>
                @elseif (session('success') != null)
                    <p class="login-box-msg text-success">{{ session('success') }}</p>
                @else
                    <p class="login-box-msg">Sign in to start your session</p>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                    <hr>
                    <p class="mb-0"><a href="{{ route('auth.forgot') }}">I forgot my password</a></p>
                    <p class="mb-0"><a href="{{ route('auth.register') }}">Register</a></p>
                    <p class="mb-0"><a href="{{ route('landing.home') }}">Home Page</a></p>
            </div>

        </div>
    </div>
@endsection


