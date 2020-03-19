<?php /*Template Name: Catering Template */ ?>

<?php get_header() ?>

   
<div class="catering-container">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="heading">
                <?php the_title(); ?>
            </div>
            <div class="catering-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>    
    <?php endif; ?>
            
    <div class="heading">SELECT YOUR STORE</div>
    <div class="catering-stores">
        <a href="../#cliffside-park" class="catering-store-1 btn-green">Cliffside Park</a>
        <a href="../#pompton-lakes" class="catering-store-2 btn-red">Pompton Lakes</a>  
        <a href="../#saddle-brook" class="catering-store-3 btn-red">Saddle Brook</a> 
        <a href="../#palisades-park" class="catering-store-4 btn-green">Palisades Park</a>
    </div>

</div>

<?php get_footer() ?>