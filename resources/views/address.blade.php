<!DOCTYPE html>
<html>
<head>
  <title>User Information Form - Address</title>
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
    <h1>User Information Form - Address</h1>
    <form method="post" class="post-address" action="{{route('post-address')}}" >
      @csrf
      <div class="form-group address-section">
        <h2>Present Address</h2>
        <div class="form-group">
          <label for="presentAddress">Email:</label>
          <input type="email" id="email" class="form-control" name="Email" value="{{session('name')}}" required>

        </div>
        <div class="form-group">
          <label for="presentAddress">Address:</label>
          <textarea id="present-address" class="form-control" name="present-address" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="presentVillage">Village:</label>
          <input type="text" id="present-village" class="form-control" name="present-village" required>
        </div>
        <div class="form-group">
          <label for="presentZipCode">Zip Code:</label>
          <input type="text" id="present-zip" class="form-control" name="present-zip" required>
        </div>
        <div class="form-group">
          <label for="presentCity">City:</label>
          <input type="text" id="present-city" class="form-control" name="present-city" required>
        </div>
      </div>
      <div class="form-group address-section">
        <h2>Permanent Address</h2>
        <div class="form-group">
          <label for="permanentAddress">Address:</label>
          <textarea id="permanent-address" class="form-control" name="permanent-address" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="permanentVillage">Village:</label>
          <input type="text" id="permanent-village" class="form-control" name="permanent-village" required>
        </div>
        <div class="form-group">
          <label for="permanentZipCode">Zip Code:</label>
          <input type="text" id="permanent-zip" class="form-control" name="permanent-zip" required>
        </div>
        <div class="form-group">
          <label for="permanentCity">City:</label>
          <input type="text" id="permanent-city" class="form-control" name="permanent-city" required>
        </div>
        <div class="form-group">
              <input type="checkbox" id="same-address" onchange="fillPermanentAddress()">
              <label for="same-address">Same as Present Address</label>
        </div>
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <script>
    function fillPermanentAddress() {
      if (document.getElementById("same-address").checked) {
        document.getElementById("permanent-address").value = document.getElementById("present-address").value;
        document.getElementById("permanent-village").value = document.getElementById("present-village").value;
        document.getElementById("permanent-zip").value = document.getElementById("present-zip").value;
        document.getElementById("permanent-city").value = document.getElementById("present-city").value;
      } else {
        document.getElementById("permanent-address").value = "";
        document.getElementById("permanent-village").value = "";
        document.getElementById("permanent-zip").value = "";
        document.getElementById("permanent-city").value = "";
      }
    }
  </script>
</body>
</html>
