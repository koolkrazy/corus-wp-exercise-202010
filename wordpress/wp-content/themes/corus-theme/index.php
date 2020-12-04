<?php
/**
 * The main template file
 *
 */
    get_header(); 
?>
<div id="content" class="site-content">
    <main id="primary" class="content-area">
    <?php
    // Start the loop.
        while ( have_posts() ) : the_post();
    ?>
        <article>
            <div class="container">
                <div class="row">
                    <?=the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    <div>
                    <?=the_content() ?>
                    </div>
                </div>
            </div>
        </article>
    <?php
        // End the loop.
        endwhile;
    ?>
    </main>
    <?php/* get_sidebar(); */ ?>
</div><!-- .site-content -->
<?php
    get_footer();
?>