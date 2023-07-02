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

<div class="wrapper">
<ul>
<li><a href="https://www.facebook.com/chakrikhojo" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.twitter.com/chakrikhojo" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/company/chakrikhojo" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="https://www.instagram.com/chakrikhojo" target="_blank"><i class="fab fa-instagram"></i></a></li>
</ul>
</div>
<header>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-sharp fa-light fa-bars fa-beat-fade"></i>
        </label>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#">Contact</a></li>
            
            <li class="dropdown">
            <a href="#" class="dropbtn">Login</a>
                <div class="dropdown-content">
                    <a href="login">Personal</a>
                    <a href="companylogin">Business</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Registration</a>
                <div class="dropdown-content">
                    <a href="registration">Personal</a>
                    <a href="companyres">Business</a>
                </div>
            </li>
        </ul>
    </nav>
</header>

<main>
    <section class="hero">
        <h1>Welcome to ChakriKhojo.com</h1>
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

    
    <section class="additional">
        <h2>Additional Section</h2>
        <div class="image">
            <img src="{{asset('app/cv/Abstract.pdf')}}" alt="Image 1">
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
    <div class="contact-info">
        <p>Contact us:</p>
        <p>Email: info@chakrikhojo.com</p>
        <p>Phone: 01642889275</p>
        <p>Address: Mirpur-2, Dhaka</p>
    </div>
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
  <title>Chakrikhojo.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <script src="//code.tidio.co/2l8awmiopxub2rsj7vuajrnkxy2xnqln.js" async></script>
  <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
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
    justify-content: center; /* Center the content horizontally */
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
    <div class="logo">ChakriKhojo.com</div>
    <a href="#home">Home</a>
    <a href="about">About</a>
    <a href="service">Services</a>
    <a href="#contact">Contact</a>
    <div class="dropdown">
      <button class="dropbtn">Login</button>
      <div class="dropdown-content">
        <a href="login">Candidate Login</a>
        <a href="companylogin">Business Login</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Registration</button>
      <div class="dropdown-content">
        <a href="registration">Candidate Signup</a>
        <a href="companyres">Business Signup</a>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1>Welcome to ChakriKhojo!!!!</h1>
    <!-- Features -->
    <div class="features">
      <div class="feature">
        <h3>Find Jobs</h3>
        <p>Explore a wide range of job opportunities</p>
      </div>
      <div class="feature">
        <h3>Job Circular</h3>
        <p>Stay updated with the latest job circulars</p>
      </div>
    </div>

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
    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin" style="color: #0b5fef;"></i></a>
    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook" style="color: #0602f2;"></i></a>
    <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter" style="color: #61a1f5;"></i></a>
    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" style="color: #db1f0a;"></i></a>
  </div>
</div>

</body>

</html>
