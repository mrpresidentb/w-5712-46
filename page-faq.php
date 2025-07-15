<?php
/*
Template Name: FAQ
*/

get_header(); ?>

<section class="pt-28 pb-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">
                Frequently Asked Questions
            </h1>
            <p class="text-xl text-blue-100 mb-8">
                Common questions about computer repair, IT support, and our services in Charlotte, NC
            </p>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-4">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>How do I find the best computer repair technician near me?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Look for local computer repair shops with certified technicians, transparent pricing, good reviews, and same-day service availability. IT Carolina serves the Charlotte metro area with experienced technicians who provide upfront quotes and quality repairs for both PC and Mac systems. Learn more about our team and approach on our About Us page.</p>
                    <a href="/about" class="faq-link">About Our Team</a>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>What computer repair services do you offer?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our comprehensive computer repair services include virus and malware removal, performance optimization, hardware repairs, software installation, data recovery, operating system repairs, and hardware upgrades. We service both Windows PCs and Apple computers for home users throughout Charlotte.</p>
                    <a href="/services/home-office" class="faq-link">Home & Home-Office Support</a>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>How much does computer repair cost in Charlotte?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our computer repair services start at $99 for diagnostics and estimates. We provide flat-rate pricing for most services including virus removal ($149), performance tune-ups ($129), and data recovery (starting at $199). No hidden fees or hourly charges. View our complete pricing structure for transparent costs.</p>
                    <a href="/pricing" class="faq-link">View Our Pricing</a>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>What areas do you serve for computer repair near me?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We provide computer repair services throughout the Charlotte metro area including Uptown, South End, NoDa, University City, Ballantyne, SouthPark, Dilworth, Myers Park, Plaza Midwood, and surrounding communities. We offer both on-site visits and in-shop repairs to serve our local community effectively.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>Do you offer Dell computer support and other brand repairs?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we provide Dell computer support along with repairs for HP, Lenovo, ASUS, Acer, and all major computer brands. Our technicians are experienced with desktop and laptop repairs for both consumer and business systems. Whether you need printer support or complete system repairs, we handle all major brands.</p>
                    <a href="/services/printer" class="faq-link">Printer & Peripheral Support</a>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>What's included in your personal computer repair service?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Our personal computer repair service includes complete diagnostics, virus/malware removal, performance optimization, hardware repairs or replacements, software installation, data backup and recovery, and system security setup. We explain everything in plain English so you understand exactly what we're doing and why.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>How quickly can you provide computer help near me?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>We offer same-day computer help for urgent issues and typically schedule on-site visits within 24-48 hours. For immediate assistance, we also provide remote computer support for software-related problems that can be resolved online. Contact us at (704) 520-0809 for emergency support.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>Do you provide computer support services for small businesses?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! Our computer support services for small businesses include network setup, server maintenance, managed IT support, security solutions, backup systems, and ongoing maintenance plans. We also offer website design and hosting solutions. We tailor our services to fit your business needs and budget.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="/services/business" class="faq-link">Small Business IT Support</a>
                        <a href="/services/web-hosting" class="faq-link">Web & Hosting Solutions</a>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <h3>Where can I find computer repair shops near me in Charlotte?</h3>
                    <i class="chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>IT Carolina is conveniently located in Charlotte and serves the entire metro area. Unlike chain stores, we provide personalized service with certified local technicians who understand your community's needs and offer competitive pricing with quality repairs. Learn more about our local approach and commitment to Charlotte.</p>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-blue-50 p-8 rounded-lg text-center">
            <h2 class="text-2xl font-bold mb-4 text-gray-900">
                Still Have Questions?
            </h2>
            <p class="text-gray-700 mb-6">
                Can't find the answer you're looking for? Our friendly team is here to help with any computer or IT questions. 
                You can also learn more about our <a href="/about" class="text-blue-600 hover:text-blue-700 underline">team and approach</a> or 
                browse our <a href="/pricing" class="text-blue-600 hover:text-blue-700 underline">service pricing</a>.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="tel:+17045200809"
                    class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors"
                >
                    Call (704) 520-0809
                </a>
                <a
                    href="mailto:support@itcarolina.us"
                    class="px-6 py-3 bg-white text-blue-600 border border-blue-600 rounded-md hover:bg-blue-50 transition-colors"
                >
                    Email Support
                </a>
            </div>
        </div>

        <!-- Related Services Section -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-8 text-center text-gray-900">
                Explore Our Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="/services/home-office" class="service-link-card">
                    <h3 class="font-semibold text-blue-900 mb-2">Home & Home-Office</h3>
                    <p class="text-gray-600 text-sm">PC tune-ups, virus removal, Wi-Fi setup</p>
                </a>
                <a href="/services/business" class="service-link-card">
                    <h3 class="font-semibold text-blue-900 mb-2">Small Business IT</h3>
                    <p class="text-gray-600 text-sm">Network setup, managed IT, security</p>
                </a>
                <a href="/services/printer" class="service-link-card">
                    <h3 class="font-semibold text-blue-900 mb-2">Printer Support</h3>
                    <p class="text-gray-600 text-sm">Setup, troubleshooting, repair</p>
                </a>
                <a href="/services/web-hosting" class="service-link-card">
                    <h3 class="font-semibold text-blue-900 mb-2">Web & Hosting</h3>
                    <p class="text-gray-600 text-sm">Website design, domains, email</p>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFAQ(button) {
    const faqItem = button.parentElement;
    const answer = faqItem.querySelector('.faq-answer');
    const isOpen = faqItem.classList.contains('active');
    
    // Close all other FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
    });
    
    // Toggle current FAQ
    if (!isOpen) {
        faqItem.classList.add('active');
    }
}
</script>

<?php get_footer(); ?>