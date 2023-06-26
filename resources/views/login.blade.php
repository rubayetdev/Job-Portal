<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
</head>
<body>

<form class="login-form" method="post" action="{{ route('login-form') }}">

    @csrf
    

    <div class="wrapper">
        <div class="title">User Login</div>
        <div class="form">
       <div class="inputfield">
          <label>Email:</label>
          <input type="text" class="input" name="email" id="username" required>
       </div>  
       
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="password" name="password" required>
       </div>  
       <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
    
    </div>

   
</form>
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
  <title>Candidate Login | ChakriKhojo.com</title>
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
    input[type="password"] {
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

    .forgot-password {
      text-align: center;
      margin-top: 10px;
      color: #777777;
    }

    .forgot-password a {
      text-decoration: none;
      color: #777777;
    }

    .forgot-password a:hover {
      color: #333333;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">
      <h1>ChakriKhojo<span>.com</span></h1>
    </div>
    <h2>Candidate Login</h2>
    <form class="login-form" method="post" action="{{ route('login-form') }}">
        @csrf
      <div class="form-group">
        <label for="username">Email</label>
        <input type="text" id="username" name="email" placeholder="Enter your username" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <input type="submit" value="Login">

      <div class="forgot-password">
        <a href="#">Forgot password?</a>
      </div>
     
    </form>
  </div>
</body>

</html>
