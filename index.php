<?php
/**
 * IT Carolina WordPress Theme
 * Main template file
 */

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <!-- Circuit Board Background Pattern -->
    <div class="circuit-pattern">
        <svg class="circuit-svg" viewBox="0 0 1200 800" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 100h200v50h150v-50h200v100h-150v150h150v100h-200v-50h-150v50h-200v-100h150v-150h-150z" stroke="white" stroke-width="2"/>
            <circle cx="200" cy="150" r="8" fill="white"/>
            <circle cx="400" cy="200" r="8" fill="white"/>
            <circle cx="600" cy="250" r="8" fill="white"/>
            <circle cx="800" cy="300" r="8" fill="white"/>
            <path d="M900 200h200v50h150v-50h200" stroke="white" stroke-width="1"/>
            <path d="M50 400h300v100h200v-100h300" stroke="white" stroke-width="1"/>
        </svg>
    </div>

    <div class="hero-container">
        <div class="hero-grid">
            <!-- Left Column - Text Content -->
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="hero-title-line">Fast, Friendly IT Support</span>
                    <span class="hero-title-line">in Charlotte, NC</span>
                </h1>
                
                <p class="hero-subtitle">
                    24/7 monitoring, on-site repairs, and remote help — one call covers it all.
                </p>
                
                <!-- CTA Buttons -->
                <div class="hero-buttons">
                    <button onclick="scrollToContact()" class="btn-primary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Get Support Now
                    </button>
                    
                    <button onclick="scrollToServices()" class="btn-secondary">
                        View Services
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Column - IT Illustration -->
            <div class="hero-illustration">
                <div class="illustration-container">
                    <svg viewBox="0 0 400 350" class="it-illustration" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background Elements -->
                        <circle cx="200" cy="175" r="160" fill="#ffffff" fill-opacity="0.08" stroke="#ffffff" stroke-width="1" stroke-opacity="0.15"/>
                        
                        <!-- Desk/Table -->
                        <rect x="50" y="220" width="300" height="20" rx="10" fill="#E5E7EB"/>
                        <rect x="60" y="240" width="15" height="50" fill="#D1D5DB"/>
                        <rect x="325" y="240" width="15" height="50" fill="#D1D5DB"/>
                        
                        <!-- Server Rack -->
                        <rect x="280" y="120" width="80" height="100" rx="6" fill="#1E40AF" stroke="#3B82F6" stroke-width="2"/>
                        <rect x="285" y="130" width="70" height="8" rx="2" fill="#60A5FA"/>
                        <rect x="285" y="142" width="70" height="8" rx="2" fill="#60A5FA"/>
                        <rect x="285" y="154" width="70" height="8" rx="2" fill="#93C5FD"/>
                        <circle cx="290" cy="134" r="2" fill="#10B981"/>
                        <circle cx="296" cy="134" r="2" fill="#10B981"/>
                        <circle cx="302" cy="134" r="2" fill="#F59E0B"/>
                        
                        <!-- Laptop -->
                        <rect x="120" y="190" width="100" height="60" rx="4" fill="#374151"/>
                        <rect x="125" y="195" width="90" height="50" rx="3" fill="#1F2937"/>
                        <rect x="130" y="200" width="80" height="40" rx="2" fill="#3B82F6"/>
                        <rect x="135" y="205" width="70" height="2" rx="1" fill="#60A5FA"/>
                        <rect x="135" y="210" width="50" height="2" rx="1" fill="#93C5FD"/>
                        
                        <!-- IT Professional -->
                        <g transform="translate(160, 100)">
                            <circle cx="0" cy="0" r="18" fill="#F3E8FF" stroke="#8B5CF6" stroke-width="1"/>
                            <path d="M-15 -8 Q0 -20 15 -8 Q10 -15 0 -15 Q-10 -15 -15 -8" fill="#4B5563"/>
                            <circle cx="-6" cy="-2" r="1.5" fill="#1F2937"/>
                            <circle cx="6" cy="-2" r="1.5" fill="#1F2937"/>
                            <circle cx="-6" cy="-2" r="5" fill="none" stroke="#6B7280" stroke-width="1"/>
                            <circle cx="6" cy="-2" r="5" fill="none" stroke="#6B7280" stroke-width="1"/>
                            <rect x="-12" y="18" width="24" height="35" rx="12" fill="#3B82F6"/>
                            <rect x="-25" y="25" width="13" height="8" rx="4" fill="#F3E8FF"/>
                            <rect x="12" y="25" width="13" height="8" rx="4" fill="#F3E8FF"/>
                            <circle cx="-30" cy="90" r="4" fill="#F3E8FF"/>
                            <circle cx="30" cy="90" r="4" fill="#F3E8FF"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Smooth Slanted Divider -->
    <div class="hero-divider">
        <svg class="divider-svg" viewBox="0 0 1200 120" preserveAspectRatio="none" fill="#ffffff">
            <path d="M0,0 L1200,60 L1200,120 L0,120 Z"/>
        </svg>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="services-container">
        <div class="section-header">
            <div class="section-badge">Our Services</div>
            <h2 class="section-title">IT Solutions for Everyone</h2>
            <p class="section-description">
                From "my computer's slow" to "I need a simple one-page website" — we've got you covered. 
                We provide friendly, jargon-free IT support for both home users and small businesses in Charlotte, NC.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3 class="service-title">Computer Repair & Tune-up</h3>
                <p class="service-description">Fix slow computers, remove viruses, and optimize performance for home and office users.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3 class="service-title">Network & Wi-Fi Setup</h3>
                <p class="service-description">Professional network installation, Wi-Fi troubleshooting, and small office network configuration.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="6,9 6,2 18,2 18,9"/>
                        <path d="M6,18H4a2,2 0 01-2-2V11a2,2 0 012-2H20a2,2 0 012,2V16a2,2 0 01-2,2H18"/>
                        <rect x="6" y="14" width="12" height="8"/>
                    </svg>
                </div>
                <h3 class="service-title">Printer Support</h3>
                <p class="service-description">Printer installation, troubleshooting offline printers, and peripheral device support.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="service-title">Data Backup & Recovery</h3>
                <p class="service-description">Protect your important files with reliable backup solutions and recover deleted data.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="2" y1="12" x2="22" y2="12"/>
                        <path d="M12,2a15.3,15.3 0 014,10 15.3,15.3 0 01-4,10 15.3,15.3 0 01-4-10 15.3,15.3 0 014-10z"/>
                    </svg>
                </div>
                <h3 class="service-title">Website Design & Hosting</h3>
                <p class="service-description">One-page to small multi-page websites, domain setup, SSL certificates, and reliable hosting.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                        <path d="M16 3.13a4 4 0 010 7.75"/>
                    </svg>
                </div>
                <h3 class="service-title">Business Email Setup</h3>
                <p class="service-description">Microsoft 365 and Google Workspace setup for professional business communication.</p>
            </div>
        </div>
        
        <div class="services-cta">
            <p class="cta-text">Looking for a customized IT solution for your home or business?</p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/services'); ?>" class="btn-outline">View All Services</a>
                <button onclick="scrollToContact()" class="btn-primary">Get a Free Consultation</button>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="features-container">
        <div class="features-content">
            <h2 class="features-title">Why Choose Our Local Computer Service Team?</h2>
            <p class="features-description">
                Whether you need a computer repair technician near you or comprehensive IT services for your small business, our certified professionals understand that tech problems can be frustrating.
            </p>
            
            <div class="features-grid">
                <div class="feature-card highlight">
                    <div class="feature-header">
                        <svg class="feature-icon green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <line x1="12" y1="1" x2="12" y2="23"/>
                            <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                        </svg>
                        <h3 class="feature-title">Transparent, Flat-Rate Pricing</h3>
                    </div>
                    <p class="feature-description">No hourly rates or surprise fees. You know exactly what you'll pay before we start.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-header">
                        <svg class="feature-icon blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <h3 class="feature-title">Local Charlotte Focus</h3>
                    </div>
                    <p class="feature-description">We're part of your Charlotte community and understand the unique needs of local residents and small businesses.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-header">
                        <svg class="feature-icon orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12,6 12,12 16,14"/>
                        </svg>
                        <h3 class="feature-title">Same-Day Emergency Service</h3>
                    </div>
                    <p class="feature-description">When computer problems threaten your productivity, our team responds quickly to get you back up and running.</p>
                </div>
            </div>
        </div>

        <!-- Common Problems Section -->
        <div class="problems-section">
            <h3 class="problems-title">Common Computer Problems We Solve Daily</h3>
            <div class="problems-grid">
                <div class="problem-item">
                    <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span>"My computer is running really slow"</span>
                </div>
                <div class="problem-item">
                    <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span>"I think I have a virus or malware"</span>
                </div>
                <div class="problem-item">
                    <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span>"My Wi-Fi keeps dropping out"</span>
                </div>
                <div class="problem-item">
                    <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span>"My printer says it's offline but it's plugged in"</span>
                </div>
                <div class="problem-item">
                    <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span>"I accidentally deleted important files"</span>
                </div>
                <div class="problem-item">
                    <svg class="check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <polyline points="20,6 9,17 4,12"/>
                    </svg>
                    <span>"I need a professional website for my small business"</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Sections -->
