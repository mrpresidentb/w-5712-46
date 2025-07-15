<?php
/*
Template Name: Services
*/

get_header(); ?>

<div class="min-h-screen bg-white">
    <!-- Hero Section -->
    <section class="py-16 bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Complete IT Services in Charlotte, NC
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    From computer repair to business IT support, we provide comprehensive technology solutions 
                    for homes and businesses in the Charlotte metro area. Professional, reliable, and affordable IT services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a 
                        href="/pricing"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors"
                    >
                        View Pricing
                    </a>
                    <button 
                        onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                        class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors"
                    >
                        Get Free Quote
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Our IT Services & Solutions
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Professional technology services designed to keep your computers running smoothly 
                    and your business operations efficient.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card">
                    <div class="service-icon-container">
                        <i class="monitor-icon"></i>
                    </div>
                    <h3 class="service-title">Computer Repair & Diagnostics</h3>
                    <p class="service-description">
                        Professional computer repair services for slow computers, virus removal, hardware diagnostics, and performance optimization for Windows and Mac systems.
                    </p>
                    <ul class="service-features">
                        <li>Virus & Malware Removal</li>
                        <li>Hardware Diagnostics</li>
                        <li>Performance Optimization</li>
                        <li>Data Recovery</li>
                    </ul>
                    <a href="/services/home-office" class="service-link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon-container">
                        <i class="building-icon"></i>
                    </div>
                    <h3 class="service-title">Small Business IT Support</h3>
                    <p class="service-description">
                        Comprehensive IT support solutions for small businesses including network setup, server management, and ongoing technical support.
                    </p>
                    <ul class="service-features">
                        <li>Network Infrastructure</li>
                        <li>Server Management</li>
                        <li>Email Setup</li>
                        <li>Remote Support</li>
                    </ul>
                    <a href="/services/business" class="service-link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon-container">
                        <i class="home-icon"></i>
                    </div>
                    <h3 class="service-title">Home Office Setup</h3>
                    <p class="service-description">
                        Complete home office IT setup including computer configuration, network connectivity, and productivity software installation.
                    </p>
                    <ul class="service-features">
                        <li>Home Network Setup</li>
                        <li>Computer Configuration</li>
                        <li>Software Installation</li>
                        <li>Productivity Tools</li>
                    </ul>
                    <a href="/services/home-office" class="service-link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon-container">
                        <i class="printer-icon"></i>
                    </div>
                    <h3 class="service-title">Printer Support & Setup</h3>
                    <p class="service-description">
                        Expert printer installation, troubleshooting, and maintenance services for all major printer brands and models.
                    </p>
                    <ul class="service-features">
                        <li>Printer Installation</li>
                        <li>Wireless Setup</li>
                        <li>Driver Updates</li>
                        <li>Troubleshooting</li>
                    </ul>
                    <a href="/services/printer" class="service-link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon-container">
                        <i class="globe-icon"></i>
                    </div>
                    <h3 class="service-title">Web Design & Hosting</h3>
                    <p class="service-description">
                        Professional website design, domain registration, SSL certificates, and reliable web hosting services for small businesses.
                    </p>
                    <ul class="service-features">
                        <li>Website Design</li>
                        <li>Domain Registration</li>
                        <li>SSL Certificates</li>
                        <li>Web Hosting</li>
                    </ul>
                    <a href="/services/web-hosting" class="service-link">Learn More →</a>
                </div>

                <div class="service-card">
                    <div class="service-icon-container">
                        <i class="wifi-icon"></i>
                    </div>
                    <h3 class="service-title">Network & Wi-Fi Solutions</h3>
                    <p class="service-description">
                        Professional network installation, Wi-Fi optimization, security configuration, and connectivity troubleshooting services.
                    </p>
                    <ul class="service-features">
                        <li>Wi-Fi Installation</li>
                        <li>Network Security</li>
                        <li>Range Optimization</li>
                        <li>Troubleshooting</li>
                    </ul>
                    <a href="/services/business" class="service-link">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Additional IT Services
                </h2>
                <p class="text-lg text-gray-600">
                    We also provide these specialized technology services to meet all your IT needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Data Backup & Recovery Solutions</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Microsoft 365 & Google Workspace Setup</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Cybersecurity Assessments</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Hardware Upgrades & Installation</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Software Training & Support</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Remote Technical Support</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Ongoing Maintenance Plans</span>
                </div>
                <div class="additional-service">
                    <i class="shield-icon"></i>
                    <span>Technology Consultations</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Serving Charlotte Metro Area
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Professional IT services for residential and commercial clients throughout Charlotte, NC and surrounding areas.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">For Home Users</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="home-icon"></i>
                            <span>Computer repair and virus removal</span>
                        </li>
                        <li class="flex items-center">
                            <i class="wifi-icon"></i>
                            <span>Home network and Wi-Fi setup</span>
                        </li>
                        <li class="flex items-center">
                            <i class="printer-icon"></i>
                            <span>Printer installation and troubleshooting</span>
                        </li>
                        <li class="flex items-center">
                            <i class="shield-icon"></i>
                            <span>Data backup and security solutions</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">For Businesses</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="building-icon"></i>
                            <span>Small business IT support and consulting</span>
                        </li>
                        <li class="flex items-center">
                            <i class="users-icon"></i>
                            <span>Employee computer setup and training</span>
                        </li>
                        <li class="flex items-center">
                            <i class="globe-icon"></i>
                            <span>Website design and hosting services</span>
                        </li>
                        <li class="flex items-center">
                            <i class="mail-icon"></i>
                            <span>Business email and communication setup</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold mb-4">
                Ready to Get Started?
            </h2>
            <p class="text-xl mb-8">
                Contact us today for a free consultation and quote for your IT service needs in Charlotte, NC.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-flex items-center"
                >
                    <i class="phone-icon"></i>
                    Call (704) 520-0809
                </button>
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="bg-transparent border-white text-white hover:bg-white hover:text-blue-600 px-8 py-3 rounded-lg font-semibold transition-colors inline-flex items-center"
                >
                    <i class="mail-icon"></i>
                    Get Free Quote
                </button>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>