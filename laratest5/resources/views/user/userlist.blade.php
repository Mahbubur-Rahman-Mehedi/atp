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
    <h4>User List</h4>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        @foreach ($userlist as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['username']}}</td>
                <td>{{$user['email']}}</td>
                <td>
                    {{-- here we give a '/' at first of our url so that user doesn't show double in url --}}
                    <a href="/user/details/{{$user['id']}}">Details</a>
                    <a href="/user/edit/{{$user['id']}}">Edit</a>
                    <a href="/user/delete/{{$user['id']}}">delete</a>
                </td>
            </tr>
        @endforeach


	</table>

</body>
</html>
