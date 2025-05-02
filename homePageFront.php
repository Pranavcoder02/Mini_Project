<?php
session_start();
$showLogoutAlert = false;

if (isset($_SESSION['show_logout_alert'])) {
  $showLogoutAlert = true;
  unset($_SESSION['show_logout_alert']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CareerPath - Student Guidance</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom CSS -->
   <!-- SweetAlert2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <link rel="stylesheet" href="homePageFront.css">
</head>
<body>

<?php if ($showLogoutAlert): ?>
  <div class="alert alert-success text-center" role="alert">
    Successfully Logged Out!
  </div>
<?php endif; ?>


  <!-- <header>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
    <a href="logout.php">Logout</a>
  </header> -->

  <!-- Header & Navigation -->
  <header>
    <div class="container">
      <div class="nav-wrapper">
        <div class="logo">
          <a href="homePageFront.php">CareerPath</a>
        </div>
        <div class="auth-buttons">
        <?php if (isset($_SESSION['email'])): ?>
          <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
          <a href="logout.php" class="btn btn-outline">Logout</a>
        <?php else: ?>
          <a href="login.php" class="btn btn-outline">Login</a>
          <a href="register.php" class="btn btn-primary">Register</a>
        <?php endif; ?>
</div>

</div>

        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <h1>Navigate Your Perfect Career Path</h1>
          <p>Personalized guidance for students at every educational stage - from 10th standard to graduation and beyond.</p>
          <div class="hero-buttons">
            <a href="#career-paths" class="btn btn-primary">Explore Paths</a>
           
          </div>
        </div>
        <div class="hero-image">
          <img src="front.jpg" alt="Career guidance illustration">
        </div>
      </div>
    </div>
  </section>

  

  <!-- Education Paths Section -->
  <section class="education-paths" id="career-paths">
    <div class="container">
      <h2 class="section-title">Choose Your Educational Stage</h2>
      <div class="path-cards">
        <div class="path-card">
          <div class="card-icon">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <h3>After 10th Standard</h3>
          <p>Discover the right stream choice and explore career options after completing your 10th standard.</p>
         
        </div>

        <div class="path-card">
          <div class="card-icon">
            <i class="fas fa-book"></i>
          </div>
          <h3>After 12th Standard</h3>
          <p>Explore college options, courses, and career paths available after completing your 12th grade.</p>
          
        </div>

        <div class="path-card">
          <div class="card-icon">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3>CSE Graduates</h3>
          <p>Find specialized career tracks, job opportunities, and advanced learning paths for CS engineers.</p>
          
        </div>
      </div>
    </div>
  </section>



  <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="container">
      <h2 class="section-title">Student Success Stories</h2>
      <div class="testimonial-slider">
        <div class="testimonial">
          <div class="testimonial-content">
            <p>"CareerPath helped me make the right decision after my 10th standard. The resources and guidance were invaluable."</p>
            <div class="testimonial-author">
             
              <div>
                <h4>Priya Sharma</h4>
                <p>Science Stream Student</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="testimonial">
          <div class="testimonial-content">
            <p>"The roadmaps provided by CareerPath gave me clarity about what I needed to do after 12th to pursue engineering."</p>
            <div class="testimonial-author">
            
              <div>
                <h4>Rahul Mehta</h4>
                <p>Engineering Student</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="testimonial">
          <div class="testimonial-content">
            <p>"As a CSE graduate, I was confused about specialization. CareerPath's resources helped me find my niche in AI."</p>
            <div class="testimonial-author">
              
              <div>
                <h4>Anjali Patel</h4>
                <p>Software Engineer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter">
    <div class="container">
      <div class="newsletter-content">
        <h2>Stay Updated with CareerPath</h2>
        <p>Receive the latest career guidance, resources, and opportunities directly in your inbox.</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-content">
        <div class="footer-about">
          <h3>CareerPath</h3>
          <p>Guiding students towards their perfect career journey with personalized resources and mentorship.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        
        
        
        <div class="footer-contact">
          <h3>Contact Us</h3>
          <p><i class="fas fa-envelope"></i> support@careerpath.com</p>
          <p><i class="fas fa-phone"></i> +91 9876543210</p>
          <p><i class="fas fa-map-marker-alt"></i> Bangalore, India</p>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; 2025 CareerPath. All rights reserved.</p>
      </div>
    </div>
  </footer>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Check if logout_success cookie exists
    if (document.cookie.includes('logout_success=1')) {
      // Show SweetAlert
      Swal.fire({
        icon: 'success',
        title: 'Logged Out',
        text: 'You have successfully logged out!',
        showConfirmButton: false,
        timer: 2000
      });

      // Remove the cookie after showing
      document.cookie = "logout_success=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }
  });
</script>

</body>
</html>
