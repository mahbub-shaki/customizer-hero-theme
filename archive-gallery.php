<?php get_header(); ?>

<main>
    <h1>Gallery</h1>
     <p class="gallery-intro"> Browse our curated portfolio showcasing high-quality work delivered to clients worldwide. Every project reflects our commitment to excellence. </p>
    <div class="gallery-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
            $image = get_field('gallery_image');
            $caption = get_field('caption');
            $alt_text = get_field('alt_text');
        ?>
            <div class="gallery-item">
                <?php if ($image): ?>
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                    </a>
                <?php endif; ?>
                <p class="caption"><?php echo esc_html($caption); ?></p>
            </div>
        <?php endwhile; else : ?>
            <p>No gallery items found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
