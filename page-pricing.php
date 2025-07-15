<?php
/*
Template Name: Pricing
*/

get_header(); ?>

<section class="pt-28 pb-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">
                Transparent Computer Repair Pricing
            </h1>
            <p class="text-xl text-blue-100 mb-8">
                No surprises, no hidden fees. Clear, flat-rate pricing for all computer repair and IT services in Charlotte, NC.
            </p>
            <p class="text-lg text-blue-200">
                Have questions about our pricing or services? Check our <a href="/faq" class="text-white underline hover:text-blue-100">FAQ page</a> for detailed answers.
            </p>
        </div>
    </div>
</section>

<!-- Dedicated Home IT Support Section -->
<section class="py-16 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Home IT Support</h2>
            <p class="text-xl text-gray-700">Our most popular service for personal computers, laptops, printers, and home networks</p>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-8 border-2 border-blue-200">
            <div class="flex items-center justify-center mb-6">
                <i class="home-pricing-icon"></i>
                <h3 class="text-2xl font-bold text-blue-900">Home IT Support</h3>
            </div>
            
            <div class="text-center mb-8">
                <div class="mb-4">
                    <p class="text-4xl font-bold text-blue-900">$99</p>
                    <p class="text-lg text-gray-600">On-site call out fee (includes first hour)</p>
                </div>
                <p class="text-sm text-gray-500 italic">Most home computer issues are resolved within 1-2 hours</p>
            </div>

            <div class="mb-8">
                <h4 class="text-lg font-semibold text-gray-900 mb-4 text-center">Includes:</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="pricing-feature">
                        <i class="check-icon"></i>
                        <span>Computer/laptop troubleshooting & repair</span>
                    </div>
                    <div class="pricing-feature">
                        <i class="check-icon"></i>
                        <span>Virus & malware removal</span>
                    </div>
                    <div class="pricing-feature">
                        <i class="check-icon"></i>
                        <span>Home Wi-Fi setup & optimization</span>
                    </div>
                    <div class="pricing-feature">
                        <i class="check-icon"></i>
                        <span>Printer & peripheral setup</span>
                    </div>
                    <div class="pricing-feature">
                        <i class="check-icon"></i>
                        <span>Data backup & recovery services</span>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="bg-blue-600 text-white py-4 px-8 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors"
                >
                    Book a Home Visit →
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Additional Services</h2>
            <p class="text-xl text-gray-600">Specialized computer repair and IT services</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Virus Removal -->
            <div class="pricing-service-card">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Virus & Malware Removal</h3>
                <p class="text-gray-700 mb-4">Complete virus and malware cleanup to restore your computer's performance and security.</p>
                <div class="pricing-feature">
                    <i class="check-icon"></i>
                    <span>Full system scan and removal</span>
                </div>
                <div class="pricing-feature">
                    <i class="check-icon"></i>
                    <span>Rootkit and spyware elimination</span>
                </div>
                <div class="pricing-feature">
                    <i class="check-icon"></i>
                    <span>Security software installation</span>
                </div>
                <p class="text-2xl font-bold text-blue-900 mt-4">$149</p>
            </div>

            <!-- PC Tune-Up -->
            <div class="pricing-service-card">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">PC Performance Tune-Up</h3>
                <p class="text-gray-700 mb-4">Optimize your computer for faster startup, smoother operation, and improved overall performance.</p>
                <div class="pricing-feature">
                    <i class="clock-icon"></i>
                    <span>Startup optimization</span>
                </div>
                <div class="pricing-feature">
                    <i class="clock-icon"></i>
                    <span>Registry cleanup</span>
                </div>
                <div class="pricing-feature">
                    <i class="clock-icon"></i>
                    <span>Software updates</span>
                </div>
                <p class="text-2xl font-bold text-blue-900 mt-4">$129</p>
            </div>

            <!-- Data Recovery -->
            <div class="pricing-service-card">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Data Recovery Services</h3>
                <p class="text-gray-700 mb-4">Recover lost or deleted files from hard drives, SSDs, USB drives, and other storage devices.</p>
                <div class="pricing-feature">
                    <i class="shield-icon"></i>
                    <span>Hard drive recovery</span>
                </div>
                <div class="pricing-feature">
                    <i class="shield-icon"></i>
                    <span>SSD data retrieval</span>
                </div>
                <div class="pricing-feature">
                    <i class="shield-icon"></i>
                    <span>USB drive recovery</span>
                </div>
                <p class="text-2xl font-bold text-blue-900 mt-4">Starting at $199</p>
            </div>

            <!-- Small Business IT Support -->
            <div class="pricing-service-card">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Small Business IT Support</h3>
                <p class="text-gray-700 mb-4">Comprehensive IT solutions for small businesses, including network setup, security, and ongoing support.</p>
                <div class="pricing-feature">
                    <i class="users-icon"></i>
                    <span>Network setup and maintenance</span>
                </div>
                <div class="pricing-feature">
                    <i class="users-icon"></i>
                    <span>Cybersecurity solutions</span>
                </div>
                <div class="pricing-feature">
                    <i class="users-icon"></i>
                    <span>Remote and on-site support</span>
                </div>
                <p class="text-2xl font-bold text-blue-900 mt-4">Custom Quote</p>
            </div>

            <!-- Web Design & Hosting -->
            <div class="pricing-service-card">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Web Design & Hosting</h3>
                <p class="text-gray-700 mb-4">Professional website design, domain registration, and reliable hosting services to establish your online presence.</p>
                <div class="pricing-feature">
                    <i class="check-icon"></i>
                    <span>Custom website design</span>
                </div>
                <div class="pricing-feature">
                    <i class="check-icon"></i>
                    <span>Domain registration</span>
                </div>
                <div class="pricing-feature">
                    <i class="check-icon"></i>
                    <span>Reliable web hosting</span>
                </div>
                <p class="text-2xl font-bold text-blue-900 mt-4">Custom Quote</p>
            </div>

            <!-- Printer Support -->
            <div class="pricing-service-card">
                <h3 class="text-xl font-semibold text-blue-900 mb-4">Printer & Peripheral Support</h3>
                <p class="text-gray-700 mb-4">Setup, troubleshooting, and repair services for printers, scanners, and other computer peripherals.</p>
                <div class="pricing-feature">
                    <i class="clock-icon"></i>
                    <span>Printer setup and installation</span>
                </div>
                <div class="pricing-feature">
                    <i class="clock-icon"></i>
                    <span>Troubleshooting and repair</span>
                </div>
                <div class="pricing-feature">
                    <i class="clock-icon"></i>
                    <span>Driver updates and configuration</span>
                </div>
                <p class="text-2xl font-bold text-blue-900 mt-4">$99</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-blue-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-6 text-gray-900">
            Ready to Get Your Computer Fixed?
        </h2>
        <p class="text-xl text-gray-600 mb-8">
            Contact us today for a free diagnostic and upfront pricing. No surprises, just honest computer repair in Charlotte.
        </p>
        <p class="text-gray-600 mb-8">
            Not sure what service you need? Our <a href="/faq" class="text-blue-600 hover:text-blue-700 underline">FAQ page</a> answers common questions about computer problems and our repair process.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a 
                href="tel:+17045200809" 
                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors"
            >
                Call (704) 520-0809
            </a>
            <a 
                href="mailto:support@itcarolina.us" 
                class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors"
            >
                Email for Quote
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>