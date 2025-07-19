<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - Computer Repair Charlotte NC | IT Support</title>
    <meta name="description" content="Professional computer repair & IT support in Charlotte NC. Same-day PC repair, virus removal, network setup. Call (704) 520-0809 for free quote.">
    <link rel="canonical" href="<?php echo home_url('/'); ?>">
    
    <!-- Font Loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <div class="nav-wrapper">
            <div class="nav-logo">
                <a href="<?php echo home_url('/'); ?>">
                    <span class="logo-text">IT Carolina</span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="nav-menu">
                <ul class="nav-items">
                    <li><a href="<?php echo home_url('/'); ?>" class="nav-link">Home</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>" class="nav-link">About Us</a></li>
                    <li class="nav-dropdown">
                        <a href="#" class="nav-link dropdown-trigger">
                            Services
                            <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="<?php echo home_url('/services'); ?>" class="dropdown-item featured">
                                <div class="dropdown-title">All IT Services</div>
                                <div class="dropdown-desc">Complete overview of our technology solutions</div>
                            </a>
                            <a href="<?php echo home_url('/services/home-office'); ?>" class="dropdown-item">
                                <div class="dropdown-title">Home & Home-Office Support</div>
                                <div class="dropdown-desc">PC tune-ups, Wi-Fi help, virus removal & more</div>
                            </a>
                            <a href="<?php echo home_url('/services/business'); ?>" class="dropdown-item">
                                <div class="dropdown-title">Small Business IT Support</div>
                                <div class="dropdown-desc">Networks, security & managed IT services</div>
                            </a>
                            <a href="<?php echo home_url('/services/printer'); ?>" class="dropdown-item">
                                <div class="dropdown-title">Printer & Peripherals</div>
                                <div class="dropdown-desc">Setup, troubleshooting & repair</div>
                            </a>
                            <a href="<?php echo home_url('/services/web-hosting'); ?>" class="dropdown-item">
                                <div class="dropdown-title">Web & Hosting Solutions</div>
                                <div class="dropdown-desc">Website design, domain & email services</div>
                            </a>
                        </div>
                    </li>
                    <li><a href="<?php echo home_url('/pricing'); ?>" class="nav-link">Pricing</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>" class="nav-link">Blog</a></li>
                    <li><a href="<?php echo home_url('/faq'); ?>" class="nav-link">FAQ</a></li>
                </ul>
                
                <button onclick="scrollToContact()" class="nav-cta">
                    <svg class="cta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Get Support
                </button>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()" aria-label="Toggle navigation menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-content">
            <a href="<?php echo home_url('/'); ?>" class="mobile-nav-link">Home</a>
            <a href="<?php echo home_url('/about'); ?>" class="mobile-nav-link">About Us</a>
            
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-trigger" onclick="toggleMobileDropdown()">
                    Services
                    <svg class="mobile-dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </button>
                <div class="mobile-dropdown-content" id="mobile-dropdown">
                    <a href="<?php echo home_url('/services'); ?>" class="mobile-dropdown-item">All IT Services</a>
                    <a href="<?php echo home_url('/services/home-office'); ?>" class="mobile-dropdown-item">Home & Home-Office Support</a>
                    <a href="<?php echo home_url('/services/business'); ?>" class="mobile-dropdown-item">Small Business IT Support</a>
                    <a href="<?php echo home_url('/services/printer'); ?>" class="mobile-dropdown-item">Printer & Peripherals</a>
                    <a href="<?php echo home_url('/services/web-hosting'); ?>" class="mobile-dropdown-item">Web & Hosting Solutions</a>
                </div>
            </div>
            
            <a href="<?php echo home_url('/pricing'); ?>" class="mobile-nav-link">Pricing</a>
            <a href="<?php echo home_url('/blog'); ?>" class="mobile-nav-link">Blog</a>
            <a href="<?php echo home_url('/faq'); ?>" class="mobile-nav-link">FAQ</a>
            
            <button onclick="scrollToContact()" class="mobile-nav-cta">
                <svg class="mobile-cta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Get Support
            </button>
        </div>
    </div>
</nav>

<script>
// Navigation functionality
function scrollToContact() {
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
}

function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBtn = document.querySelector('.mobile-menu-btn');
    
    if (mobileMenu && menuBtn) {
        mobileMenu.classList.toggle('active');
        menuBtn.classList.toggle('active');
        
        // Prevent body scroll when mobile menu is open
        if (mobileMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }
}

function toggleMobileDropdown() {
    const dropdown = document.getElementById('mobile-dropdown');
    const trigger = document.querySelector('.mobile-dropdown-trigger');
    
    if (dropdown && trigger) {
        dropdown.classList.toggle('active');
        trigger.classList.toggle('active');
    }
}

// Handle navbar scroll effects
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
});

// Handle desktop dropdown menus
document.addEventListener('DOMContentLoaded', function() {
    const dropdownTrigger = document.querySelector('.dropdown-trigger');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    
    if (dropdownTrigger && dropdownMenu) {
        dropdownTrigger.addEventListener('mouseenter', function() {
            dropdownMenu.style.display = 'block';
            setTimeout(() => dropdownMenu.classList.add('active'), 10);
        });
        
        dropdownTrigger.parentElement.addEventListener('mouseleave', function() {
            dropdownMenu.classList.remove('active');
            setTimeout(() => dropdownMenu.style.display = 'none', 200);
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuBtn = document.querySelector('.mobile-menu-btn');
        
        if (mobileMenu && menuBtn && 
            !mobileMenu.contains(e.target) && 
            !menuBtn.contains(e.target) && 
            mobileMenu.classList.contains('active')) {
            toggleMobileMenu();
        }
    });
});
</script>