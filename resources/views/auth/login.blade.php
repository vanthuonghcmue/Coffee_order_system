<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>reset-password </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('admin/css/login.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME STYLES -->
    <link href="{{ asset('admin/css/components.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
</head>

<body class="login">
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{asset('frontend/images/Dana-menu-logo.png')}}" alt="" />
        </a>
    </div>
    <div class="content">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />
        <!-- BEGIN LOGIN FORM -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h3>Login</h3>
            <!-- Email Address -->
            <div class="form-group">
                <p>Email</p>
                <input class="form-control placeholder-no-fix" id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group">
                <p>Password</p>
                <input class="form-control placeholder-no-fix" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                        <input type="checkbox" id="me" name="remember" />
                        <label for="me">remember me</label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>