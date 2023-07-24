<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h1>We send a verification link in your email</h1>

<form action="{{ route('verification.send') }}" method="post" class="verification.send">
    @csrf
    <button type="submit">Resend Email</button>
</form>
</body>
</html>
