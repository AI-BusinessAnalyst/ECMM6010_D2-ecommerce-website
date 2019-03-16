<?php
get_header(); 
?>
<!-- Page Start -->
<div class="container-fluid m_pad medi_blogs">
    <div class="container">
        <div class="row">
            <div class="col-md-9 medi_right_side">
                <div class="row medi_blog_section">
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'page' );
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- Page End -->
<?php 
get_footer();
