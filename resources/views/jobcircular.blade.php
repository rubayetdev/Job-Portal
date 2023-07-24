<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Listing</title>
  <link rel="stylesheet" href="{{asset('css/userjob.css')}}">
  <link rel="stylesheet" href="jobpost.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    @foreach($datas as $user)
  <div class="job-listing">
    <h2 class="job_title">{{ $user->job_title }}</h2>
    <p class="company">{{ $user->company_name }}</p>





    <p class="company">Vaccan: {{ $user->vaccacines }}</p>
    <p class="company">{{ $user->age }}</p>
    <p class="company">{{ $user->experience }}</p>
    <p class="location">{{$user->Location}}</p>
    <p class="description">Job Resposibilities: {{$user->job_responsibilities}}</p>
    <p class="description">Job Requirment: {{$user->job_requirment}}</p>
    <p class="salary">Salary: {{$user->Salary}} Tk.</p>
    <p class="salary">Deadline: {{$user->Deadline}}</p>
    *Please copy this email and send your CV {{ $user->business_mail }}
    <a href="apply?businessemail={{ $user->business_mail }}&title={{ $user->job_title}}" class="apply-btn">Apply Now</a>
  </div>
  @endforeach
</body>
</html> -->

<!DOCTYPE html>
<html>

<head>
  <title>Job Circular</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
    }

    .job-circular {
      background-color: #ffffff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .job-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .job-description {
      color: #777777;
      margin-bottom: 20px;
    }

    .apply-button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    .apply-button a{
      text-decoration: none;
    }

    .apply-button:hover {
      background-color: #45a049;
    }

    .job-circular-heading {
      color: #4CAF50;;
    }
    .hide{
        display: none;
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
  <div class="container">
    <h2><span class="job-circular-heading">Job Circular</span> - ChakriKhojo.com</h2>
      <form action="following" method="post">
          @csrf
      <label class="hide">{{session("name")}}</label>
          <input type="hidden" name="user" value="{{session("name")}}">
          <p>{{$total}} Following</p>
    @foreach($datas as $user)
    <div class="job-circular">
      <h3 class="job-title">{{ $user->job_title }}</h3>
      <p class="job-description">{{$user->company_name}}</p>
        <p class="job-description hide">{{$user->business_mail}}</p>
        <input type="hidden" name="mail" value="{{$user->business_mail}}">
      <p class="job-description">{{$user->job_responsibilities}}</p>
      <p class="job-description">{{$user->job_requirment}}</p>
        <p class="job-description">{{$user->vaccacines}}</p>
        <p class="job-description">{{$user->age}}</p>
      <p class="job-description">{{$user->experience}}</p>
      <p class="job-description">{{$user->Location}}</p>
      <p class="job-description">{{$user->Salary}}</p>
      <p class="job-description">{{$user->Deadline}}</p>
      <button class="apply-button"><a href="apply?businessemail={{ $user->business_mail }}&title={{ $user->job_title}}" class="apply-btn">Apply Now</a></button>
        <button class="apply-button">Follow</button>
        <button class="apply-button"><a href="{{route('unfollow',['mail'=>$user->business_mail,'user'=>session("name")])}}">Unfollow</a></button>

    </div>
    @endforeach
      </form>
  </div>
</body>

</html>
