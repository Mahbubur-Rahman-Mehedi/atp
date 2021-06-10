<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- <h1> Welcome Home! //(< ?=$id? >) </h1> // php syntex we will not use it here we will use blade -->
     <!-- blade -->
     {{-- <h1> Welcome Home! {{$id}} </h1>

    {{$name}} --}}
    <h1> Welcome Home! {{$name}} </h1>
    <a href='{{route('user.create')}}'> Create User </a> |
        <a href='/user/list'> View All Users </a> |
        <a href='/logout'>
        <input type="button" name="logout" value="logout">
    </a>

</body>
</html>
