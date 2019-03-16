<?php
get_header(); 
medispa_page_header();
?>
<div class="container-fluid">
	<!-- Left Sidebar Start -->
	<div class="container">
		<div class="col-md-12 bp-error">
				<section class="error-404 not-found">
					<div class="col-md-12 page-header error">
							<h1>40<span class="grey">4</span></h1>
							<h2><span class="fa fa-exclamation-circle"></span><?php _e('ERROR','medispa'); ?></h2>
							<h3><?php _e('Page cannot be found','medispa'); ?></h3>
							<p><?php _e('The Page you requested is not be found. This could be spelling error in the url.','medispa'); ?></p>
							<a href="<?php echo esc_url(home_url()); ?>" class="btn btn-info"><?php _e('Go back to homepage','medispa'); ?></a>
					</div><!-- .page-header -->	
				</section><!-- .error-404 -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
