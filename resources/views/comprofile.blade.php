<!DOCTYPE html>
<html>
<head>
  <title>Profile Update</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .profile-picture {
      text-align: right;
    }

    .profile-picture img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .profile-picture input[type="file"] {
      display: none;
    }

    .profile-picture label,button {
      display: inline-block;
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .button-container {
      text-align: center;
    }

    .button-container button,
    a {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
    }

    .button-container button:hover {
      background-color: #45a049;
    }
  </style>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('profile-picture').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Profile Update</h1>
    @foreach($userPersonalDetails as $details)
    <form method="post" class="update-busprofile" action="{{route('update-busprofile')}}" enctype="multipart/form-data">
      @csrf
    <div class="profile-picture">
      <img id="profile-picture" src="{{asset('storage/' .$details->Profile_Pic)}}" alt="Profile Picture">
      <br>
      
      <input type="file" accept="image/*" id="profile-picture-upload" name="propic" onchange="readURL(this)">
      <label for="profile-picture-upload">Upload</label>
  
    </div>
    
    
      <div class="form-group">
        <label for="first-name">Company Name:</label>
        <input type="text" id="first-name" name="com-name" value="{{ $details->business_name }}" required>
      </div>
      <div class="form-group">
        <label for="last-name">Business Email:</label>
        <input type="text" id="last-name" name="email" value="{{ session('mails') }}" readonly>
      </div>
      <div class="form-group">
        <label for="date-of-birth">License:</label>
        <input type="text" id="date-of-birth" name="License" value="{{$details->business_license}}" required>
      </div>
      <div class="form-group">
        <label for="religion">Location:</label>
        <input type="text" id="religion" name="Location" value="{{$details->company_address}}" required>
      </div>
      <div class="form-group">
        <label for="phone">Telephone:</label>
        <input type="text" id="phone" name="phone" value="{{$details->telephone}}" required>
      </div>
      <div class="form-group">
        <label for="nationality">Head Office:</label>
        <input type="text" id="nationality" name="head" value="{{$details->headoffice}}" required>
      </div>
      <div class="form-group">
        <label for="nationality">Postal Code:</label>
        <input type="text" id="nationality" name="postal" value="{{$details->postal_code}}" required>
      </div>
      <div class="form-group">
        <label for="blood-group">Password:</label>
        <input type="password" id="blood-group" name="password" value="{{$details->company_password}}" required>
      </div>
      
      <div class="button-container">
        <button type="submit">Update</button>
      </div>
      @endforeach
      <div class="button-container">
        <button><a href ="companydashboard">Back to Home</a></button>
      </div>
    </form>
  </div>
</body>
</html>
