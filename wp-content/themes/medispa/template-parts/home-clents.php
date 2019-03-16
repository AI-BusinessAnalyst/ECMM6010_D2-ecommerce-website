<?php $theme_data =  medispa_set_theme_var(); ?>
<!-- Client Start -->
<div class="container-fluid m_pad medi_client">
	<div class="container">
        <div class="row medi_section_heading">
		<h1 class="section_title"><span><?php echo esc_html($theme_data['client_heading']); ?></span></h1>
		<p class="section_title_desc"><?php echo esc_html($theme_data['client_desc']); ?></p>
	</div>
	
		<div class="row medi-clients">
			<?php if(isset($theme_data['client_image_one']) && !empty($theme_data['client_image_one'])): ?>
			<div class="col-md-2 ms-client">
				<div class="img-thumbnail">
					<img src="<?php echo esc_url($theme_data['client_image_one']); ?>" class="img-responsive"/>
				</div>
			</div>
			<?php endif; ?>
			<?php if(isset($theme_data['client_image_two']) && !empty($theme_data['client_image_two'])): ?>
			<div class="col-md-2 ms-client">
				<div class="img-thumbnail">
					<img src="<?php echo esc_url($theme_data['client_image_two']); ?>" class="img-responsive"/>
				</div>
			</div>	
			<?php endif; ?>
			<?php if(isset($theme_data['client_image_three']) && !empty($theme_data['client_image_three'])): ?>
			<div class="col-md-2 ms-client">
				<div class="img-thumbnail">
					<img src="<?php echo esc_url($theme_data['client_image_three']); ?>" class="img-responsive"/>
				</div>
			</div>		
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Client End -->