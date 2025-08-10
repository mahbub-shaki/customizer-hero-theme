<?php 
// Include the header.php template
get_header(); 
?>

<main>
    <!-- Page title -->
    <h1>Gallery</h1>

    <!-- Introductory text for the gallery archive -->
    <p class="gallery-intro">
        Browse our curated portfolio showcasing high-quality work delivered to clients worldwide. Every project reflects our commitment to excellence.
    </p>

    <div class="gallery-grid">
        <?php 
        // WordPress Loop: check if there are posts (gallery items)
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 

                // Fetch ACF custom fields for this post
                $image    = get_field('gallery_image');
                $caption  = get_field('caption');
                $alt_text = get_field('alt_text');
        ?>
            <div class="gallery-item">
                <?php if ( $image ) : ?>
                    <!-- Link image to single gallery page -->
                    <a href="<?php the_permalink(); ?>">
                        <!-- Display gallery image with alt attribute for accessibility -->
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                    </a>
                <?php endif; ?>

                <!-- Display caption below image -->
                <p class="caption"><?php echo esc_html($caption); ?></p>
            </div>
        <?php 
            endwhile; 
        else : 
        ?>
            <!-- Message if no gallery items found -->
            <p>No gallery items found.</p>
        <?php endif; ?>
    </div>
</main>

<?php 
// Include the footer.php template
get_footer(); 
?>
