<?php
get_header(); 

?>
<!-- Single Start -->
<div class="container-fluid m_pad medi_blogs">
    <div class="container">
        <div class="row">
            <div class="col-md-9 medi_right_side">
                <?php while(have_posts()): the_post(); ?>
                <div class="row medi_blog_section">
                    <?php get_template_part( 'template-parts/content', 'single' ); ?>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 madi_blog_pagination">
                    <?php the_post_navigation(); ?>
                </div>
                <div class="clearfix"></div>
                <?php 
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                ?>
                <?php endwhile; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php 
get_footer();
