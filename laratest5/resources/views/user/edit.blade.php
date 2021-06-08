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
    <form action="/user/update/{{$id}}" method="post">

        <h4>User</h4>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>{{$user['id']}}</td>
                <td><input type="text" name="userId"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>{{$user['username']}}</td>
                <td><input type="text" name="userName"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$user['email']}}</td>
                <td><input type="text" name="userEmail"></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="submit">
    </form>
</body>
</html>
