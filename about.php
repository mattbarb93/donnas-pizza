<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>

    <div class="about-us-container">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="about-us-heading heading">
                    <?php the_title(); ?>
                </div>
                <div class="about-us-text">
                    <?php the_content(); ?>
                </div>
                    
            <?php endwhile; ?>    
        <?php endif; ?>
        


</div>
        
<?php get_footer() ?>