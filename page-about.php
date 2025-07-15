<?php
/*
Template Name: About
*/

get_header(); ?>

<div class="pt-20 pb-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">
                About IT Carolina
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Your trusted local IT partner in Charlotte, North Carolina, providing expert technology solutions 
                for homes and small businesses since our founding.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Our Mission</h2>
                <p class="text-gray-600 text-lg mb-6">
                    At IT Carolina, we believe technology should work for you, not against you. Our mission is to 
                    provide reliable, honest, and affordable IT support that helps our clients focus on what they do best.
                </p>
                <p class="text-gray-600 text-lg mb-6">
                    We specialize in making complex technology simple and accessible for home users and small businesses 
                    throughout the Charlotte area. No confusing jargon, no hidden fees – just straightforward solutions 
                    that work.
                </p>
                <p class="text-gray-600 text-lg">
                    Have questions about our services or process? Check out our <a href="/faq" class="text-blue-600 hover:text-blue-700 underline">frequently asked questions</a> page 
                    for detailed information about computer repair costs, service areas, and what to expect when you work with us.
                </p>
            </div>
            
            <div>
                <h2 class="text-3xl font-bold mb-6 text-gray-900">Why Choose Us</h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <i class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0 shield-icon"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900">Local & Trusted</h3>
                            <p class="text-gray-600">Based in Charlotte, we understand local business needs and provide personalized service.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0 clock-icon"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900">Fast Response</h3>
                            <p class="text-gray-600">Same-day service available for urgent issues. We're here when you need us most.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0 award-icon"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900">Transparent Pricing</h3>
                            <p class="text-gray-600">Fixed-rate pricing with no surprises. You'll know the cost upfront.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0 users-icon"></i>
                        <div>
                            <h3 class="font-semibold text-gray-900">Expert Team</h3>
                            <p class="text-gray-600">Experienced technicians who explain solutions in plain English.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-blue-50 rounded-xl p-8 mb-16">
            <h2 class="text-3xl font-bold mb-6 text-center text-gray-900">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-blue-900">For Home Users</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Computer slow-down and virus removal</li>
                        <li>• Wi-Fi setup and troubleshooting</li>
                        <li>• Printer installation and support</li>
                        <li>• Data backup and recovery</li>
                        <li>• Software installation and updates</li>
                    </ul>
                    <a href="/services/home-office" class="text-blue-600 hover:text-blue-700 text-sm mt-3 inline-block">
                        Learn more about home support services →
                    </a>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-blue-900">For Small Business</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Network setup and management</li>
                        <li>• Business email and collaboration tools</li>
                        <li>• Website design and hosting</li>
                        <li>• Security solutions and monitoring</li>
                        <li>• Ongoing IT support plans</li>
                    </ul>
                    <a href="/services/business" class="text-blue-600 hover:text-blue-700 text-sm mt-3 inline-block">
                        Explore business IT solutions →
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center">
            <h2 class="text-3xl font-bold mb-6 text-gray-900">Ready to Get Started?</h2>
            <p class="text-xl text-gray-600 mb-8">
                Contact us today for a free consultation and see how we can help solve your IT challenges.
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
                    Email Us
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>