<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
</head>
<body>
    <form action="{{route('loginUser')}}" method="post">
        @csrf
        <input type="email" name="email" id="" placeholder="enter your email"><br>
        <span>@error('email') {{$message}} @enderror</span><br>
        <input type="password" name="password" id="" placeholder="enter your password"><br>
        <span>@error('password') {{$message}} @enderror</span><br>
        <button type="submit">Login In</button>
    </form>
    
</body>
</html>