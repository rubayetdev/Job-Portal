<!DOCTYPE html>
<html>
<head>
  <title>User Information Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f5f5f5;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    .checkbox-label {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      border-color: #4CAF50;
      color: white;
    }

    .address-section {
      margin-bottom: 30px;
    }

    .address-section h2 {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .address-section .form-group {
      margin-bottom: 20px;
    }

    .address-section label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Information Form</h1>
    <form method="post" class="post-details" action="{{route('post-details')}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" class="form-control" name="Name" value="{{session('User')}}" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" name="Email" value="{{session('name')}}" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" class="form-control" name="Phone" value="{{session('phone')}}" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" class="form-control" name="DateOfBirth" required>
      </div>
      <div class="form-group">
        <label for="nationality">Nationality:</label>
        <select id="nationality" class="form-control" name="nationality" required>
          <option value="">-- Select --</option>
          <option value="Bangladesh">Bangladesh</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="nationality">Religion:</label>
        <select id="nationality" class="form-control" name="Religion" required>
          <option value="">-- Select --</option>
          <option value="Islam">Islam</option>
          <option value="Hindu">Hindu</option>
          <option value="Christianity">Christianity</option>
          <option value="Buddhism">Buddhism</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <div>
          <input type="radio" id="male" name="Gender" value="Male" required>
          <label for="male">Male</label>
        </div>
        <div>
          <input type="radio" id="female" name="Gender" value="Female" required>
          <label for="female">Female</label>
        </div>
        <div>
          <input type="radio" id="other" name="Gender" value="Other" required>
          <label for="other">Other</label>
        </div>
      </div>
      <div class="form-group">
        <label for="bloodGroup">Blood Group:</label>
        <select id="bloodGroup" class="form-control" name="BloodGroup" required>
          <option value="">-- Select --</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div>
      <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" id="photo" class="form-control" name="photo" accept="image/*">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Next</button>
      </div>
    </form>
  </div>
</body>
</html>
