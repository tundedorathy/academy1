<?php
session_start();
require 'php/db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // redirect to login page if not logged in
    exit();
}

// Fetch user data from the database
$userId = $_SESSION['user_id'];

try {
    $stmt = $pdo->prepare("SELECT fullName, email, phone, country, city, selectedProgram, amount, paymentPlan, payment_status, currency, ownReferralCode FROM users WHERE id = :id LIMIT 1");
    $stmt->execute([':id' => $userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "User not found.";
        exit();
    }

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome, <?= htmlspecialchars($user['fullName']) ?></title>
  <meta name="description" content="Access your courses and manage your learning journey at Zanzan Academy.">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
  <!-- Dashboard Header -->
  <header class="dashboard-header">
    <div class="header-left">
      <button class="menu-toggle" id="menuToggle">
        <i class="fas fa-bars"></i>
      </button>
      <div class="logo">
        <img src="images/logo.jpg" alt="Zanzan Academy Logo" width="40" height="40">
        <span class="logo-text">Zanzan Academy</span>
      </div>
    </div>
    <div class="header-right">
      <div class="user-menu">
        <button class="user-menu-button" id="userMenuButton">
          <div class="user-avatar">
            <img src="images/avatar-placeholder.jpg" alt="User Avatar">
          </div>
          <span class="user-name">John Doe</span>
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="user-dropdown" id="userDropdown">
          <ul>
            <li><a href="#"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Account Settings</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i> Help Center</a></li>
            <li class="divider"></li>
            <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- Dashboard Layout -->
  <div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="dashboard-sidebar" id="dashboardSidebar">
      <nav class="sidebar-nav">
        <ul class="nav-menu">
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="fas fa-home"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-book-open"></i>
              <span>My Courses</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-certificate"></i>
              <span>Certificates</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-receipt"></i>
              <span>Payment History</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-headset"></i>
              <span>Support</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="dashboard-main">
      <!-- Welcome Section -->
      <section class="welcome-section">
        <div class="welcome-content">
          <h1>Welcome back,  <?= htmlspecialchars($user['fullName']) ?>!</h1>
          <p>Here are your enrolled courses and program details.</p>
        </div>
      </section>

      <!-- My Courses -->
      <section class="dashboard-section">
        <div class="section-header">
          <h2>My Enrolled Courses</h2>
        </div>
        <div class="enrolled-courses">
          <div class="course-item">
            <div class="course-header">
              <div class="course-image">
                <img src="images/digital.jpg" alt="<?= htmlspecialchars($user['selectedProgram']) ?>">
              </div>
              <div class="course-title-section">
                <h3 class="course-title"><?= htmlspecialchars($user['selectedProgram']) ?></h3>
              </div>
            </div>
            <div class="course-details">
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-users"></i> Cohort:</span>
                <span class="detail-value">September 2023 - Group A</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-clock"></i> Duration:</span>
                <span class="detail-value">12 weeks (24 hours total)</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-calendar-alt"></i> Start Date:</span>
                <span class="detail-value">March 15, 2023</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-calendar-check"></i> End Date:</span>
                <span class="detail-value">June 7, 2023</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-credit-card"></i> Payment:</span>
                <span class="detail-value"><?= htmlspecialchars($user['amount']) ?> (<?= htmlspecialchars($user['payment_status']) ?>)</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-receipt"></i> Receipt:</span>
                <a href="#" class="detail-link">View Receipt</a>
              </div>
            </div>
            <div class="course-actions">
              <a href="#" class="btn btn-outline">View Course Details</a>
            </div>
          </div>

          <div class="course-item">
            <div class="course-header">
              <div class="course-image">
                <img src="images/entrepreneursship.jpg" alt="Entrepreneurship and Business Development">
              </div>
              <div class="course-title-section">
                <h3 class="course-title">Entrepreneurship and Business Development</h3>
              </div>
            </div>
            <div class="course-details">
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-users"></i> Cohort:</span>
                <span class="detail-value">Winter 2023 - Group B</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-clock"></i> Duration:</span>
                <span class="detail-value">10 weeks (20 hours total)</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-calendar-alt"></i> Start Date:</span>
                <span class="detail-value">January 10, 2023</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-calendar-check"></i> End Date:</span>
                <span class="detail-value">March 21, 2023</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-credit-card"></i> Payment:</span>
                <span class="detail-value">$599 (Payment Plan: $199/month)</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-receipt"></i> Receipt:</span>
                <a href="#" class="detail-link">View Receipt</a>
              </div>
            </div>
            <div class="course-actions">
              <a href="#" class="btn btn-outline">View Course Details</a>
            </div>
          </div>

          <div class="course-item">
            <div class="course-header">
              <div class="course-image">
                <img src="images/artificial intelligence.jpg" alt="Artificial Intelligence Literacy">
              </div>
              <div class="course-title-section">
                <h3 class="course-title">Artificial Intelligence Literacy</h3>
              </div>
            </div>
            <div class="course-details">
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-users"></i> Cohort:</span>
                <span class="detail-value">Spring 2023 - Group C</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-clock"></i> Duration:</span>
                <span class="detail-value">8 weeks (16 hours total)</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-calendar-alt"></i> Start Date:</span>
                <span class="detail-value">April 5, 2023</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-calendar-check"></i> End Date:</span>
                <span class="detail-value">May 31, 2023</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-credit-card"></i> Payment:</span>
                <span class="detail-value">$399 (Bundle Discount Applied)</span>
              </div>
              <div class="detail-item">
                <span class="detail-label"><i class="fas fa-receipt"></i> Receipt:</span>
                <a href="#" class="detail-link">View Receipt</a>
              </div>
            </div>
            <div class="course-actions">
              <a href="#" class="btn btn-outline">View Course Details</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Certificates Section -->
      <section class="dashboard-section">
        <div class="section-header">
          <h2>My Certificates</h2>
        </div>
        <div class="certificates-container">
          <div class="certificate-item">
            <div class="certificate-icon">
              <i class="fas fa-certificate"></i>
            </div>
            <div class="certificate-details">
              <h3>Digital Creativity & Social Media Economy</h3>
              <p>Issued on: June 7, 2023</p>
              <div class="certificate-actions">
                <a href="#" class="btn btn-sm btn-outline">View Certificate</a>
                <a href="#" class="btn btn-sm btn-outline">Download PDF</a>
              </div>
            </div>
          </div>
          
          <div class="certificate-item pending">
            <div class="certificate-icon">
              <i class="fas fa-hourglass-half"></i>
            </div>
            <div class="certificate-details">
              <h3>Entrepreneurship and Business Development</h3>
              <p>Status: Course in progress</p>
              <p class="certificate-note">Certificate will be available after course completion</p>
            </div>
          </div>
          
          <div class="certificate-item pending">
            <div class="certificate-icon">
              <i class="fas fa-hourglass-half"></i>
            </div>
            <div class="certificate-details">
              <h3>Artificial Intelligence Literacy</h3>
              <p>Status: Course in progress</p>
              <p class="certificate-note">Certificate will be available after course completion</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Payment Summary -->
      <section class="dashboard-section">
        <div class="section-header">
          <h2>Payment Summary</h2>
        </div>
        <div class="payment-summary">
          <div class="summary-card">
            <div class="summary-header">
              <h3>Total Investment</h3>
              <span class="summary-amount">$1,497</span>
            </div>
            <div class="summary-details">
              <div class="summary-item">
                <span>Digital Creativity & Social Media Economy</span>
                <span>$499</span>
              </div>
              <div class="summary-item">
                <span>Entrepreneurship and Business Development</span>
                <span>$599</span>
              </div>
              <div class="summary-item">
                <span>Artificial Intelligence Literacy</span>
                <span>$399</span>
              </div>
              <div class="summary-item discount">
                <span>Bundle Discount</span>
                <span>-$100</span>
              </div>
            </div>
            <div class="summary-footer">
              <a href="#" class="btn btn-outline btn-sm">View Payment History</a>
              <a href="#" class="btn btn-outline btn-sm">Download Tax Statement</a>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <script src="js/scripts.js"></script>
  <script src="js/dashboard.js"></script>
</body>
</html>