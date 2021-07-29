<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Log in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    </head>
    <body class="antialiased">

        <div class="container">
            <h1>Log In Form</h1><br>
            @if (Session::get('login'))
                <p class="alert-danger" >{{ Session::get('login') }}</p>
            @endif
            <form action="/login" method="POST">
                @csrf
                @if (Session::get('mailFail'))
                    <p class="alert-danger" >{{ Session::get('mailFail') }}</p>
                @endif
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                    @error('email')
                        <p class="alert-danger" >{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    @if (Session::get('passFail'))
                        <p class="alert-danger" >{{ Session::get('passFail') }}</p>
                    @endif
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                    @error('pass')
                        <p class="alert-danger" >{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group form-check">
                 
                </div>
                <button type="/login" class="btn btn-primary">Log In</button>
                <a href="/registration" class="btn btn-primary">Registration</a>
              </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
