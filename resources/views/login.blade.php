<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
</head>
<body>
<form class="login-form" method="post" action="{{ route('login-form') }}">

    @csrf
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="username" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</form>
</body>
</html>
