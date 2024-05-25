@extends('layouts.appp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="background-color: white; border-radius: 10px; margin-top:30%">
                    <i class="bi bi-hexagon-fill"
                        style="font-size: 3rem; text-align:center; color: blue; margin-top:20px"></i>
                    <h4 class="text-center mt-1" style="font-weight: bold">Employee Data Master</h4>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <hr style="width:80%; margin-left:10%">
                            <div class="mb-3">
                                {{-- <label for="email" class="form-label">{{ __('Email Address') }}</label> --}}
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Enter your email" style="width: 80%; margin-left:10%">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                {{-- <label for="password" class="form-label">{{ __('Password') }}</label> --}}
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Enter your password"
                                    style="width: 80%; margin-left:10%">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr style="width:80%; margin-left:10%">


                            {{-- <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div> --}}

                            <div class="d-grid gap-2" style="margin-bottom: 40px">
                                <button type="submit" class="btn btn-primary" style="width: 80%; margin-left: 10%">
                                    <i class="bi bi-box-arrow-in-right mr-2"></i>{{ __('Login') }}
                                </button>
                            </div>


                            {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
