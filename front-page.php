<?php 
// Load the header template (header.php)
get_header(); 
?>

<!-- Hero Section -->
<section class="hero-section py-20 text-center bg-gray-100">

    <!-- Hero Title (Dynamic from WordPress Customizer) -->
    <h1 class="text-4xl font-bold mb-4">
        <?php 
        // Get hero title from Customizer with a default fallback text
        echo esc_html( get_theme_mod('hero_title', 'Welcome to Our Website') ); 
        ?>
    </h1>

    <!-- Hero Subtitle (Dynamic from WordPress Customizer) -->
    <p class="text-lg mb-6">
        <?php 
        // Get hero subtitle from Customizer with a default fallback text
        echo esc_html( get_theme_mod('hero_subtitle', 'We provide awesome services.') ); 
        ?>
    </p>

    <!-- Hero Button (Dynamic link & text from WordPress Customizer) -->
    <a 
        href="<?php echo esc_url( get_theme_mod('hero_button_url', '#') ); ?>" 
        class="btn-primary px-6 py-3 bg-blue-600 text-white rounded"
    >
        <?php 
        // Get button text from Customizer with a default fallback text
        echo esc_html( get_theme_mod('hero_button_text', 'Learn More') ); 
        ?>
    </a>
</section>

<?php 
// Load the footer template (footer.php)
get_footer(); 
?>
