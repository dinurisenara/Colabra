@extends('layouts.app')

@section('content')

    <script>
        $(document).ready(function () {
            $('form').submit(function () {
                $('.is-invalid').removeClass('is-invalid'); // Clear previous error styles

                // Validate email
                var email = $('#email').val();
                if (email === '') {
                    $('#email').addClass('is-invalid');
                    $('#email-error').text('The email field is required.');
                    return false;
                }

                // Validate password
                var password = $('#password').val();
                if (password === '') {
                    $('#password').addClass('is-invalid');
                    $('#password-error').text('The password field is required.');
                    return false;
                }

                // Add additional validation if needed

                return true; // Proceed with form submission
            });
        });
    </script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-black text-center">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <!-- Display client-side validation errors -->
                                <small id="email-error" class="text-danger"></small>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">

                                <!-- Display client-side validation errors -->
                                <small id="password-error" class="text-danger"></small>
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                            </div>

                            <div class="mt-3 text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-primary" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="mt-3 text-center">
                                <a class="nav-link" href="{{ route('admin.login') }}">Admin Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

