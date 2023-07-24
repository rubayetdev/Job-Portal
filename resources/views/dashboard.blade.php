
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{session('User')}}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="//code.tidio.co/2l8awmiopxub2rsj7vuajrnkxy2xnqln.js" async></script>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f6f9;
    }

    /* Navigation Bar */
    .navbar {
      background-color: #0a66c2;
      overflow: hidden;
      padding: 20px;
    }

    .navbar a {
      float: left;
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
    }

    /* Logo */
    .logo {
      float: left;
      font-size: 24px;
      font-weight: bold;
      color: #fff;
      margin-right: 20px;
    }

    /* Main Content */
    .main-content {
      padding: 50px;
      text-align: center;
    }

    .main-content h1 {
      font-size: 36px;
      color: #333;
      animation: moveText 2s infinite alternate;
    }

    @keyframes moveText {
      from {
        transform: translateX(-50%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    /* Features */
    .features {
      margin-top: 50px;
      display: flex;
      justify-content: space-around;
    }

    .feature {
      flex-basis: 30%;
      background-color: #fff;
      border-radius: 4px;
      padding: 20px;
      text-align: left;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .feature h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    /* Hot Jobs */
    .hot-jobs {
      margin-top: 50px;
    }

    .hot-jobs h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .hot-jobs ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .hot-jobs li {
      background-color: #b3d7ff;
      border-radius: 4px;
      margin: 10px;
      padding: 20px;
      width: 300px;
      text-align: left;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      color: #000000;
      font-weight: bold;
    }

    .hot-jobs li:hover {
      background-color: #f8f8f8;
      cursor: pointer;
    }

    /* Footer */
    .footer {
      background-color: #c1d1f0;
      color: #333;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
      color: #000000;
      font-weight: bold;
    }

    /* Contact Info */
    .contact-info {
      display: flex;
      align-items: center;
    }

    .contact-info p {
      margin-right: 10px;
    }

    /* Chatbot */
    .chatbot {
      display: inline-block;
      background-color: #0a66c2;
      color: #fff;
      text-align: center;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
    }

    /* Search Bar */
    .search-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .search-input {
      padding: 10px;
      border: none;
      border-radius: 4px 0 0 4px;
      width: 300px;
    }

    .search-button {
      background-color: #0a66c2;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 0 4px 4px 0;
      cursor: pointer;
    }

    .search-button:hover {
      background-color: #094d87;
    }

    /* Dropdown */
    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 18px;
      border: none;
      outline: none;
      color: #fff;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: #094d87;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
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
  <!-- Navigation Bar -->

  <div class="navbar">

    <div class="logo">ChakriKhojo.com</div>
    <a href="#home">Home</a>
    <a href="canabout">About</a>
    <a href="userservice">Services</a>
    <a href="#contact">Contact</a>
    <a href="jobcircular">Job Circular</a>
      <a href="submittedjobs">Submitted Jobs</a>
    <a href="logout">Logout</a>

    <div class="dropdown">
      <button class="dropbtn">{{session('name')}}</button>
      <div class="dropdown-content">
        <a href="viewresume">View Resume</a>
        <a href="resume">Edit Resume</a>
        <a href="profile">My Profile</a>
      </div>
    </div>

      @foreach($userPersonalDetails as $deatils)
      <a href="#"><img src="{{asset('storage/' .$deatils->Profile_Pic)}}" style="width: 30px; height: 30px; border-radius: 50%;"></a>
      @endforeach
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>Welcome <label class="test"></label> to ChakriKhojo!!!!</h1>
    <!-- Features -->
    <!-- <div class="features">
      <div class="feature">
        <h3>Find Jobs</h3>
        <p>Explore a wide range of job opportunities</p>
      </div>
      <div class="feature">
        <h3>Job Circular</h3>
        <p>Stay updated with the latest job circulars</p>
      </div>
    </div> -->

    <!-- Hot Jobs -->
    <div class="hot-jobs">
      <h2>Recently Hot Jobs 🔥</h2>
      <!-- Search Bar -->
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Search for jobs">
        <button class="search-button"><i class="fas fa-search"></i></button>
      </div>

      <ul>
        <li>Software Engineer</li>
        <li>Security Engineer</li>
        <li>Application Security Engineer</li>
        <li>Full Stack Engineer</li>
        <li>Java Devoloper</li>
        <li>Data Engineer</li>
        <li>Research Engineer</li>
      </ul>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="contact-info">
      <p>Contact us:</p>
      <p>info@chakrikhojo.com</p>
    </div>
    <div class="social-media">
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-twitter"></a>
    </div>
    <a href="#" class="chatbot">Chat with our Chatbot</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var type =new Typed(".test",{
         strings : ["{{session('User')}}"],
        loop : true,
        typeSpeed : 100,
        backSpeed : 150,
        backDelay : 1500
    })
</script>

</body>

</html>

