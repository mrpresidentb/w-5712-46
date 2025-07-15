<?php
/*
Template Name: Home Office Support
*/

get_header(); ?>

<section class="pt-28 pb-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">IT Support for Home & Home-Office Users</h1>
            <p class="text-xl text-blue-100 mb-8">
                Fast, friendly tech help when your computer, Wi-Fi, or printer isn't working right.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="px-6 py-3 bg-white text-blue-900 rounded-md hover:bg-blue-50 transition-all duration-300 flex items-center justify-center"
                >
                    Book a Home Visit
                    <i class="arrow-right-icon"></i>
                </button>
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="px-6 py-3 bg-blue-700 text-white border border-blue-600 rounded-md hover:bg-blue-600 transition-all duration-300"
                >
                    Get Remote Support
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Common Home IT Issues We Solve</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                No problem is too small. From annoying pop-ups to "where did my files go?" – we've seen it all and can help.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="home-service-card">
                <div class="service-icon-container">
                    <i class="computer-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">PC & Laptop Tune-Up</h3>
                <p class="text-gray-600 mb-4">
                    Is your machine crawling? We'll remove bloatware, optimize startup, and tune Windows/Mac for smooth performance.
                </p>
                <ul class="space-y-2">
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Slow computer diagnosis & speed optimization</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Removal of unnecessary startup programs</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Disk cleanup and system optimization</span>
                    </li>
                </ul>
            </div>
            
            <div class="home-service-card">
                <div class="service-icon-container">
                    <i class="wifi-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Network & Wi-Fi Help</h3>
                <p class="text-gray-600 mb-4">
                    Weak Wi-Fi dead zones? We'll map, relocate routers, and secure your home network—no more dropped Zoom calls.
                </p>
                <ul class="space-y-2">
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Wi-Fi signal mapping & optimization</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Router setup & configuration</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Network security & password protection</span>
                    </li>
                </ul>
            </div>
            
            <div class="home-service-card">
                <div class="service-icon-container">
                    <i class="shield-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Virus & Malware Removal</h3>
                <p class="text-gray-600 mb-4">
                    Annoying pop-ups, ransomware alerts—gone. We perform deep scans, quarantine threats, and set up ongoing protection.
                </p>
                <ul class="space-y-2">
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Complete system malware scan & removal</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Browser cleanup & security configuration</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Antivirus software setup & configuration</span>
                    </li>
                </ul>
            </div>
            
            <div class="home-service-card">
                <div class="service-icon-container">
                    <i class="printer-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Printer & Peripheral Support</h3>
                <p class="text-gray-600 mb-4">
                    Printer refuses to print or scan? Our on-site visits include driver installs, network printing setup, and scanner calibration.
                </p>
                <ul class="space-y-2">
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Printer installation & driver setup</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Network printer configuration</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Scanner setup & troubleshooting</span>
                    </li>
                </ul>
            </div>
            
            <div class="home-service-card">
                <div class="service-icon-container">
                    <i class="database-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Data Backup & Recovery</h3>
                <p class="text-gray-600 mb-4">
                    Worried about lost photos or documents? We'll configure automated backup (cloud or local) and recover what's already gone.
                </p>
                <ul class="space-y-2">
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Data recovery from failing drives</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Automated backup solution setup</span>
                    </li>
                    <li class="home-feature">
                        <i class="check-icon"></i>
                        <span>Cloud backup configuration & training</span>
                    </li>
                </ul>
            </div>
            
            <div class="home-service-card">
                <div>
                    <div class="service-icon-container">
                        <i class="computer-icon"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Other Home IT Services</h3>
                    <p class="text-gray-600 mb-4">
                        From password recovery to email troubleshooting and smart home setup, we handle all your home technology needs.
                    </p>
                </div>
                <div class="mt-auto">
                    <button 
                        onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                        class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300 flex items-center justify-center"
                    >
                        Book a Home Visit
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
            <h2 class="text-3xl font-bold mb-4">Why Charlotte Residents Trust Us</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Our home IT support is designed to make technology simple again, with no technical jargon or confusing explanations.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Local, On-Site Service</h3>
                <p class="text-gray-600">
                    We come to your Charlotte-area home at a time that's convenient for you, often same-day for urgent issues.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Transparent Pricing</h3>
                <p class="text-gray-600">
                    Flat $99 onsite call-out fee plus $75/hr after the first hour. No surprises, no hidden charges.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Jargon-Free Support</h3>
                <p class="text-gray-600">
                    We explain everything in plain English. No geek-speak, no confusing technical terms, just clear solutions.
                </p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Emergency Coverage</h3>
                <p class="text-gray-600">
                    Working from home and your internet is down? We offer priority service and after-hours support when needed.
                </p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button 
                onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300 inline-flex items-center"
            >
                Request a Home Visit Quote
                <i class="arrow-right-icon"></i>
            </button>
        </div>
    </div>
</section>

<?php get_footer(); ?>