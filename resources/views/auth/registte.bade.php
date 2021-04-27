
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
    <link href="http://localhost:8080/Coffee_order_system/public/admin/css/login.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8080/Coffee_order_system/public/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME STYLES -->
    <link href="http://localhost:8080/Coffee_order_system/public/admin/css/components.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
</head>

<body class="login">
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="http://localhost:8080/Coffee_order_system/public">
            <img src="http://localhost:8080/Coffee_order_system/public/frontend/images/Dana-menu-logo.png" alt="" />
        </a>
    </div>
    <div class="content">

        <!-- Session Status -->
                <!-- Validation Errors -->
                <!-- BEGIN LOGIN FORM -->
        <form method="POST" action="{{ route('register') }}>
            <input "type="text" name="name" :value="old('name')" required autofocus">            <h3>Login</h3>
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
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://localhost:8080/Coffee_order_system/public/forgot-password">
                    Forgot your password?
                </a>
                            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>