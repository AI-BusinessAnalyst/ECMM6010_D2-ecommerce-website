<?php $theme_data =  medispa_set_theme_var(); ?>
<!-- Blog Start -->
<div class="container-fluid m_pad medi_blogs">
	<div class="container">
         <div class="row medi_section_heading">
		<h1 class="section_title"><span> <?php echo esc_html($theme_data['blog_heading']); ?></span> </h1>
		<p class="section_title_desc"> <?php echo esc_html($theme_data['blog_desc']); ?> </p>
	</div>
		<div class="row medi_blog_section">
			<?php 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post', 'paged'=>$paged, 'posts_per_page' => 3, 'ignore_sticky_posts' => 1, );
				$wp_query = new WP_Query( $args );
				while($wp_query->have_posts()){
					$wp_query->the_post();
					get_template_part('template-parts/content','home'); 
				} 
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<!-- Blog End -->