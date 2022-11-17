<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>

    <h1>sign up</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif

    <form action="{{route('signupUser')}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="enter your name"><br>
        <span>@error('name') {{$message}} @enderror</span><br>
        <input type="email" name="email" id="" placeholder="enter your email"><br>
        <span>@error('email') {{$message}} @enderror</span><br>
        <input type="password" name="password" id="" placeholder="enter your password"><br>
        <span>@error('password') {{$message}} @enderror</span><br>
        <button type="submit">Register</button>
    </form>
    
    
</body>
</html>