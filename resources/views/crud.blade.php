<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD</title>
    </head>
    <body class="antialiased">
        <div>
            <h2>Registration Form</h2>
        <form action="/crud" method="post">
            @csrf
            <label for="">Email</label>
            <input type="email" name="email" id="email"><br><br>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <label for="">Password</label>
            <input type="password" name="pass" id="pass"><br><br>
            @error('pass')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
        </div>
    </body>
</html>
