<!DOCTYPE html>
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
      Registration Form
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
</html>