<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
</head>
<body>
<form class="registration-form" method="post" action="{{route('registration-form')}}">

    @csrf
    <h2>Register</h2>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Enter your address" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit">Register</button>
    </div>
</form>

</body>
</html>
