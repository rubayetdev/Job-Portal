<!DOCTYPE html>
<html>
<head>
  <title>Resume</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <style>
  
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 20px;
  }

  .resume {
    max-width: 800px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 40px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .header {
    text-align: center;
    margin-bottom: 30px;
  }

  .header h1 {
    margin: 0;
    font-size: 36px;
    color: #333;
  }

  .header p {
    margin: 0;
    font-size: 18px;
    color: #777;
  }

  .profile-picture {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin: 0 auto;
    margin-bottom: 20px;
  }

  .section {
    margin-bottom: 30px;
  }

  .section-title {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
  }

  .section-content {
    margin-left: 20px;
  }

  .section-content p {
    margin: 0;
    margin-bottom: 5px;
    color: #555;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ccc;
  }

  th {
    background-color: #e5e5e5;
    color: #333;
  }

  ul {
    margin: 0;
    padding-left: 20px;
  }

  li {
    margin-bottom: 5px;
  }

  /* Update Resume Button Styles */
  .update-section {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .update-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border-radius: 90px;
    border: none;
    transition: background-color 0.3s ease;
    cursor: pointer;
  }

  .update-button:hover {
    background-color: #45a049;
  }

  /* Update user input field styles */
  input[type="text"],
  input[type="date"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="date"]:focus {
    outline: none;
    border-color: #4CAF50;
  }

  /* Calendar-specific styles */
  input[type="date"]::-webkit-inner-spin-button,
  input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
  }

  input[type="date"]::after {
    content: '\25BC';
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    color: #555;
    pointer-events: none;
  }


</style>

</head>
<body>
  <div class="resume">
    <div class="header">
      <form method="post" class="skill-upload" action="{{route('skill-upload')}}">
        @csrf
      <h1>{{session("User")}}</h1>
      
    </div>

    <div class="section">
      <h2 class="section-title">Contact Information</h2>
      <table>
        <tr>
          <th>Category</th>
          <th>Details</th>
        </tr>
        @foreach($userAddressDetails as $address)
        <tr>
          <td>Address</td>
          <td>{{$address->Present_Village}}, {{$address->Present_address}}</td>
        </tr>
        @endforeach
        <tr>
          <td>Email</td>
          <td>{{session('name')}}</td>
        </tr>
        @foreach($userPersonalDetails as $details)
        <tr>
          <td>Phone</td>
          <td>{{$details->User_Phone}}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <div class="section">
      <h2 class="section-title">Education</h2>
      <table>
        <thead>
        <tr>
          <th>Degree</th>
          <th>University</th>
          <th>Graduation Year</th>
        </tr>
        </thead>
        
        <tbody>
        @foreach($userAcademicDetails as $education)
        <tr>
          <td>{{$education->Exam_Title}} in {{$education->Major}}</td>
          <td>{{$education->School}}</td>
          <td>{{$education->Passing_Year}}</td>
        </tr>
        
        @endforeach
        </tbody>
        
      </table>
    </div>

    <div class="section">
  <h2 class="section-title">Experience</h2>
  <table>
    <tr>
      <th>Company</th>
      <th>Position</th>
      <th>Duration</th>
    </tr>
    <tr>
      <td><input type="text" id="company" name="company"></td>
      <td><input type="text" id="position" name="position"></td>
      <td>
        <input type="date" id="start_date" name="start_date">
        <span> - </span>
        <input type="date" id="end_date" name="end_date">
        <span id="present_label" style="display: none;">Present</span>
      </td>
    </tr>
  </table>
  <h3>Responsibilities:</h3>
  <ul>
    <li><input type="text" id="position" name="res1"></li>
    <li><input type="text" id="position" name="res2"></li>
    <li><input type="text" id="position" name="res3"></li>
  </ul>
</div>


    <div class="section">
      <h2 class="section-title">Skills</h2>
      <table>
        <tr>
          <th>Category</th>
          <th>Skills</th>
        </tr>
        <tr>
          <td>Programming Languages</td>
          <td><input type="text" id="skills1" name="Programming"></td>
        </tr>
        <tr>
          <td>Web Technologies</td>
          <td><input type="text" id="skills2" name="Web"></td>
        </tr>
        <tr>
          <td>Database</td>
          <td><input type="text" id="skills3" name="Database"></td>
        </tr>
      </table>
    </div>

    <div class="section">
      <h2 class="section-title">References</h2>
      <table>
        <tr>
          <th>Reference</th>
          <th>Contact</th>
        </tr>
        <tr>
          <td>Reference 1</td>
          <td><input type="text" id="contact1" name="Ref1"></td>
        </tr>
        <tr>
          <td>Reference 2</td>
          <td><input type="text" id="contact2" name="Ref2"></td>
        </tr>
      </table>
    </div>

    <!-- Update Resume Button -->
    <div class="section update-section">
      <button class="update-button" onclick="updateResume()">Update Resume</button>
    </div>
    </form>
  </div>

  <script>



    function updateResume() {
      var address = document.getElementById("address").value;
      var email = document.getElementById("email").value;
      var phone = document.getElementById("phone").value;
      var company = document.getElementById("company").value;
      var position = document.getElementById("position").value;
      var duration = document.getElementById("duration").value;
      var category1 = document.getElementById("category1").value;
      var skills1 = document.getElementById("skills1").value;
      var category2 = document.getElementById("category2").value;
      var skills2 = document.getElementById("skills2").value;
      var category3 = document.getElementById("category3").value;
      var skills3 = document.getElementById("skills3").value;
      var reference1 = document.getElementById("reference1").value;
      var contact1 = document.getElementById("contact1").value;
      var reference2 = document.getElementById("reference2").value;
      var contact2 = document.getElementById("contact2").value;

      // Update the resume content with user inputs
      document.getElementById("address").textContent = address;
      document.getElementById("email").textContent = email;
      document.getElementById("phone").textContent = phone;
      document.getElementById("company").textContent = company;
      document.getElementById("position").textContent = position;
      document.getElementById("duration").textContent = duration;
      document.getElementById("category1").textContent = category1;
      document.getElementById("skills1").textContent = skills1;
      document.getElementById("category2").textContent = category2;
      document.getElementById("skills2").textContent = skills2;
      document.getElementById("category3").textContent = category3;
      document.getElementById("skills3").textContent = skills3;
      document.getElementById("reference1").textContent = reference1;
      document.getElementById("contact1").textContent = contact1;
      document.getElementById("reference2").textContent = reference2;
      document.getElementById("contact2").textContent = contact2;
    }
  </script>
  <script>
  $(function() {
    $("#start_date").datepicker({
      dateFormat: "yy-mm-dd",
      onSelect: function(selectedDate) {
        $("#end_date").datepicker("option", "minDate", selectedDate);
      }
    });

    $("#end_date").datepicker({
      dateFormat: "yy-mm-dd",
      onSelect: function(selectedDate) {
        if (selectedDate === "") {
          $("#present_label").show();
        } else {
          $("#present_label").hide();
        }
        $("#start_date").datepicker("option", "maxDate", selectedDate);
      }
    });

    // Set end date as today's date
    var currentDate = $.datepicker.formatDate("yy-mm-dd", new Date());
    $("#end_date").datepicker("setDate", currentDate);
  });
</script>


</body>
</html>
