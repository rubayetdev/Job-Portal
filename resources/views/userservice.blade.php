<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chakrikujo.com - Services</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
      min-height: 100vh;
      position: relative;
    }

    .navbar {
  background-color: #0a66c2;
  padding-top: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.navbar-brand {
  color: #fff;
  font-weight: bold;
  font-size: 24px;
  letter-spacing: 1px;
}

.navbar-nav .nav-link {
  color: #fff;
  font-size: 16px;
  letter-spacing: 1px;
  margin-left: 15px;
  margin-right: 15px;
}

.navbar-nav .nav-link:hover {
  color: rgba(255, 255, 255, 0.7);
}

.hero {
  background-color: #f9f9f9;
  padding: 60px 0;
}

.hero h1 {
  font-size: 42px;
  color: #333;
  margin-bottom: 20px;
}

.hero p {
  font-size: 18px;
  color: #666;
}

.services {
  padding: 60px 0;
  background-color: #fff;
}

.service-card {
  border: 1px solid #ddd;
  padding: 30px;
  text-align: center;
  margin-bottom: 30px;
  transition: box-shadow 0.3s;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.service-card:hover {
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.service-icon {
  margin-bottom: 20px;
}

.service-icon i {
  color: #007bff;
  font-size: 36px;
}

.service-card h3 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

.service-card p {
  color: #666;
}

.service-card .btn {
  background-color: #007bff;
  border-color: #007bff;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  text-decoration: none;
  color: #fff;
}

.service-card .btn:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

.footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  position: absolute;
  bottom: 0;
  width: 100%;
}

.footer p {
  margin-bottom: 0;
}
</style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        Chakrikujo.com
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Services</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="text-center">Our Services</h1>
      <p class="text-center">Choose from our comprehensive range of professional services to meet your job portfolio needs.</p>
    </div>
  </section>
  <!-- Services Section -->
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service-card">
            <div class="service-icon">
              <i class="fa fa-laptop fa-3x"></i>
            </div>
            <h3><strong>24/7 Live Chat Support</strong></h3>
            <p>Our dedicated team is available 24/7 to provide immediate assistance through our live chat service. Get support anytime, day or night, and experience prompt solutions to your queries.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <div class="service-icon">
              <i class="fa fa-mobile fa-3x"></i>
            </div>
            <h3><strong>Robust Data Security</strong></h3>
            <p>Rest easy knowing that your data is secure with our advanced encryption techniques. We prioritize data confidentiality, employing industry-standard security measures to protect your sensitive information from unauthorized access.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <div class="service-icon">
              <i class="fa fa-code fa-3x"></i>
            </div>
            <h3><strong>Professional Resume Templates</strong></h3>
            <p>Enhance your resume with our professionally designed templates tailored for today's competitive job market. Our service simplifies resume updates, ensuring your skills and experience are effectively showcased. Trust us to create a standout, industry-ready resume for potential employers.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer">
    <div class="container text-center">
      <p>&copy; 2023 Chakrikujo.com. All rights reserved.</p>
    </div>
  </footer>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
