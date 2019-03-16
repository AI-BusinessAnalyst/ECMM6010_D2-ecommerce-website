<?php
function medispa_set_theme_var() {
	$slide_one_id          = get_theme_mod('medispa_slider_one', 0);
	$slide_two_id          = get_theme_mod('medispa_slider_two', 0);
	$slide_three_id        = get_theme_mod('medispa_slider_three', 0);

	$services_one_id       = get_theme_mod('medispa_services_one', 0);
	$services_two_id       = get_theme_mod('medispa_services_two', 0);
	$services_three_id     = get_theme_mod('medispa_services_three', 0);
	

	$theme_data = array(

		//social links
		'social_link_open_in_new_tab' => get_theme_mod('medispa_social_new_tab', true),
		'social_link_facebook'        => get_theme_mod('medispa_social_link_facebook'),
		'social_link_google'          => get_theme_mod('medispa_social_link_google'),
		'social_link_youtube'         => get_theme_mod('medispa_social_link_youtube'),
		'social_link_twitter'         => get_theme_mod('medispa_social_link_twitter'),
		'social_link_linkedin'        => get_theme_mod('medispa_social_link_linkedin'),

		//quick contact
		'contact_email'               => get_theme_mod('medispa_top_email'),
		'contact_phone'               => get_theme_mod('medispa_top_phone'),

		'hide_slider'                 => get_theme_mod('medispa_hide_slider', false),
		'slide_1'                     => (absint($slide_one_id)> 0) ? get_post($slide_one_id) : (object) array('post_title' => '', 'post_content' => ''),
		'slide_2'                     => (absint($slide_two_id)> 0) ? get_post($slide_two_id) : (object) array('post_title' => '', 'post_content' => ''),
		'slide_3'                     => (absint($slide_three_id)> 0) ? get_post($slide_three_id) : (object) array('post_title' => '', 'post_content' => ''),
		'slider_image_one'            => (absint($slide_one_id)> 0) ? wp_get_attachment_image_src(get_post_thumbnail_id($slide_one_id), 'full')[0] : '',
		'slider_image_two'            => (absint($slide_two_id)> 0) ? wp_get_attachment_image_src(get_post_thumbnail_id($slide_two_id), 'full')[0] : '',
		'slider_image_three'          => (absint($slide_three_id)> 0) ? wp_get_attachment_image_src(get_post_thumbnail_id($slide_three_id), 'full')[0] : '',

		'slide_button_text'           => get_theme_mod('medispa_slide_button_text'),
		'slide_button_link'           => get_theme_mod('medispa_slide_button_link'),

		//CTA
		'call_header_text'            => get_theme_mod('medispa_call_header_text'),
		'call_desc_text'              => get_theme_mod('medispa_call_desc_text'),
		'call_bt1_text'               => get_theme_mod('medispa_call_bt1_text'),
		'call_bt1_link'               => get_theme_mod('medispa_call_bt1_link'),

		//services
		'services_header_text'        => get_theme_mod('medispa_services_header'),
		'services_desc_text'          => get_theme_mod('medispa_services_desc'),
		'services_1'                  => (absint($services_one_id)> 0) ? get_post($services_one_id) : (object) array('post_title' => '', 'post_content' => ''),
		'services_2'                  => (absint($services_two_id)> 0) ? get_post($services_two_id) : (object) array('post_title' => '', 'post_content' => ''),
		'services_3'                  => (absint($services_three_id)> 0) ? get_post($services_three_id) : (object) array('post_title' => '', 'post_content' => ''),
		'services_1_image'            => (absint($services_one_id)> 0) ? wp_get_attachment_image_src(get_post_thumbnail_id($services_one_id), 'thumbnail')[0] : '',
		'services_2_image'            => (absint($services_two_id)> 0) ? wp_get_attachment_image_src(get_post_thumbnail_id($services_two_id), 'thumbnail')[0] : '',
		'services_3_image'            => (absint($services_three_id)> 0) ? wp_get_attachment_image_src(get_post_thumbnail_id($services_three_id), 'thumbnail')[0] : '',

		//home blog
		'blog_heading'                => get_theme_mod('medispa_home_blog_heading'),
		'blog_desc'                   => get_theme_mod('medispa_home_blog_desc'),

		//clinets
		'client_heading'              => get_theme_mod('medispa_home_client_heading'),
		'client_desc'                 => get_theme_mod('medispa_home_client_desc'),
		'client_image_one'            => get_theme_mod('medispa_client_image_one'),
		'client_image_two'            => get_theme_mod('medispa_client_image_two'),
		'client_image_three'          => get_theme_mod('medispa_client_image_three'),

	);

	return $theme_data;

}

?>