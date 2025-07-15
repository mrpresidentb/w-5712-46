<?php
/*
Template Name: Printer Support
*/

get_header(); ?>

<section class="pt-28 pb-16 bg-gradient-to-b from-blue-900 to-blue-800 text-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">Printer & Peripherals Support</h1>
            <p class="text-xl text-blue-100 mb-8">
                Need just printer setup or copier repair? Our specialized printer service technicians will have your devices online and scanning in no time.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button 
                    onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                    class="px-6 py-3 bg-white text-blue-900 rounded-md hover:bg-blue-50 transition-all duration-300 flex items-center justify-center"
                >
                    Schedule Printer Service
                    <i class="arrow-right-icon"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Printer & Peripheral Services</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                From simple home printers to multifunction office machines, we provide expert setup, troubleshooting, and repair services.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="printer-service-card">
                <div class="service-icon-container">
                    <i class="printer-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Printer Installation & Setup</h3>
                <p class="text-gray-600 mb-4">
                    Complete installation of new printers including hardware assembly, driver installation, and network configuration.
                </p>
                <ul class="space-y-2">
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>New printer unboxing & hardware setup</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Driver installation & software configuration</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Wireless/network printer setup</span>
                    </li>
                </ul>
            </div>
            
            <div class="printer-service-card">
                <div class="service-icon-container">
                    <i class="settings-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Printer Troubleshooting</h3>
                <p class="text-gray-600 mb-4">
                    Diagnosis and resolution of common printer problems including connectivity issues, print quality, paper jams, and error messages.
                </p>
                <ul class="space-y-2">
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>"Printer offline" error resolution</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Print quality improvement</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Error code diagnosis & fixing</span>
                    </li>
                </ul>
            </div>
            
            <div class="printer-service-card">
                <div class="service-icon-container">
                    <i class="file-icon"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Scanner Setup & Support</h3>
                <p class="text-gray-600 mb-4">
                    Configuration of scanning functions including scan-to-email, scan-to-folder, and document management solutions.
                </p>
                <ul class="space-y-2">
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Scanner setup & calibration</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Scan-to-email configuration</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Document management integration</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Printer Support for Home & Business</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Whether it's a simple home inkjet or a complex office multifunction device, we provide expert support for all printer makes and models.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Home Printer Support</h3>
                <p class="text-gray-600 mb-3">
                    For individual printers in home settings. Fixed rate of $99 for most home printer setups or troubleshooting.
                </p>
                <ul class="space-y-2">
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Single printer setup & configuration</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Home Wi-Fi printer connectivity</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Basic troubleshooting & repairs</span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-xl font-semibold mb-3 text-blue-800">Business Printer Support</h3>
                <p class="text-gray-600 mb-3">
                    For office multifunction devices and printer fleets. Custom quotes based on environment complexity.
                </p>
                <ul class="space-y-2">
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Network printer deployment</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Print server configuration</span>
                    </li>
                    <li class="printer-feature">
                        <i class="check-icon"></i>
                        <span>Advanced MFP management</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <button 
                onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' })"
                class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-all duration-300 inline-flex items-center"
            >
                Schedule Printer Service Now
                <i class="arrow-right-icon"></i>
            </button>
        </div>
    </div>
</section>

<?php get_footer(); ?>