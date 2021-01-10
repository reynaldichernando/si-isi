<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- styles css -->
    <link href="{{ asset('css/login_styles.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card-login">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <!-- error message -->
                            @if(count($errors) > 0)
                                <div class="alert alert-danger col-sm-12" role="alert">
                                    Something is wrong:
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Username</span>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username di sini...">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password</span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password di sini...">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>