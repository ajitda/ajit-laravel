<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <style>
            .links{text-align: center;
            padding: 50px;}
            .links a{padding: 10px;}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
            <div class="content">
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @if(isset($name) && isset($age))
                                <div class="alert alert-success">
                                    <p>Your name {{ $name }} is and age is {{ $age }} </p>
                                    <p><img src="{{url($photo_file)}}" width="150px"></p>
                                </div>
                            @endif
                            <form action="{{ url('/') }}" method="post" class="form-inline" enctype="multipart/form-data">
                                {!!  csrf_field() !!}
                                <p></p><label>Enter Your Name :</label>
                                <input type="text" name="name" class="form-control">
                                <label>Enter Your Age :</label>
                                <input type="text" name="age" class="form-control"></p>
                                <p>Enter Your File :
                                <label class="btn btn-default btn-file">
                                    Browse <input type="file" name="photo" style="display: none;">
                                </label><button type="submit" class="form-control">Submit</button></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
