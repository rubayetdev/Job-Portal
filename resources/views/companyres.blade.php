<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="{{asset('css/companycss.css')}}">
</head>
<body>
<form class="business-registration" method="POST" action="{{route('business-registration')}}">
   @csrf
<div class="wrapper">
    <div class="title">
      Business Registration
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Company Name</label>
          <input type="text" class="input" name="company_name">
       </div>

       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="company_password">
       </div>
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name="company_confirm">
       </div>
        <div class="inputfield">
          <label>Company License No:</label>
          <input type="text" class="input" name="company_license">
       </div>
        <div class="inputfield">
          <label>Company Email</label>
          <input type="email" class="input" name="company_email">
       </div>
      <div class="inputfield">
          <label>Telephone Number</label>
          <input type="text" class="input" name="company_number">
       </div>
      <div class="inputfield">
          <label>Company Address</label>
          <textarea class="textarea" name="company_address"></textarea>
       </div>
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="company_postal_code">
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

</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
  <title>Sign Up | ChakriKhojo.com</title>
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
  </style>
</head>

<body>
  <div class="container">
    <div class="title">
      <h1>ChakriKhojo<span>.com</span></h1>
    </div>
    <h2>Business Sign Up</h2>
    <form class="business-registration" method="POST" action="{{route('business-registration')}}">
   @csrf
      <div class="form-group">
        <label for="fullname">Company Name:</label>
        <input type="text" id="fullname" name="company_name" placeholder="Enter your company name" required>
      </div>

      <div class="form-group">
        <label for="fullname">Company License No:</label>
        <input type="text" id="fullname" name="company_license" placeholder="Enter your licence no." required>
      </div>

      <div class="form-group">
        <label for="email">Password:</label>
        <input type="password" id="email" name="company_password" placeholder="Enter your password" required>
      </div>

      <div class="form-group">
        <label for="password">Confirm Password:</label>
        <input type="password" id="password" name="company_confirm" placeholder="Enter your confirm password" required>
      </div>

      <div class="form-group">
        <label for="confirm_password">Email:</label>
        <input type="email" id="confirm_password" name="company_email" placeholder="Confirm your email"
          required>
      </div>

      <div class="form-group">
        <label for="phone">Telephone Number:</label>
        <input type="tel" id="phone" name="company_number" placeholder="Enter your phone number" required>
      </div>

      <div class="form-group">
        <label for="phone">Postal Code:</label>
        <input type="tel" id="phone" name="company_postal_code" placeholder="Enter your postal code" required>
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="company_address" placeholder="Enter your address" required></textarea>
      </div>

      <input type="submit" value="Sign Up">


    </form>
  </div>
</body>

</html>
