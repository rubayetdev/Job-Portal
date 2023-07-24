<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/Login.css')}}">
</head>
<body>
<form class="comlogin" method="post" action="comlogin">

    @csrf
    <!-- <div class="login-container">
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
    </div> -->

    <!-- <div class="wrapper">
        <div class="title">Business Login</div>
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
  <title>Business Login | ChakriKhojo.com</title>
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
    <h2>Business Login</h2>
    <form class="comlogin" method="post" action="comlogin">
        @csrf
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" id="username" name="email" placeholder="Enter your username" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <input type="submit" value="Login">

      <div class="forgot-password">
        <a href="#">Forgot password?</a>
      </div>
      @if(session('message'))
      <div class="error-message">
        {{ session('message') }}
      </div>
      @endif
    </form>
  </div>
</body>

</html>
