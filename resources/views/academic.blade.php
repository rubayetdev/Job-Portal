<!DOCTYPE html>
<html>
<head>
  <title>Education Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      margin-bottom: 20px;
    }

    .education-entry {
      margin-bottom: 20px;
    }

    .add-button {
      display: block;
      cursor: pointer;
      color: #4CAF50;
      margin-top: 10px;
    }

    .submit-button {
      margin-top: 20px;
      background-color: #4CAF50;
      border-color: #4CAF50;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Education Information</h1>

    <form id="education-form" method="post" class="post-education" action="{{route('post-education')}}">
        @csrf
      <div id="education-container">
        <div class="education-entry">
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" name="Email" value="{{session('name')}}" required>
      </div>
          <div class="form-group">
            <label for="education-level">Education Level:</label>
            <input type="text" class="form-control" id="education-level" name="education-level">
          </div>

          <div class="form-group">
            <label for="exam-title">Exam Title:</label>
            <input type="text" class="form-control" id="exam-title" name="exam-title">
          </div>

          <div class="form-group">
            <label for="major">Major:</label>
            <input type="text" class="form-control" id="major" name="major">
          </div>

          <div class="form-group">
            <label for="school">School/College:</label>
            <input type="text" class="form-control" id="school" name="school">
          </div>

          <div class="form-group">
            <label for="result">Result:</label>
            <input type="text" class="form-control" id="result" name="result">
          </div>

          <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration">
          </div>

          <div class="form-group">
            <label for="passing-year">Passing Year:</label>
            <input type="text" class="form-control" id="passing-year" name="passing-year">
          </div>
        </div>
      </div>

      <!-- <span class="add-button" onclick="addEducationEntry()">+ Add Education</span> -->
      <button type="submit" class="btn btn-primary submit-button">Submit</button>
      <button><a href="dashboard">Back to home</a></button>
    </form>
  </div>

  <!-- <script>
    var academicCount = 1;

    function addEducationEntry() {
      var educationContainer = document.getElementById("education-container");

      var newEntry = document.createElement("div");
      newEntry.className = "education-entry";

      newEntry.innerHTML = `

        <div class="form-group">
          <label for="education-level">Education Level:</label>
          <input type="text" class="form-control" id="education-level" name="education-level">
        </div>

        <div class="form-group">
          <label for="exam-title">Exam Title:</label>
          <input type="text" class="form-control" id="exam-title" name="exam-title">
        </div>

        <div class="form-group">
          <label for="major">Major:</label>
          <input type="text" class="form-control" id="major" name="major">
        </div>

        <div class="form-group">
          <label for="school">School/College:</label>
          <input type="text" class="form-control" id="school" name="school">
        </div>

        <div class="form-group">
          <label for="result">Result:</label>
          <input type="text" class="form-control" id="result" name="result">
        </div>

        <div class="form-group">
          <label for="duration">Duration:</label>
          <input type="text" class="form-control" id="duration" name="duration">
        </div>

        <div class="form-group">
          <label for="passing-year">Passing Year:</label>
          <input type="text" class="form-control" id="passing-year" name="passing-year">
        </div>
      `;

      educationContainer.appendChild(newEntry);

      academicCount++;
      var academicLabel = `Academic ${academicCount}`;
      var academicLabelElement = document.createElement("h3");
      academicLabelElement.textContent = academicLabel;
      educationContainer.insertBefore(academicLabelElement, newEntry);
    }

    document.getElementById("education-form").addEventListener("submit", function(event) {
      event.preventDefault();

      // Get the form data
      var form = document.getElementById("education-form");
      var formData = new FormData(form);

      // Prepare the request
      var request = new XMLHttpRequest();
      request.open("POST", form.action);

      // Handle the response
      request.onload = function() {
        if (request.status === 200) {
          console.log("Form submitted successfully");
          // Do something with the response if needed
        } else {
          console.error("Form submission failed");
          // Handle the submission failure if needed
        }
      };

      // Send the request
      request.send(formData);
    });
  </script> -->
</body>
</html>
