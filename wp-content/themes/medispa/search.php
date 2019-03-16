<?php
get_header(); 
?>
<!-- Blog Start -->
<div class="container-fluid m_pad medi_blogs">
	<div class="container">
		<div class="row">
			<div class="col-md-9 medi_right_side">
				<div class="row medi_blog_section">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'medispa' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->
						<?php
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', 'search' );
								endwhile;
						?>
						<div class="clearfix"></div>
						<div class="col-md-12 madi_blog_pagination">
							<ul class="pager">
								<li class="previous"> <?php previous_posts_link( '<i class="fa fa-arrow-left"></i>'.__('Previous Page', 'medispa') ); ?></a></li>
								<li class="next"> <?php next_posts_link( __('Next Page', 'medispa').'<i class="fa fa fa-arrow-right"></i>' ); ?> </a></li>
							</ul>
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
<?php get_footer(); ?>