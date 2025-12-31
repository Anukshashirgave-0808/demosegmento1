// SEGMENTO POC - Interactive JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Mobile Menu Toggle
    const hamburgerBtn = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');
    
    if (hamburgerBtn && navMenu) {
        hamburgerBtn.addEventListener('click', function() {
            navMenu.classList.toggle('mobile-active');
            hamburgerBtn.classList.toggle('active');
        });
        
        // Close mobile menu when clicking link
        navMenu.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('mobile-active');
                hamburgerBtn.classList.remove('active');
            });
        });
    }
    
    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Navbar Scroll Effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.12)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.08)';
        }
    });
    
    // Form Submission Handler (Contact Page)
    const contactForms = document.querySelectorAll('.contact-form');
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            const submitBtn = form.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Fake API delay
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
                submitBtn.style.background = 'linear-gradient(135deg, #10b981, #34d399)';
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    submitBtn.style.background = '';
                    form.reset();
                    alert('Thank you! Your message has been sent. We\'ll respond within 24 hours.');
                }, 2000);
            }, 1500);
        });
    });
    
    // Hero Stats Counter Animation
    function animateCounters() {
        const stats = document.querySelectorAll('.stat-number');
        stats.forEach(stat => {
            const target = parseFloat(stat.textContent.replace(/[^\d.-]/g, ''));
            if (target && window.scrollY + window.innerHeight > stat.parentElement.offsetTop) {
                const increment = target / 100;
                let current = 0;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = stat.textContent;
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current) + (target > 1000 ? 'K+' : '%');
                    }
                }, 30);
            }
        });
    }
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe all sections for fade-in animation
    document.querySelectorAll('.value-card, .mission-card, .stat-item, .contact-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s cubic-bezier(0.23, 1, 0.32, 1)';
        observer.observe(el);
    });
    
    // Parallax effect for hero circles
    window.addEventListener('scroll', function
