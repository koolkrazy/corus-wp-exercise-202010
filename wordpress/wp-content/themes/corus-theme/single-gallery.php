<?php
    // Gallery CPT Single template
    get_header();
?>
<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>
    <article>
        <div class="container">
            <div class="row">
                <?=the_title( '<h2 class="entry-title">', '</a></h2>' ); ?>
                <div>
                    <?=the_content() ?>
                </div>
                <div id="myslick-slider" class="myslick-slider">
                    <div><img src="<?php echo get_field('slider_image_1', get_the_ID())['sizes']['large']; ?>" alt="" /></div>
                    <div><img src="<?php echo get_field('slider_image_2', get_the_ID())['sizes']['large']; ?>" alt="" /></div>
                    <div><img src="<?php echo get_field('slider_image_3', get_the_ID())['sizes']['large']; ?>" alt="" /></div>
                </div>
            </div>
        </div>
    </article>
<?php
// End the loop.
endwhile;
?>
<?php 
get_footer();
?>