
<?php /* Template Name: Locations Template */ ?>
<?php get_header() ?>

<div class="locations-container">
    <div class="location-content">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="locations-header heading"><?php the_title(); ?></div>
            <div class="franchise-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>    
    <?php endif; ?>

    

</div>

<?php get_footer() ?>