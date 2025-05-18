<?php
session_start();
if (isset($_GET['ref']) && is_numeric($_GET['ref'])) {
    $_SESSION['ref'] = $_GET['ref'];
}
?>

<?php
session_start();
if (isset($_GET['ref']) && is_numeric($_GET['ref'])) {
    $_SESSION['ref'] = $_GET['ref'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register for Course - Zanzan Academy</title>
  <meta name="description" content="Register for Zanzan Academy's digital skills training programs and start your journey to digital success.">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/registration.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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
          <span></span>
          <span></span>
          <span></span>
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

  <!-- Registration Section -->
  <section class="registration-section">
    <div class="container">
      <div class="registration-container">
        <div class="registration-header">
          <h1>Register for Your Course</h1>
          <p>Complete your registration to begin your journey with Zanzan Academy</p>
        </div>

        <div class="registration-content">
          <div class="registration-form-container">
            <form id="registrationForm" class="registration-form" method="POST" action="php/registration.php">
              <div class="form-progress">
                <div class="progress-step active" data-step="1">
                  <div class="step-number">1</div>
                  <div class="step-text">Personal Info</div>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step" data-step="2">
                  <div class="step-number">2</div>
                  <div class="step-text">Course Details</div>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step" data-step="3">
                  <div class="step-number">3</div>
                  <div class="step-text">Review</div>
                </div>
              </div>

              <!-- Step 1: Personal Information -->
              <div class="form-step active" id="step1">
                <h2>Personal Information</h2>

                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" id="fullName" name="fullName" required placeholder="Enter your full name">
                </div>

                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" id="email" name="email" required placeholder="Enter your email address">
                </div>

                <div class="form-group">
                  <label for="email">Password</label>
                  <input type="text" id="password" name="password" required placeholder="Choose a pawword">
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" name="country" required>
                      <option value="" disabled selected>Select your country</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Kenya">Kenya</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required placeholder="Enter your city">
                  </div>
                </div>

                <div class="form-buttons">
                  <button type="button" class="btn btn-primary next-step">Continue</button>
                </div>
              </div>

              <!-- Step 2: Course Details -->
              <div class="form-step" id="step2">
                <h2>Course Details</h2>

                <div class="form-group">
                  <label for="selectedProgram">Selected Program</label>
                  <select id="selectedProgram" name="selectedProgram" required>
                    <option value="" disabled selected>Select your program</option>
                    <option value="Digital Creativity & Social Media Economy">Digital Creativity & Social Media Economy</option>
                    <option value="Entrepreneurship and Business Development">Entrepreneurship and Business Development</option>
                    <option value="Digital Marketing & Professional Online Services">Digital Marketing & Professional Online Services</option>
                    <option value="Professional Writing, Publishing & Copyright Literacy">Professional Writing, Publishing & Copyright Literacy</option>
                    <option value="Corporate Tech Skills, Digital Business Administration and Cybersecurity Education">Corporate Tech Skills, Digital Business Administration and Cybersecurity Education</option>
                    <option value="Artificial Intelligence Literacy">Artificial Intelligence Literacy</option>
                    <option value="Leadership and Career Development">Leadership and Career Development</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="paymentPlan">Payment Plan</label>
                  <select id="paymentPlan" name="paymentPlan" required>
                    <option value="" disabled selected>Select payment plan</option>
                    <option value="single">Single Program (₦50,000 / $35)</option>
                    <option value="bundle">Bundle - All Programs (₦250,000 / $175)</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="currency">Currency</label>
                  <div class="radio-group">
                    <label class="radio-container">
                      <input type="radio" name="currency" value="NGN" checked>
                      <span class="radio-label">Nigerian Naira (₦)</span>
                    </label>
                    <label class="radio-container">
                      <input type="radio" name="currency" value="USD">
                      <span class="radio-label">US Dollar ($)</span>
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="referralCode">Referral Code (Optional)</label>
                  <input type="text" id="referralCode" name="referralCode" placeholder="Enter referral code if you have one" value="<?php echo isset($_SESSION['ref']) ? $_SESSION['ref'] : ''; ?>">
                </div>

                <div class="form-buttons">
                  <button type="button" class="btn btn-outline prev-step">Back</button>
                  <button type="button" class="btn btn-primary next-step">Continue</button>
                </div>
              </div>

              <!-- Step 3: Review Information -->
              <div class="form-step" id="step3">
                <h2>Review Your Information</h2>

                <div class="review-info">
                  <div class="review-section">
                    <h3>Personal Information</h3>
                    <div class="review-item">
                      <span class="review-label">Name:</span>
                      <span class="review-value" id="reviewName"></span>
                    </div>
                    <div class="review-item">
                      <span class="review-label">Email:</span>
                      <span class="review-value" id="reviewEmail"></span>
                    </div>
                    <div class="review-item">
                      <span class="review-label">Phone:</span>
                      <span class="review-value" id="reviewPhone"></span>
                    </div>
                    <div class="review-item">
                      <span class="review-label">Location:</span>
                      <span class="review-value" id="reviewLocation"></span>
                    </div>
                  </div>

                  <div class="review-section">
                    <h3>Course Details</h3>
                    <div class="review-item">
                      <span class="review-label">Program:</span>
                      <span class="review-value" id="reviewProgram"></span>
                    </div>
                    <div class="review-item">
                      <span class="review-label">Payment Plan:</span>
                      <span class="review-value" id="reviewPaymentPlan"></span>
                    </div>
                    <div class="review-item">
                      <span class="review-label">Currency:</span>
                      <span class="review-value" id="reviewCurrency"></span>
                    </div>
                    <div class="review-item">
                      <span class="review-label">Amount:</span>
                      <span class="review-value" id="reviewAmount"></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="checkbox-container">
                    <input type="checkbox" id="termsAgreement" name="termsAgreement" required>
                    <span class="checkbox-label">I agree to the <a href="#" class="terms-link">Terms and Conditions</a> and <a href="#" class="terms-link">Privacy Policy</a></span>
                  </label>
                </div>

                <div class="form-buttons">
                  <button type="button" class="btn btn-outline prev-step">Back</button>
                  <button type="submit" class="btn btn-accent" id="proceedToPayment">Proceed to Payment</button>
                </div>
              </div>
            </form>
          </div>

          <div class="registration-sidebar">
            <div class="course-summary">
              <h3>Your Selected Course</h3>
              <div class="selected-course" id="sidebarCourse">
                <div class="course-placeholder">
                  <p>Your selected course will appear here</p>
                </div>
              </div>

              <div class="course-price">
                <div class="price-row">
                  <span>Program Fee:</span>
                  <span id="programFee">₦50,000</span>
                </div>
                <div class="price-row total">
                  <span>Total:</span>
                  <span id="totalAmount">₦50,000</span>
                </div>
              </div>
            </div>

            <div class="registration-benefits">
              <h3>What You'll Get</h3>
              <ul class="benefits-list">
                <li><i class="icon-check-circle"></i> Full access to course materials</li>
                <li><i class="icon-check-circle"></i> 3 months of mentorship</li>
                <li><i class="icon-check-circle"></i> Certificate upon completion</li>
                <li><i class="icon-check-circle"></i> Community access</li>
                <li><i class="icon-check-circle"></i> Lifetime updates</li>
              </ul>
            </div>

            <div class="need-help">
              <h3>Need Help?</h3>
              <p>Contact our support team at <a href="mailto:support@zanzanacademy.com">support@zanzanacademy.com</a> or call <a href="tel:+1234567890">+123-456-7890</a></p>
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
            <a href="#" class="social-link">
              <i class="icon-facebook"></i>
            </a>
            <a href="#" class="social-link">
              <i class="icon-instagram"></i>
            </a>
            <a href="#" class="social-link">
              <i class="icon-twitter"></i>
            </a>
            <a href="#" class="social-link">
              <i class="icon-linkedin"></i>
            </a>
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

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <script src="js/scripts.js"></script>
  <script src="js/registration.js"></script>
</body>

</html>