<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Segmento</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="images/logo.png" alt="Segmento Logo" class="logo-image">
        </div>

        <ul class="nav-menu">
            <li><a href="index.html" class="nav-link ">Home</a></li>
            <li><a href="about.html" class="nav-link">About</a></li>
            
            <!-- FIXED: Products Dropdown -->
            <li class="dropdown">
                <span class="nav-link dropdown-toggle">Products <span class="dropdown-arrow">▼</span></span>
                <ul class="dropdown-menu">
                    
                    <li><a href="Products.html" class="dropdown-item">Data Classification</a></li>
                </ul>
            </li>
            
            <!-- NEW: Solution Dropdown -->
            <li class="dropdown">
                <span class="nav-link dropdown-toggle">Solution <span class="dropdown-arrow">▼</span></span>
                <ul class="dropdown-menu">
          
                    <li><a href="media.html" class="dropdown-item">Media</a></li>
                    <li><a href="advanced.html" class="dropdown-item">Advanced Features</a></li>
                </ul>
            </li>
            
            <!-- NEW: Resources Dropdown -->
            <li class="dropdown">
                <span class="nav-link dropdown-toggle">Resources <span class="dropdown-arrow">▼</span></span>
                <ul class="dropdown-menu">
                    <li><a href="blogs.html" class="dropdown-item">Blogs</a></li>
                    <li><a href="case-studies.html" class="dropdown-item">Case Studies</a></li>
                    
                </ul>
            </li>
            
            <li><a href="contact.php" class="nav-link active">Contact</a></li>
        </ul>
    </div>
</nav>



    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Contact Details</h3>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>+91 1234567891</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>hello@segumento.com</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>xyz India 400001</div>
                    </div>
                </div>
                <form class="contact-form" action="save_contact.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email"  name="email"placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text"name="company" placeholder="Company Name">
                        <textarea name="message" placeholder="Tell us about your needs..." rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        Send Message
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        
            <div class="footer-bottom">
                <p>&copy; 2025 Segmento. All rights reserved.</p>
            </div>
        </div>
    </footer>

  
</body>
</html>
