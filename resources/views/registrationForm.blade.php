<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Registration</h1>
<br>
<br>
<br>
<form action="/users" method="POST">
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="{{ old('username') }}">
    <br>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    <br>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <br>
    <label for="cpassword">Confirm password</label>
    <input type="password" name="password_confirmation" id="cpassword">
    <br>
    <br>
    <br>
    <br>
    <input type="submit" name="" id="" value="Submit">

    <br>  <br>

    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors }}</strong>
                                    </span>
</form>
</body>
</html>
