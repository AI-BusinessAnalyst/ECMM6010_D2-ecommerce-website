<?php $theme_data =  medispa_set_theme_var(); ?>
<?php if(!$theme_data['hide_slider']): ?>
<!-- Slider Start -->
<div class="row medi_slider">
	<div class="swiper-container swiper1">
		<div class="swiper-wrapper">
			<?php if(isset($theme_data['slider_image_one']) && !empty($theme_data['slider_image_one'])): ?>
			<div class="swiper-slide">
				<img src="<?php echo esc_url($theme_data['slider_image_one']); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="container">
						<div class="row md-slider">
							<h1 class="animation animated-item-1"><?php echo esc_html($theme_data['slide_1']->post_title); ?></h1>
							<p class="animation animated-item-2"><?php echo wp_kses_post($theme_data['slide_1']->post_content); ?></p>
							<a href="<?php echo esc_url($theme_data['slide_button_link']); ?>" class="btn s_link animation animated-item-3"> <?php echo esc_html($theme_data['slide_button_text']); ?> </a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if(isset($theme_data['slider_image_two']) && !empty($theme_data['slider_image_two'])): ?>
			<div class="swiper-slide">
				<img src="<?php echo esc_url($theme_data['slider_image_two']); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="container">
						<div class="row md-slider">
							<h1 class="animation animated-item-1"><?php echo esc_html($theme_data['slide_2']->post_title); ?></h1>
							<p class="animation animated-item-2"><?php echo wp_kses_post($theme_data['slide_2']->post_content); ?></p>
							<a href="<?php echo esc_url($theme_data['slide_button_link']); ?>" class="btn s_link animation animated-item-3"> <?php echo esc_html($theme_data['slide_button_text']); ?> </a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if(isset($theme_data['slider_image_three']) && !empty($theme_data['slider_image_three'])): ?>
			<div class="swiper-slide">
				<img src="<?php echo esc_url($theme_data['slider_image_three']); ?>" class="img-responsive"/>
				<div class="overlay"></div>
				<div class="carousel-caption">
					<div class="container">
						<div class="row md-slider">
							<h1 class="animation animated-item-1"><?php echo esc_html($theme_data['slide_3']->post_title); ?></h1>
							<p class="animation animated-item-2"><?php echo wp_kses_post($theme_data['slide_3']->post_content); ?></p>
							<a href="<?php echo esc_url($theme_data['slide_button_link']); ?>" class="btn s_link animation animated-item-3"> <?php echo esc_html($theme_data['slide_button_text']); ?> </a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		 <!-- Add Pagination -->
		<!-- <div class="swiper-pagination swiper-pagination1"></div> -->
		<!-- Add Arrows -->
		<div class="swiper-button-prev swiper-button-prev1"><i class="fa fa-angle-left"></i></div>
		<div class="swiper-button-next swiper-button-next1"><i class="fa fa-angle-right"></i></div>
	</div>	
</div>	
<!-- Slider End -->
<?php endif; ?>