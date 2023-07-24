<!-- <html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">


</head>
<body>
<form class="registration-form" method="post" action="{{route('registration-form')}}">

    @csrf
    <div class="wrapper">
    <div class="title">
      User Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Full Name</label>
          <input type="text" class="input" name="name" required>
       </div>

       <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" id="email" name="email" required>
       </div>
      <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="password" name="password" required>
       </div>

        <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input"id="confirm-password" name="confirm-password" required>
       </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="tel" class="input" id="phone" name="phone" required>
       </div>
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" id="address" required></textarea>
       </div>
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
</div>
    </form>
<script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
  <title>Sign Up | ChakriKhojo.com</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TRDC9VYF7M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TRDC9VYF7M');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1996841609387194"
            crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }

    h2 {
      text-align: center;
      color: #333333;
    }

    .title {
      text-align: center;
      margin-bottom: 20px;
    }

    .title h1 {
      font-size: 28px;
      font-weight: bold;
      color: #4CAF50;
      margin: 0;
    }

    .title span {
      font-size: 14px;
      color: #777777;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 4px;
      font-size: 16px;
      font-weight: bold;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      font-weight: bold;
    }

    .form-group textarea {
      resize: vertical;
      height: 80px;
    }
    .success-message {
      display: none;
      padding: 20px;
      margin-top: 20px;
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
      border-radius: 4px;
    }
    .show {
      display: block;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">
      <h1>ChakriKhojo<span>.com</span></h1>
    </div>
    <h2>Sign Up</h2>
    <form class="registration-form" method="post" action="{{route('registration-form')}}">
    @csrf

      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="name" placeholder="Enter your full name" required>
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
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm-password" placeholder="Confirm your password"
          required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Enter your address" required></textarea>
      </div>

      <input type="submit" value="Sign Up">


    </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  @if(Session::has('message'))
  <script>
    toastr.success("{{Session::get('message')}}");
  </script>
  @endif

</body>

</html>
