<html>
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
</html>
