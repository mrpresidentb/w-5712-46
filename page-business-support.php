<?php
/*
Template Name: Business Support
*/

get_header(); ?>

<section class="pt-28 pb-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">IT Support for Small Businesses & LLCs</h1>
            <p class="text-xl text-blue-100 mb-8">
                Affordable, reliable IT solutions tailored for Charlotte's small businesses and startups.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="px-6 py-3 bg-white text-blue-900 rounded-md hover:bg-blue-50 transition-all duration-300 flex items-center justify-center"
                >
                    Schedule a Consultation
                    <i class="arrow-right-icon"></i>
                </button>
                <button 
                    onclick="window.location.href='/pricing'"
                    class="px-6 py-3 bg-blue-700 text-white border border-blue-600 rounded-md hover:bg-blue-600 transition-all duration-300"
                >
                    View Business Plans
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">IT Services for Your Growing Business</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                From setting up your first office network to creating your business website, we provide the technology foundation your company needs.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="business-service-card">
                <div class="service-icon-container">
                    <i class="building-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Website Design & Hosting</h3>
                <p class="text-gray-600 mb-4">
                    Launch your online presence in days, not weeks. Our one-page or multi-page websites start at $499, hosted on secure, managed infrastructure.
                </p>
                <ul class="space-y-2">
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Domain registration & DNS</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Responsive design (mobile-friendly)</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>SSL certificate & basic SEO setup</span>
                    </li>
                </ul>
            </div>
            
            <div class="business-service-card">
                <div class="service-icon-container">
                    <i class="server-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Business-Grade Email & Collaboration</h3>
                <p class="text-gray-600 mb-4">
                    Get @yourcompany.com email with Microsoft 365 or Google Workspace, shared calendars, and document collaboration—professional and reliable.
                </p>
                <ul class="space-y-2">
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Custom domain email setup</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Microsoft 365 or Google Workspace configuration</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Team collaboration tools & training</span>
                    </li>
                </ul>
            </div>
            
            <div class="business-service-card">
                <div class="service-icon-container">
                    <i class="shield-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Network & Security</h3>
                <p class="text-gray-600 mb-4">
                    From wired LAN to secure Wi-Fi for your team, plus firewall configuration and regular vulnerability scans.
                </p>
                <ul class="space-y-2">
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Office network design & installation</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Secure Wi-Fi setup with guest access</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Firewall & VPN configuration</span>
                    </li>
                </ul>
            </div>
            
            <div class="business-service-card">
                <div class="service-icon-container">
                    <i class="database-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Managed Backups & Disaster Recovery</h3>
                <p class="text-gray-600 mb-4">
                    Daily backups to local or cloud, with rapid recovery SLA—protect your invoices, contracts, and customer data.
                </p>
                <ul class="space-y-2">
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Automated daily backup solutions</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Secure cloud storage integration</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Disaster recovery planning & testing</span>
                    </li>
                </ul>
            </div>
            
            <div class="business-service-card">
                <div class="service-icon-container">
                    <i class="headphones-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Ongoing Support Plans</h3>
                <p class="text-gray-600 mb-4">
                    Subscribe to our monthly plan for priority response, remote assistance, and discounted on-site visits.
                </p>
                <ul class="space-y-2">
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Proactive system monitoring & maintenance</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Priority response for critical issues</span>
                    </li>
                    <li class="business-feature">
                        <i class="check-icon"></i>
                        <span>Discounted on-site service rates</span>
                    </li>
                </ul>
            </div>
            
            <div class="business-service-card">
                <div>
                    <div class="service-icon-container">
                        <i class="building-icon"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Custom Business IT Solutions</h3>
                    <p class="text-gray-600 mb-4">
                        Need something specific for your business? We create custom IT solutions tailored to your unique requirements and budget.
                    </p>
                </div>
                <div class="mt-auto">
                    <button 
                        onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                        class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300 flex items-center justify-center"
                    >
                        Get a Business IT Quote
                        <i class="arrow-right-icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Small Business IT That Makes Sense</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                We understand that small businesses need reliable IT without the enterprise price tag. That's why we offer flexible solutions that grow with you.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Managed IT Plans</h3>
                <p class="text-gray-600">
                    Custom plans starting at $199/month for 4 hours of support + remote monitoring. Perfect for businesses with 2-20 employees.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Project-Based Work</h3>
                <p class="text-gray-600">
                    One-time needs like office moves, equipment upgrades, or network overhauls with clear, upfront pricing.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Scalable Solutions</h3>
                <p class="text-gray-600">
                    Start with what you need today, and easily add services as your business grows. No long-term contracts required.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Local Charlotte Support</h3>
                <p class="text-gray-600">
                    We're based in Charlotte, not some distant call center. When you need on-site help, we're there fast.
                </p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button 
                onclick="window.location.href='/pricing'"
                class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300 inline-flex items-center"
            >
                See Business IT Plans & Pricing
                <i class="arrow-right-icon"></i>
            </button>
        </div>
    </div>
</section>

<?php get_footer(); ?>