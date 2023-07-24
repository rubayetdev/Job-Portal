<!DOCTYPE html>
<html>
<head>
  <title>Resume</title>
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

    th, td {
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

    /* Download Button Styles */
    .download-section {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .download-button {
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

    .download-button:hover {
      background-color: #45a049;
    }
  </style>
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
</head>
<body>
  <div class="resume">

    <div class="header">
    @foreach($userPersonalDetails as $details)
      <img class="profile-picture" src="{{asset('storage/' . $details->Profile_Pic)}}" alt="Profile Picture">
      @endforeach
      <h1>{{session("User")}}</h1>


      @foreach($userSkillsDetails as $skill)
      <p>{{$skill->Ex_position}}</p>
      @endforeach
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
        <tr>
          <th>Degree</th>
          <th>University</th>
          <th>Graduation Year</th>
        </tr>
        @foreach($userAcademicDetails as $education)
        <tr>
          <td>{{$education->Exam_Title}} in {{$education->Major}}</td>
          <td>{{$education->School}}</td>
          <td>{{$education->Passing_Year}}</td>
        </tr>
        @endforeach
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
        @foreach($userSkillsDetails as $skill)
        <tr>
          <td>{{$skill->Ex_Company}}</td>
          <td>{{$skill->Ex_position}}</td>
          <td>{{$skill->Startdate}} - {{$skill->Enddate}}</td>
        </tr>
        @endforeach
      </table>
      <h3>Responsibilities:</h3>
      @foreach($userSkillsDetails as $skill)
      <ul>
        <li>{{$skill->Res1}}</li>
        <li>{{$skill->Res2}}</li>
        <li>{{$skill->Res3}}</li>
      </ul>
      @endforeach
    </div>

    <div class="section">
      <h2 class="section-title">Skills</h2>
      <table>
        <tr>
          <th>Category</th>
          <th>Skills</th>
        </tr>
        @foreach($userSkillsDetails as $skill)
        <tr>
          <td>Programming Languages</td>
          <td>{{$skill->Programming}}</td>
        </tr>
        <tr>
          <td>Web Technologies</td>
          <td>{{$skill->Web}}</td>
        </tr>
        <tr>
          <td>Database</td>
          <td>{{$skill->DatabaseLan}}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <div class="section">
      <h2 class="section-title">References</h2>
      <table>
        <tr>
          <th>Reference</th>
          <th>Contact</th>
        </tr>
        @foreach($userSkillsDetails as $skill)
        <tr>
          <td>Reference 1</td>
          <td>{{$skill->Ref1}}</td>
        </tr>
        <tr>
          <td>Reference 2</td>
          <td>{{$skill->Ref2}}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <!-- Resume Download Button -->
    <div class="section download-section">
      <a href="/path/to/your/resume.pdf" download>
        <button class="download-button" onclick="window.print()">Download Resume</button>
      </a>
    </div>
  </div>
</body>
</html>
