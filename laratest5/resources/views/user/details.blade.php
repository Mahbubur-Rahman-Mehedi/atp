<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/home">Home</a>
    <a href="/logout">Logout</a>
    <h4>User</h4>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>{{$user['id']}}</td>
        </tr>
        <tr>
            <td>Username</td>
            <td>{{$user['username']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user['email']}}</td>
        </tr>


	</table>

</body>
</html>
