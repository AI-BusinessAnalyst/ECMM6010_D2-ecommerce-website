<div id="post-<?php the_ID(); ?>" <?php post_class("col-md-4 col-sm-6 medi_blog_desc"); ?>>
	<div class="post-inner">
		<div class="img-thumbnail">
			<?php 
				if(has_post_thumbnail()): 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
				 	the_post_thumbnail('medispa-285x230-crop', array( 'class' => 'img-responsive' )); 
				?>
				<div class="blog_overlay">
					<a class="bt-left" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-chain icon"></i></a>
					<a class="lightbox_a bt-right" href="<?php echo $image[0]; ?>"><i class="fa fa-search icon"></i></a>
				</div>	
			<?php endif; ?>
		</div>
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<ul class="ms-date">
			<li class="m_date"><i class="fa fa-clock-o"></i> <?php echo medispa_get_post_date(); ?></li>
			<li class="m_comment"><i class="fa fa-comment-o"></i> <?php medispa_get_comment_count(); ?></li>
		</ul>
	    <ul class="m_category">
			<li><i class="fa fa-folder-open"></i> <?php esc_html_e('','medispa'); ?> </li>
			<?php echo medispa_get_categories(); ?>
		</ul>
		<ul class="m_category">
			<li><i class="fa fa-tags"></i> <?php esc_html_e('','medispa'); ?> </li>
			<?php echo medispa_get_tags(); ?>
		</ul>
		<div class="entry-summary"><?php the_excerpt(); ?></div>
		<a class="btn read-more-link" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e('READ MORE', 'medispa'); ?></a>
	</div>
</div>