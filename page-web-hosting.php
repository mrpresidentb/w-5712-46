<?php
/*
Template Name: Web Hosting
*/

get_header(); ?>

<section class="pt-28 pb-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">Web & Hosting Solutions</h1>
            <p class="text-xl text-blue-100 mb-8">
                Beyond simple sites, we support WordPress, basic e-commerce, and light custom work—ideal for LLCs wanting a bigger footprint.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="px-6 py-3 bg-white text-blue-900 rounded-md hover:bg-blue-50 transition-all duration-300 flex items-center justify-center"
                >
                    Request a Web Quote
                    <i class="arrow-right-icon"></i>
                </button>
                <button 
                    onclick="window.location.href='/pricing'"
                    class="px-6 py-3 bg-blue-700 text-white border border-blue-600 rounded-md hover:bg-blue-600 transition-all duration-300"
                >
                    View Web Packages
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Web Solutions for Small Businesses</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                From simple one-page websites to custom WordPress solutions, we provide the web presence your business needs to succeed online.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="web-service-card">
                <div class="service-icon-container">
                    <i class="globe-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">One-Page Website</h3>
                <p class="text-gray-600 mb-4">
                    Perfect for new businesses needing a simple online presence. Includes responsive design, contact form, and basic SEO setup.
                </p>
                <p class="font-bold text-blue-800 mb-4">Starting at $499</p>
                <ul class="space-y-2">
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Responsive mobile-friendly design</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Contact form with email notifications</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Google Maps integration</span>
                    </li>
                </ul>
            </div>
            
            <div class="web-service-card">
                <div class="service-icon-container">
                    <i class="globe-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Multi-Page Website</h3>
                <p class="text-gray-600 mb-4">
                    For businesses needing more content sections. Includes 5-7 pages, content management system, and expanded features.
                </p>
                <p class="font-bold text-blue-800 mb-4">Starting at $999</p>
                <ul class="space-y-2">
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>5-7 custom designed pages</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>WordPress content management</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Blog or news section</span>
                    </li>
                </ul>
            </div>
            
            <div class="web-service-card">
                <div class="service-icon-container">
                    <i class="server-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">E-commerce Solutions</h3>
                <p class="text-gray-600 mb-4">
                    Sell products or services online with a custom e-commerce solution. Includes product catalog, payment processing, and order management.
                </p>
                <p class="font-bold text-blue-800 mb-4">Starting at $1,499</p>
                <ul class="space-y-2">
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>WooCommerce or Shopify setup</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Payment gateway integration</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Product setup (up to 25 items)</span>
                    </li>
                </ul>
            </div>
            
            <div class="web-service-card">
                <div class="service-icon-container">
                    <i class="server-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Web Hosting Services</h3>
                <p class="text-gray-600 mb-4">
                    Reliable, secure hosting for your website with 99.9% uptime guarantee, daily backups, and technical support.
                </p>
                <p class="font-bold text-blue-800 mb-4">Starting at $15/month</p>
                <ul class="space-y-2">
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Fast SSD hosting with CDN</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Daily automated backups</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>SSL certificate included</span>
                    </li>
                </ul>
            </div>
            
            <div class="web-service-card">
                <div class="service-icon-container">
                    <i class="shield-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Domain & Email Services</h3>
                <p class="text-gray-600 mb-4">
                    Professional domain registration and business email setup with your custom domain name (@yourcompany.com).
                </p>
                <p class="font-bold text-blue-800 mb-4">Domain: $15/yr, Email: $10/user/mo</p>
                <ul class="space-y-2">
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Domain name registration & renewal</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Google Workspace or Microsoft 365 setup</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Email migration & training</span>
                    </li>
                </ul>
            </div>
            
            <div class="web-service-card">
                <div class="service-icon-container">
                    <i class="settings-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Website Maintenance</h3>
                <p class="text-gray-600 mb-4">
                    Keep your website secure, updated, and performing at its best with our monthly maintenance plans.
                </p>
                <p class="font-bold text-blue-800 mb-4">Starting at $49/month</p>
                <ul class="space-y-2">
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>WordPress & plugin updates</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Security monitoring & scanning</span>
                    </li>
                    <li class="web-feature">
                        <i class="check-icon"></i>
                        <span>Monthly performance reports</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Our Web Design Process</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                We make creating your business website simple, straightforward, and stress-free with our proven process.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <div class="process-number">1</div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Consultation & Planning</h3>
                <p class="text-gray-600">
                    We discuss your business needs, target audience, and goals to plan the perfect website structure and content.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <div class="process-number">2</div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Design & Development</h3>
                <p class="text-gray-600">
                    Our team creates a custom design that matches your brand and builds a responsive, user-friendly website.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <div class="process-number">3</div>
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Launch & Support</h3>
                <p class="text-gray-600">
                    We handle the technical details of launching your site, then provide ongoing support and maintenance.
                </p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button 
                onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300 inline-flex items-center"
            >
                Start Your Web Project
                <i class="arrow-right-icon"></i>
            </button>
        </div>
    </div>
</section>

<?php get_footer(); ?>