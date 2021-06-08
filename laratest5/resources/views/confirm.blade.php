<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/user/destroy/{{$id}}" method="get">

        <h3>Delete {{$id}}?</h3>
        <a href="/user/destroy/{{$id}}">OK</a>
        <a href="/user/list">cancel</a>

    </form>

    {{-- <div id='confirmed'>

    </div>
    <script>
        if(confirm("Delete "+{{$id}}+" ?")){
            // document.getElementById('confirmed').innerHTML = '<a href="/user/destroy/'+{{$id}}+'">procedure</a>';
            window.location.href = "index.php";
    }else{
        console.log("'Cancel' button was pressed.");
    }
    </script> --}}
</body>
</html>
