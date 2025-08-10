<?php 
/**
 * Theme Footer Template
 * 
 * This file contains the footer markup and calls the wp_footer() hook.
 * It also includes copyright and site info.
 */
?>

<footer class="site-footer bg-gray-100 text-center p-6 mt-12 text-sm text-gray-600">
    <!-- Display current year and site name dynamically -->
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    
    <!-- Additional site description or credits -->
    <p>
        We specialize in creating clean, responsive, and performance-optimized websites using WordPress and ACF — perfect for portfolios, business showcases, and content-rich galleries.
    </p>
</footer>

<?php 
// WordPress footer hook: necessary for plugins and scripts before closing body tag
wp_footer(); 
?>

</body>
</html>
