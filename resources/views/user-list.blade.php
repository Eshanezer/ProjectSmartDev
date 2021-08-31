<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>

<h1>User List</h1>

<table>
        @foreach($users as $u)
    <tr>
        <td><a href="{{route('users.show',$u->id)}}">{{$u->id}}</a></td>
{{--        <td><a href="{{route('users.show',$u->name)}}">{{$u->name}}</a></td>--}}
        <td>{{$u->email}}</td>
        <td>
            <form method="POST" action="{{route('users.destroy',$u->id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                </div>
            </form>
        </td>
    </tr>
        @endforeach
</table>

</body>
</html>
