<?php
get_header(); 
?>
<!-- Blog Start -->
<div class="container-fluid m_pad medi_blogs">
	<div class="container">
		<div class="row">
			<div class="col-md-9 medi_right_side">
				<div class="row medi_blog_section">
					<?php
							if ( have_posts() ) :

									while ( have_posts() ) : the_post();
										get_template_part( 'template-parts/content', 'index' );
									endwhile;
						?>
						<div class="clearfix"></div>
						<div class="col-md-12 madi_blog_pagination">
							<?php the_posts_pagination(); ?>
						</div>
						<?php
							else :
					
							get_template_part( 'template-parts/content', 'none' );
				
						endif; 
					?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<!-- Blog End -->
<?php
get_footer();
