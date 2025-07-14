<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Company Info -->
            <div class="footer-section">
                <div class="footer-logo">
                    <span class="footer-logo-text">IT Carolina</span>
                </div>
                <p class="footer-tagline">
                    Your trusted IT partner in Charlotte, NC. Professional computer repair and IT support services for homes and businesses.
                </p>
                <div class="footer-contact">
                    <div class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>(704) 520-0809</span>
                    </div>
                    <div class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>support@itcarolina.com</span>
                    </div>
                    <div class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Charlotte, NC Area</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/services'); ?>" class="footer-link">All Services</a></li>
                    <li><a href="<?php echo home_url('/services/home-office'); ?>" class="footer-link">Home Support</a></li>
                    <li><a href="<?php echo home_url('/services/business'); ?>" class="footer-link">Business IT</a></li>
                    <li><a href="<?php echo home_url('/services/printer'); ?>" class="footer-link">Printer Support</a></li>
                    <li><a href="<?php echo home_url('/services/web-hosting'); ?>" class="footer-link">Web Services</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="footer-section">
                <h4 class="footer-title">Company</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/about'); ?>" class="footer-link">About Us</a></li>
                    <li><a href="<?php echo home_url('/pricing'); ?>" class="footer-link">Pricing</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>" class="footer-link">Blog</a></li>
                    <li><a href="<?php echo home_url('/faq'); ?>" class="footer-link">FAQ</a></li>
                    <li><a href="#contact" onclick="scrollToContact()" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="footer-section">
                <h4 class="footer-title">Support</h4>
                <ul class="footer-links">
                    <li><a href="tel:+17045200809" class="footer-link">Emergency Support</a></li>
                    <li><a href="<?php echo home_url('/remote-support'); ?>" class="footer-link">Remote Help</a></li>
                    <li><a href="<?php echo home_url('/privacy-policy'); ?>" class="footer-link">Privacy Policy</a></li>
                    <li><a href="<?php echo home_url('/terms-of-service'); ?>" class="footer-link">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p class="footer-copyright">
                    © <?php echo date('Y'); ?> IT Carolina. All rights reserved.
                </p>
                <div class="footer-legal">
                    <a href="<?php echo home_url('/privacy-policy'); ?>" class="footer-legal-link">Privacy</a>
                    <a href="<?php echo home_url('/terms-of-service'); ?>" class="footer-legal-link">Terms</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
// Navigation scroll effect
let isScrolled = false;

function updateNavbar() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 10) {
        if (!isScrolled) {
            navbar.classList.add('scrolled');
            isScrolled = true;
        }
    } else {
        if (isScrolled) {
            navbar.classList.remove('scrolled');
            isScrolled = false;
        }
    }
}

// Mobile menu toggle
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.getElementById('navbar');
    
    mobileMenu.classList.toggle('active');
    navbar.classList.toggle('mobile-open');
    
    // Prevent body scroll when menu is open
    if (mobileMenu.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}

// Mobile dropdown toggle
function toggleMobileDropdown() {
    const dropdown = document.getElementById('mobile-dropdown');
    const trigger = document.querySelector('.mobile-dropdown-trigger');
    
    dropdown.classList.toggle('active');
    trigger.classList.toggle('active');
}

// Smooth scroll functions
function scrollToContact() {
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
    
    // Close mobile menu if open
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu.classList.contains('active')) {
        toggleMobileMenu();
    }
}

function scrollToServices() {
    const servicesSection = document.getElementById('services');
    if (servicesSection) {
        servicesSection.scrollIntoView({ behavior: 'smooth' });
    }
}

// Event listeners
window.addEventListener('scroll', updateNavbar);
window.addEventListener('resize', function() {
    // Close mobile menu on resize
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu.classList.contains('active')) {
        toggleMobileMenu();
    }
});

// Desktop dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.nav-dropdown');
    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
    
    dropdown.addEventListener('mouseenter', function() {
        dropdownMenu.style.display = 'block';
        setTimeout(() => {
            dropdownMenu.classList.add('active');
        }, 10);
    });
    
    dropdown.addEventListener('mouseleave', function() {
        dropdownMenu.classList.remove('active');
        setTimeout(() => {
            dropdownMenu.style.display = 'none';
        }, 300);
    });
});

// Contact form handling
<?php if (function_exists('handle_contact_form_submission')): ?>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(contactForm);
            formData.append('action', 'handle_contact_form');
            formData.append('nonce', '<?php echo wp_create_nonce('contact_form_nonce'); ?>');
            
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    contactForm.reset();
                    showNotification('Message sent successfully!', 'success');
                } else {
                    showNotification('Error sending message. Please try again.', 'error');
                }
            })
            .catch(error => {
                showNotification('Error sending message. Please try again.', 'error');
            });
        });
    }
});

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}
<?php endif; ?>
</script>

<?php wp_footer(); ?>
</body>
</html>