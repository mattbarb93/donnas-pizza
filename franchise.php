<?php /* Template Name: Franchise Page */ ?>

<?php get_header(); ?>

   <div class="franchise-container">
    <div class="franchise-content">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="heading">
                <?php the_title(); ?>
            </div>
            <div class="franchise-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>    
    <?php endif; ?>
            
    </div>


</div>

        
<?php get_footer() ?>