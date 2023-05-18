<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>
  <link rel="stylesheet" href="{{asset('css/resume.css')}}">
</head>

<body>
  <div class="container">
    <div class="profile">
      <img src="profile.jpg" alt="Profile Picture">
      <h1>{{session("User")}}</h1>
      <h3>Front-end Developer</h3>
    </div>

    <div class="contact">
      <h2>Contact</h2>
      <p>Email: {{session("name")}}</p>
      
      
      @foreach ($dataread as $row)
    <p>{{ $row['User_Phone'] }}</p>
    <p>{{ $row['User_Address'] }}</p>
@endforeach

      
      
    </div>

    <div class="skills">
      <h2>Skills</h2>
      <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>JavaScript</li>
        <li>Responsive Web Design</li>
      </ul>
    </div>

    <div class="experience">
      <h2>Experience</h2>
      <ul>
        <li>Front-end Developer at ABC Company (2018 - Present)</li>
        <li>Web Developer at XYZ Agency (2015 - 2018)</li>
      </ul>
    </div>
  </div>
</body>

</html>
