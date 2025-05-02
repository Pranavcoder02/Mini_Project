
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CareerPath - Student Guidance</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>




<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand" href="#">CareerPath</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="after-10th.html">After 10th</a></li>
        <li class="nav-item"><a class="nav-link" href="after-12th.html">After 12th</a></li>
        <li class="nav-item"><a class="nav-link" href="cse-graduates.html">CSE Graduates</a></li>
        <li class="nav-item"><a class="nav-link" href="resources.html">Resources</a></li>
        <li class="nav-item"><a href="logout.php" class="btn btn-logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 hero-text text-center text-md-start">
       <h1 id="hero-typing" class="hero-title"></h1>
        <p class="hero-subtitle">Find the perfect path after 10th, 12th, or as a CSE graduate with personalized resources.</p>
        <div class="mt-4">
          <a href="#path-options" class="btn btn-primary">Explore Paths</a>
          <a href="resources.html" class="btn btn-outline-primary ms-2">View Resources</a>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center">
        <img src="homepage.jpg" alt="Career Guidance" class="hero-image" width="500px">
      </div>
    </div>
  </div>
</section>

    <?php
    if (isset($_SESSION['user_name'])) {
        echo '<div class="container my-4 text-center animate__animated animate__fadeInDown">';
        echo '<h3>Welcome, ' . $_SESSION['user_name'] . ' 🎉</h3>';
        echo '</div>';
    }
    ?>


<!-- Path Options -->
<section class="path-options py-5" id="path-options">
  <div class="container">
    <h2 class="text-center mb-5">Choose Your Educational Stage</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-mortarboard feature-icon"></i>
            <h3 class="card-title">After 10th</h3>
            <p class="card-text">Explore career options after completing your 10th standard.</p>
            <a href="after-10th.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-book feature-icon"></i>
            <h3 class="card-title">After 12th</h3>
            <p class="card-text">Discover potential paths after your 12th grade completion.</p>
            <a href="after-12th.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-pc-display feature-icon"></i>
            <h3 class="card-title">CSE Graduates</h3>
            <p class="card-text">Career opportunities for Computer Science Engineering graduates.</p>
            <a href="cse-graduates.html" class="btn btn-primary">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features-section py-5 bg-light">
  <div class="container text-center">
    <h2 class="section-title mb-5">What We Offer</h2>
    <div class="row">
      <div class="col-md-3 mb-4">
        <i class="bi bi-youtube feature-icon"></i>
        <h5 class="mt-3">Video Resources</h5>
        <p>Curated YouTube videos to help you learn and grow.</p>
      </div>
      <div class="col-md-3 mb-4">
        <i class="bi bi-graph-up-arrow feature-icon"></i>
        <h5 class="mt-3">Career Roadmaps</h5>
        <p>Step-by-step guides to reach your career goals.</p>
      </div>
      <div class="col-md-3 mb-4">
        <i class="bi bi-people feature-icon"></i>
        <h5 class="mt-3">Mentorship</h5>
        <p>Connect with professionals in your desired field.</p>
      </div>
      <div class="col-md-3 mb-4">
        <i class="bi bi-clipboard-data feature-icon"></i>
        <h5 class="mt-3">Skill Assessment</h5>
        <p>Identify your strengths and areas for improvement.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row py-4">
      <div class="col-md-6 text-center text-md-start">
        <h5>CareerPath</h5>
        <p>Guiding students towards their perfect career journey.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
    <div class="border-top pt-3">
      <p class="mb-0 small text-center">© 2025 CareerPath. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const text = "Career Guidance for Every Stage";
  const typingSpeed = 100;
  let i = 0;

  function typeWriter() {
    if (i < text.length) {
      document.getElementById("hero-typing").innerHTML += text.charAt(i);
      i++;
      setTimeout(typeWriter, typingSpeed);
    }
  }

  typeWriter();
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const urlParams = new URLSearchParams(window.location.search);
  const loginStatus = urlParams.get('login');
  const logoutStatus = urlParams.get('logout');
  const registerStatus = urlParams.get('register');

  if (loginStatus === 'failed') {
    Swal.fire({
      icon: 'error',
      title: 'Login Failed!',
      text: 'Invalid email or password. Please try again.',
    });
  } else if (loginStatus === 'success') {
    Swal.fire({
      icon: 'success',
      title: 'Login Successful!',
      text: 'Welcome back!',
      timer: 2000,
      showConfirmButton: false
    });
  }

  if (logoutStatus === 'success') {
    Swal.fire({
      icon: 'success',
      title: 'Logged Out!',
      text: 'You have been successfully logged out.',
      timer: 2000,
      showConfirmButton: false
    });
  }

  if (registerStatus === 'success') {
    Swal.fire({
      icon: 'success',
      title: 'Registration Successful!',
      text: 'You can now log in with your new account!',
      timer: 2000,
      showConfirmButton: false
    });
  } else if (registerStatus === 'failed') {
    Swal.fire({
      icon: 'error',
      title: 'Registration Failed!',
      text: 'Something went wrong. Please try again.',
    });
  }
});
</script>

</body>
</html>
