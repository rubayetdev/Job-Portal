<!-- <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chakri Khojo</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
       <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
       <script src="//code.tidio.co/2l8awmiopxub2rsj7vuajrnkxy2xnqln.js" async></script>
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<header>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-sharp fa-light fa-bars fa-beat-fade"></i>
        </label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="jobpost">Job Post</a></li>
            <li><a href="viewcv">All CV</a></li>
            <li><a href="welcome">Logout</a></li>
            <li>{{ session('mails') }}</li>
        </ul>
    </nav>
</header>

<main>
    <section class="hero">
        
    <h1>Welcome {{ session("names") }} to ChakriKhojo.com</h1>
        <p>Chakri Khojo Chakor Sajo.</p>
        <a href="#" class="btn">Learn More...</a>
    </section>

    <section class="features">
        <h2>Features</h2>
        <ul>
            <li><i class="fa-solid fa-person-running"></i>Find Jobs</li>
            <li><i class="fa-solid fa-building-user"></i>Company Category</li>
            <li><i class="fas fa-file-check"></i>Job Circular</li>
            <li><i class="fa-solid fa-user-headset"></i>Live Chat</li>

        </ul>
    </section>

    <section class="services" id="service">
        <h2>Our Services</h2>
        <div class="service">
            <img src="service1.jpg" alt="Service 1">
            <h3>Service 1</h3>
            <p>User can find job with automated resume create.</p>
        </div>
        <div class="service">
            <img src="service2.jpg" alt="Service 2">
            <h3>Service 2</h3>
            <p>Live chat with companies.</p>
        </div>
        <div class="service">
            <img src="service3.jpg" alt="Service 3">
            <h3>Service 3</h3>
            <p>Oral exam and score added to user profile.</p>
        </div>
    </section>
    <section class="additional">
        <h2>Additional Section</h2>
        <div class="image">
            <img src="placeholder.jpg" alt="Image 1">
        </div>
        <div class="image">
            <img src="placeholder.jpg" alt="Image 2">
        </div>
        <div class="image">
            <img src="placeholder.jpg" alt="Image 3">
        </div>
        <div class="image">
            <img src="placeholder.jpg" alt="Image 4">
        </div>
        <div class="image">
            <img src="placeholder.jpg" alt="Image 5">
        </div>
        <div class="image">
            <img src="placeholder.jpg" alt="Image 6">
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2023 ChakriKhojo.com</p>
</footer>

<script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Portal</title>
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
</head>

<body>
  <!-- Navigation Bar -->
  <div class="navbar">
    <div class="logo">ChakiKhojo.com</div>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="yourjob">Your Jobs</a>
    <a href="jobpost">Job Post</a>
    <a href="viewcv">All CV</a>
    <a href="welcome">Logout</a>
    <a href="#">{{ session('mails') }}</a>
    

  <!-- Main Content -->
  <div class="main-content">
    <h1>Welcome {{ session("names") }} to ChakiKhojo!!!!</h1>
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
      <p>info@chakikhujo.com</p>
    </div>
    <div class="social-media">
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-twitter"></a>
    </div>
    <a href="#" class="chatbot">Chat with our Chatbot</a>
  </div>
  
</body>

</html>

