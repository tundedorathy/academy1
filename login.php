<?php
    require 'php/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Zanzan Academy</title>
  <meta name="description" content="Login to your Zanzan Academy account to access your courses, track your progress, and continue your learning journey.">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="container">
    <div class="header-content">
      <div class="logo">
        <img src="images/logo.jpg" alt="Zanzan Academy Logo" width="75" height="100">
        <span class="logo-text">Zanzan Academy</span>
      </div>
      <nav class="main-nav">
        <a href="index.html#about" class="nav-link">About</a>
        <a href="index.html#programs" class="nav-link">Programs</a>
        <a href="index.html#testimonials" class="nav-link">Testimonials</a>
        <a href="index.html#contact" class="nav-link">Contact</a>
      </nav>
      <a href="index.html"><button class="btn btn-outline">Back to Home</button></a>
      <button class="mobile-menu-btn" id="mobileMenuBtn">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <div class="container">
    <nav class="mobile-nav">
      <a href="index.html#about" class="mobile-nav-link">About</a>
      <a href="index.html#programs" class="mobile-nav-link">Programs</a>
      <a href="index.html#testimonials" class="mobile-nav-link">Testimonials</a>
      <a href="index.html#contact" class="mobile-nav-link">Contact</a>
      <a href="index.html"><button class="btn btn-outline mobile-btn">Back to Home</button></a>
    </nav>
  </div>
</div>

<!-- Login Section -->
<section class="login-section">
  <div class="container">
    <div class="login-container">
      <div class="login-content">
        <div class="login-form-container">
          <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Log in to access your courses and continue your learning journey</p>
          </div>

          <form id="loginForm" class="login-form" action="php/login_logic.php" method="POST">
            <div class="form-group">
              <label for="email">Email Address</label>
              <div class="input-with-icon">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">
              </div>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <div class="input-with-icon">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
                <button type="button" class="toggle-password" id="togglePassword">
                  <i class="fas fa-eye"></i>
                </button>
              </div>
            </div>

            <div class="form-options">
              <label class="checkbox-container">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <span class="checkbox-label">Remember me</span>
              </label>
              <a href="forgot-password.html" class="forgot-password">Forgot password?</a>
            </div>

            <div class="form-buttons">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>

            <div class="login-divider"><span>or</span></div>

            <div class="social-login">
              <button type="button" class="btn btn-social btn-google">
                <i class="fab fa-google"></i> Continue with Google
              </button>
            </div>

            <div class="register-link">
              <p>Don't have an account? <a href="registration.html">Register Now</a></p>
            </div>
          </form>
        </div>

        <div class="login-image">
          <img src="images/learning.png" alt="Learning at Zanzan Academy">
          <div class="login-testimonial">
            <p>"Zanzan Academy transformed my career. I went from struggling to find work to running my own successful freelance business in just 3 months!"</p>
            <div class="testimonial-author">
              <div class="testimonial-avatar"></div>
              <div class="testimonial-info">
                <h4>Sarah Johnson</h4>
                <p>Digital Entrepreneur</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-about">
        <div class="footer-logo">
          <img src="images/logo.jpg" alt="Zanzan Academy Logo" width="40" height="40">
          <span>Zanzan Academy</span>
        </div>
        <p>Empowering young Africans with future-proof digital skills for the creative economy.</p>
        <div class="social-links">
          <a href="#" class="social-link"><i class="icon-facebook"></i></a>
          <a href="#" class="social-link"><i class="icon-instagram"></i></a>
          <a href="#" class="social-link"><i class="icon-twitter"></i></a>
          <a href="#" class="social-link"><i class="icon-linkedin"></i></a>
        </div>
      </div>
      <div class="footer-links">
        <h3>Programs</h3>
        <ul>
          <li><a href="index.html#programs">Creative Design</a></li>
          <li><a href="index.html#programs">Digital Entrepreneurship</a></li>
          <li><a href="index.html#programs">Digital Marketing</a></li>
          <li><a href="index.html#programs">Professional Writing</a></li>
          <li><a href="index.html#programs">Data Entry & Finance</a></li>
          <li><a href="index.html#programs">Business Leadership</a></li>
        </ul>
      </div>
      <div class="footer-links">
        <h3>Resources</h3>
        <ul>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Success Stories</a></li>
          <li><a href="#">Free Workshops</a></li>
          <li><a href="#">Career Resources</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h3>Contact</h3>
        <ul>
          <li>Email: info@zanzanacademy.com</li>
          <li>Phone: +123-456-7890</li>
          <li>Address: 123 Digital Avenue, Tech City</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© <span id="currentYear"></span> Zanzan Academy. All rights reserved.</p>
      <div class="footer-legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
        <a href="#">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>

<!-- JS -->
<script src="js/scripts.js"></script>
<script src="js/login.js"></script>
<script>
  // Password toggle
  document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;
    this.querySelector('i').classList.toggle('fa-eye');
    this.querySelector('i').classList.toggle('fa-eye-slash');
  });

  // Set current year in footer
  document.getElementById('currentYear').textContent = new Date().getFullYear();
</script>

</body>
</html>
