<?php
/**
 * IT Carolina WordPress Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function it_carolina_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'it-carolina'),
        'footer' => __('Footer Menu', 'it-carolina'),
    ));
}
add_action('after_setup_theme', 'it_carolina_theme_setup');

/**
 * Enqueue styles and scripts
 */
function it_carolina_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('it-carolina-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Enqueue theme JavaScript
    wp_enqueue_script(
        'it-carolina-script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'it_carolina_scripts');

/**
 * Add custom CSS for optimization
 */
function it_carolina_custom_css() {
    echo '<style>
        /* Loading spinner */
        .loading-spinner {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            display: none;
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #2563eb;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Performance optimizations */
        img {
            content-visibility: auto;
            contain-intrinsic-size: 300px 200px;
        }
        
        img[width][height] {
            aspect-ratio: attr(width) / attr(height);
        }
    </style>';
}
add_action('wp_head', 'it_carolina_custom_css');

/**
 * Contact form handler
 */
function handle_contact_form_submission() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die(__('Security check failed', 'it-carolina'));
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
        exit;
    }
    
    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - IT Carolina';
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n";
    $body .= "Message:\n$message";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        // Save to database (optional)
        global $wpdb;
        $table_name = $wpdb->prefix . 'it_carolina_contacts';
        
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'service' => $service,
                'message' => $message,
                'submitted_at' => current_time('mysql')
            ),
            array('%s', '%s', '%s', '%s', '%s', '%s')
        );
        
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_contact_form_submit', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form_submit', 'handle_contact_form_submission');

/**
 * Create contact form database table
 */
function create_contact_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'it_carolina_contacts';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20),
        service varchar(50),
        message text NOT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_contact_table');

/**
 * Add SEO meta tags
 */
function it_carolina_seo_meta() {
    if (is_front_page()) {
        echo '<meta name="description" content="Professional computer repair & IT support in Charlotte NC. Same-day PC repair, virus removal, network setup. Call (704) 520-0809 for free quote.">' . "\n";
        echo '<meta name="keywords" content="computer repair Charlotte NC, IT support Charlotte, PC repair near me, virus removal Charlotte, network setup Charlotte, laptop repair Charlotte">' . "\n";
        echo '<meta property="og:title" content="Computer Repair Charlotte NC | IT Support | IT Carolina">' . "\n";
        echo '<meta property="og:description" content="Professional computer repair & IT support in Charlotte NC. Same-day PC repair, virus removal, network setup.">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . home_url('/') . '">' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="Computer Repair Charlotte NC | IT Support | IT Carolina">' . "\n";
        echo '<meta name="twitter:description" content="Professional computer repair & IT support in Charlotte NC. Same-day PC repair, virus removal, network setup.">' . "\n";
    }
}
add_action('wp_head', 'it_carolina_seo_meta');

/**
 * Add structured data
 */
function it_carolina_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'IT Carolina',
            'description' => 'Professional computer repair and IT support services in Charlotte, NC',
            'url' => home_url('/'),
            'telephone' => '+1-704-520-0809',
            'email' => 'hello@itcarolina.us',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressLocality' => 'Charlotte',
                'addressRegion' => 'NC',
                'addressCountry' => 'US'
            ),
            'geo' => array(
                '@type' => 'GeoCoordinates',
                'latitude' => '35.2271',
                'longitude' => '-80.8431'
            ),
            'areaServed' => 'Charlotte Metro Area',
            'serviceType' => array(
                'Computer Repair',
                'IT Support',
                'Network Setup',
                'Virus Removal',
                'Data Recovery',
                'Website Design'
            ),
            'priceRange' => '$$',
            'openingHours' => 'Mo-Fr 08:00-18:00, Sa 09:00-15:00'
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'it_carolina_structured_data');

/**
 * Remove WordPress version number for security
 */
function remove_version_number() {
    return '';
}
add_filter('the_generator', 'remove_version_number');

/**
 * Disable XML-RPC for security
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Add security headers
 */
function add_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
add_action('send_headers', 'add_security_headers');

/**
 * Optimize database queries
 */
function optimize_queries() {
    // Remove unnecessary queries
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}
add_action('init', 'optimize_queries');

/**
 * Add preconnect links for performance
 */
function add_preconnect_links() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'add_preconnect_links', 1);

/**
 * Customize login page
 */
function custom_login_logo() {
    echo '<style type="text/css">
        #login h1 a, .login h1 a {
            background-image: none;
            color: #2563eb;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            text-indent: 0;
            width: auto;
            height: auto;
        }
        #login h1 a:before {
            content: "IT Carolina";
        }
    </style>';
}
add_action('login_enqueue_scripts', 'custom_login_logo');

/**
 * Change login page URL
 */
function custom_login_url() {
    return home_url('/');
}
add_filter('login_headerurl', 'custom_login_url');

/**
 * Add theme customizer options
 */
function it_carolina_customize_register($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('contact_info', array(
        'title' => __('Contact Information', 'it-carolina'),
        'priority' => 30,
    ));
    
    // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default' => '(704) 520-0809',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone Number', 'it-carolina'),
        'section' => 'contact_info',
        'type' => 'text',
    ));
    
    // Email Address
    $wp_customize->add_setting('email_address', array(
        'default' => 'hello@itcarolina.us',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('email_address', array(
        'label' => __('Email Address', 'it-carolina'),
        'section' => 'contact_info',
        'type' => 'email',
    ));
    
    // Business Address
    $wp_customize->add_setting('business_address', array(
        'default' => 'Greater Charlotte Metro Area',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('business_address', array(
        'label' => __('Service Area', 'it-carolina'),
        'section' => 'contact_info',
        'type' => 'text',
    ));
}
add_action('customize_register', 'it_carolina_customize_register');

/**
 * Add admin menu for contact form submissions
 */
function add_contact_admin_menu() {
    add_menu_page(
        'Contact Submissions',
        'Contact Forms',
        'manage_options',
        'contact-submissions',
        'display_contact_submissions',
        'dashicons-email-alt',
        30
    );
}
add_action('admin_menu', 'add_contact_admin_menu');

/**
 * Display contact form submissions in admin
 */
function display_contact_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'it_carolina_contacts';
    
    $submissions = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");
    
    echo '<div class="wrap">';
    echo '<h1>Contact Form Submissions</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Service</th><th>Message</th><th>Date</th></tr></thead>';
    echo '<tbody>';
    
    foreach ($submissions as $submission) {
        echo '<tr>';
        echo '<td>' . esc_html($submission->name) . '</td>';
        echo '<td>' . esc_html($submission->email) . '</td>';
        echo '<td>' . esc_html($submission->phone) . '</td>';
        echo '<td>' . esc_html($submission->service) . '</td>';
        echo '<td>' . esc_html(substr($submission->message, 0, 100)) . '...</td>';
        echo '<td>' . esc_html($submission->submitted_at) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody></table>';
    echo '</div>';
}
?>