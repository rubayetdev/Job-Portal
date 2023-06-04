<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chakri Khojo</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
       <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>


</head>
<body>
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
</main>

<footer>
    <p>&copy; 2023 ChakriKhojo.com</p>
</footer>

<script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
</body>
</html>
