<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        $image = get_field('gallery_image');
        $caption = get_field('caption');
        $alt_text = get_field('alt_text');
    ?>
        <div class="single-gallery-wrapper">
            <h1><?php the_title(); ?></h1>

            <?php if ($image): ?>
                <div class="gallery-image">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                </div>
            <?php endif; ?>

            <?php if ($caption): ?>
                <p class="caption"><?php echo esc_html($caption); ?></p>
            <?php endif; ?>

            <div class="client-message-section">
                <h2>Looking for a Custom Gallery Like This?</h2>
                <p>
                    Every gallery you see here is crafted with precision and creativity. Whether you're an artist, business, or entrepreneur – we can help you showcase your work beautifully.
                </p>
                <div class="cta-button-wrapper">
                    <a href="/contact" class="cta-button">Contact Us to Get Started</a>
                </div>
            </div>
        </div>
    <?php endwhile; else : ?>
        <p>Sorry, no gallery item found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
