<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('app.css', 'vendor/peidmin') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form>
                    <div class="form-group">
                        <label for="username">Username</label>

                        <input type="text" class="form-control" id="username">
                    </div>

                    <button class="btn btn-primary btn-block">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ mix('manifest.js', 'vendor/peidmin') }}"></script>
    <script src="{{ mix('vendor.js', 'vendor/peidmin') }}"></script>
    <script src="{{ mix('app.js', 'vendor/peidmin') }}"></script>
</body>
</html>
