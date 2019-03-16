<?php $theme_data =  medispa_set_theme_var(); ?>
<!-- Services Start -->
<div class="container-fluid m_pad medi_services">
	<div class="container">
              <div class="row medi_section_heading">
		   <h1 class="section_title"><span> <?php echo esc_html($theme_data['services_header_text']); ?> </span></h1>
		   <p class="section_title_desc"> <?php echo esc_html($theme_data['services_desc_text']); ?> </p>
	      </div>
		<div class="row medi_ser">
			<div class="col-md-4 col-sm-6 medi_ser_section">
				<div class="medi-ser">
					<?php if(isset($theme_data['services_1_image']) && !empty($theme_data['services_1_image'])): ?>
					<div class="img-thumbnail">
						<img src="<?php echo esc_url($theme_data['services_1_image']); ?>" class="img-responsive"/>
					</div>
					<?php endif; ?>
					<h2><?php echo esc_html($theme_data['services_1']->post_title); ?></h2>
					<p><?php echo esc_html($theme_data['services_1']->post_content); ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 medi_ser_section">
				<div class="medi-ser">
					<?php if(isset($theme_data['services_1_image']) && !empty($theme_data['services_1_image'])): ?>
					<div class="img-thumbnail">
						<img src="<?php echo esc_url($theme_data['services_2_image']); ?>" class="img-responsive"/>
					</div>
					<?php endif; ?>
					<h2><?php echo esc_html($theme_data['services_2']->post_title); ?></h2>
					<p><?php echo esc_html($theme_data['services_2']->post_content); ?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 medi_ser_section">
				<div class="medi-ser">
					<?php if(isset($theme_data['services_1_image']) && !empty($theme_data['services_1_image'])): ?>
					<div class="img-thumbnail">
						<img src="<?php echo esc_url($theme_data['services_3_image']); ?>" class="img-responsive"/>
					</div>
					<?php endif; ?>
					<h2><?php echo esc_html($theme_data['services_3']->post_title); ?></h2>
					<p><?php echo esc_html($theme_data['services_3']->post_content); ?></p>
				</div>				
			</div>				
		</div>
	</div>
</div>
<!-- Services End -->