<section class="faq-section">
    <div class="faq-container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-grid">
            <div class="faq-column">
                <div class="faq-item">
                    <h3 class="faq-question">How do I find computer repair places near me?</h3>
                    <p class="faq-answer">Look for local computer repair shops with good reviews, transparent pricing, and certified technicians. IT Carolina serves the entire Charlotte area, we provide on-site computer repair services.</p>
                </div>
                
                <div class="faq-item">
                    <h3 class="faq-question">Do you provide Apple computer support?</h3>
                    <p class="faq-answer">Yes! Our Apple computer support includes Mac repairs, software troubleshooting, data migration, and hardware upgrades. We're experienced with both Mac and PC systems.</p>
                </div>
            </div>
            
            <div class="faq-column">
                <div class="faq-item">
                    <h3 class="faq-question">What's included in your computer support services?</h3>
                    <p class="faq-answer">Our comprehensive computer support includes virus removal, performance optimization, hardware repairs, software installation, data recovery, and ongoing maintenance for both home and business computers.</p>
                </div>
                
                <div class="faq-item">
                    <h3 class="faq-question">How much does computer repair cost in Charlotte?</h3>
                    <p class="faq-answer">Our computer repair services start at $99 for diagnostics, with flat-rate pricing for most services. We provide upfront quotes with no hidden fees or surprise charges.</p>
                </div>
            </div>
        </div>
        
        <div class="faq-cta">
            <div class="cta-buttons">
                <a href="<?php echo home_url('/services'); ?>" class="btn-outline">View All Our Services</a>
                <a href="<?php echo home_url('/faq'); ?>" class="btn-primary">View All Frequently Asked Questions</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="section-header">
            <div class="section-badge">Client Testimonials</div>
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-description">
                Don't just take our word for it. Here's what home users and small businesses across Charlotte have to say about our IT support services.
            </p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <blockquote class="testimonial-content">
                    "The IT support we've received has been exceptional. Their team is always responsive and they've helped us upgrade our entire network infrastructure with minimal disruption to our operations."
                </blockquote>
                <div class="testimonial-author">
                    <div class="author-avatar">M</div>
                    <div class="author-info">
                        <p class="author-name">Michael Johnson</p>
                        <p class="author-role">Small Business Owner</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <blockquote class="testimonial-content">
                    "My computer was running incredibly slow and I thought I'd need to buy a new one. They cleaned it up, removed all the viruses, and now it runs like new. Saved me hundreds of dollars!"
                </blockquote>
                <div class="testimonial-author">
                    <div class="author-avatar">E</div>
                    <div class="author-info">
                        <p class="author-name">Emily Carter</p>
                        <p class="author-role">Home Office User</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                </div>
                <blockquote class="testimonial-content">
                    "Setting up our office network seemed overwhelming until we found IT Carolina. They made the whole process simple and affordable. Our team can now work efficiently from day one."
                </blockquote>
                <div class="testimonial-author">
                    <div class="author-avatar">R</div>
                    <div class="author-info">
                        <p class="author-name">Robert Kim</p>
                        <p class="author-role">Startup Founder</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="testimonials-cta">
            <p>Ready to join our satisfied clients?</p>
            <a href="tel:+17045200809" class="btn-primary">Get Started Today</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="contact-container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info">
                <h2 class="contact-title">Get Professional IT Support Today</h2>
                <p class="contact-description">
                    Ready to solve your computer problems? Contact our friendly IT support team for fast, reliable service in Charlotte, NC.
                </p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div>
                            <p class="contact-label">Phone</p>
                            <a href="tel:+17045200809" class="contact-value">(704) 520-0809</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div>
                            <p class="contact-label">Email</p>
                            <a href="mailto:hello@itcarolina.us" class="contact-value">hello@itcarolina.us</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <svg class="contact-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div>
                            <p class="contact-label">Service Area</p>
                            <p class="contact-value">Greater Charlotte Metro Area</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form-container">
                <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="contact_form_submit">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                    
                    <div class="form-group">
                        <label for="name" class="form-label">Name *</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-input">
                    </div>
                    
                    <div class="form-group">
                        <label for="service" class="form-label">Service Needed</label>
                        <select id="service" name="service" class="form-select">
                            <option value="">Select a service...</option>
                            <option value="computer-repair">Computer Repair</option>
                            <option value="virus-removal">Virus Removal</option>
                            <option value="network-setup">Network Setup</option>
                            <option value="printer-support">Printer Support</option>
                            <option value="data-recovery">Data Recovery</option>
                            <option value="website-design">Website Design</option>
                            <option value="business-email">Business Email Setup</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message *</label>
                        <textarea id="message" name="message" rows="4" class="form-textarea" required placeholder="Describe your IT problem or service need..."></textarea>
                    </div>
                    
                    <button type="submit" class="form-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>