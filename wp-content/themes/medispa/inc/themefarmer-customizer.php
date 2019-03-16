<?php

function medispa_upgrade_control($wp_customize) {

	class MediSpa_Upsale_Customize_Control extends WP_Customize_Section {
		public $type = 'themefarmer-upsell';
		public function render() {
			$classes = 'accordion-section control-section-' . $this->type;
			$id      = 'themefarmer-upsell-buttons-section';
			?>
		    <li id="accordion-section-<?php echo esc_attr($this->id); ?>"class="<?php echo esc_attr($classes); ?>">
		        <div class="themescorners-upsale">
		          	<a href="<?php echo esc_url('https://themescorners.com/tc_theme/medispa/'); ?>" target="_blank" class="themescorners-upsale-bt" id="themescorners-pro-button"><?php _e('VIEW PRO VERSION ', 'medispa');?></a>
		        </div>
		    </li>
		    <?php
		}

	}

	$wp_customize->add_section(new MediSpa_Upsale_Customize_Control($wp_customize, 'medispa-upsell', array(
		'priority' => '1000',
	)));

}

function medispa_settings_control($wp_customize) {

	class MediSpa_Page_Dropdown_Control extends WP_Customize_Control {

		public function render_content() {
			$pages = get_pages(array('hide_empty' => false));
			if (!empty($pages)): ?>
            <label>
              	<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
              	<select <?php $this->link();?>>
                <option value="0"><?php esc_html_e('Select Page', 'medispa');?></option>
              	<?php
					foreach ($pages as $page):
							printf('<option value="%s" %s>%s</option>',
								$page->ID,
								selected($this->value(), $page->ID, false),
								$page->post_title
							);
					endforeach;
				?>
              	</select>
            </label>
          	<?php
		endif;
		}

	}

/** Top Bar **/

	$wp_customize->add_section('medispa_top_bar_section', array(
		'title'      => __('Top Bar Settings', 'medispa'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('medispa_social_new_tab',
		array(
			'default'           => true,
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_checkbox',
		));

	$wp_customize->add_control('medispa_social_new_tab', array(
		'type'     => 'checkbox',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Open social links in new tab', 'medispa'),
	));

	$wp_customize->add_setting('medispa_social_link_facebook',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_url',
		)
	);

	$wp_customize->add_control('medispa_social_link_facebook', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Facebook Page URL', 'medispa'),
	));

	$wp_customize->add_setting('medispa_social_link_google', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_url',
	));

	$wp_customize->add_control('medispa_social_link_google', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Google Page URL', 'medispa'),
	));

	$wp_customize->add_setting('medispa_social_link_youtube', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_url',
		)
	);

	$wp_customize->add_control('medispa_social_link_youtube', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Youtube Page URL', 'medispa'),
	));

	$wp_customize->add_setting('medispa_social_link_twitter', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_url',
		)
	);
	$wp_customize->add_control('medispa_social_link_twitter', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Twitter Page URL', 'medispa'),
	));

	$wp_customize->add_setting('medispa_social_link_linkedin', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_url',
		)
	);
	$wp_customize->add_control('medispa_social_link_linkedin', array(
		'type'     => 'url',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Linkedin Page URL', 'medispa'),
	));

	$wp_customize->add_setting('medispa_top_email', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('medispa_top_email', array(
		'type'     => 'email',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Email', 'medispa'),
	));

	$wp_customize->add_setting('medispa_top_phone', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control('medispa_top_phone', array(
		'type'     => 'text',
		'priority' => 200,
		'section'  => 'medispa_top_bar_section',
		'label'    => __('Phone', 'medispa'),
	));

/** Top Bar **/

/** Slider **/

	$wp_customize->add_section('medispa_slider_section', array(
		'title'      => __('Slider Settings', 'medispa'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('medispa_hide_slider',
		array(
			'default'           => false,
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_checkbox',
		)
	);

	$wp_customize->add_control('medispa_hide_slider', array(
		'type'     => 'checkbox',
		'priority' => 1,
		'section'  => 'medispa_slider_section',
		'label'    => __('Hide Slider ', 'medispa'),
	));

	$wp_customize->add_setting('medispa_slider_one', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',

	));
	$wp_customize->add_control(new MediSpa_Page_Dropdown_Control($wp_customize, 'medispa_slider_one',
		array(
			'label'    => __('Slide One Page', 'medispa'),
			'section'  => 'medispa_slider_section',
			'priority' => 1,
		)));

	$wp_customize->add_setting('medispa_slider_two', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',

	));
	$wp_customize->add_control(new MediSpa_Page_Dropdown_Control($wp_customize, 'medispa_slider_two',
		array(
			'label'    => __('Slide Two Page', 'medispa'),
			'section'  => 'medispa_slider_section',
			'priority' => 1,
		)));

	$wp_customize->add_setting('medispa_slider_three', array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',

	));
	$wp_customize->add_control(new MediSpa_Page_Dropdown_Control($wp_customize, 'medispa_slider_three',
		array(
			'label'    => __('Slide Three Page', 'medispa'),
			'section'  => 'medispa_slider_section',
			'priority' => 1,
		)));

	$wp_customize->add_setting('medispa_slide_button_text',
		array(
			'default'           => __('Click To Begin', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_nohtml',
		));

	$wp_customize->add_control('medispa_slide_button_text', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_slider_section',
		'label'    => __('Button Text', 'medispa'),
	));

	$wp_customize->add_setting('medispa_slide_button_link',
		array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'medispa_sanitize_url',
		));

	$wp_customize->add_control('medispa_slide_button_link', array(
		'type'     => 'url',
		'priority' => 1,
		'section'  => 'medispa_slider_section',
		'label'    => __('Button Link', 'medispa'),
	));

/** Slider **/

/** servces **/

	$wp_customize->add_section('medispa_servces_section', array(
		'title'      => __('Services Settings', 'medispa'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('medispa_services_header', array(
			'default'           => __('Service Heading Text', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('medispa_services_header', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_servces_section',
		'label'    => __('Title Text', 'medispa'),
	));

	$wp_customize->add_setting('medispa_services_desc', array(
			'default'           => __('Service description text', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('medispa_services_desc', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_servces_section',
		'label'    => __('Description Text', 'medispa'),
	));

	$wp_customize->add_setting('medispa_services_one', array(
			'default'			=> esc_url(get_template_directory_uri().'images/servces1.jpg'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
	));
	$wp_customize->add_control(new MediSpa_Page_Dropdown_Control($wp_customize, 'medispa_services_one', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_servces_section',
		'label'    => __('Select Service One Page', 'medispa'),
	)));


	$wp_customize->add_setting('medispa_services_two', array(
			'default'			=> esc_url(get_template_directory_uri().'images/servces2.jpg'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
	));
	$wp_customize->add_control(new MediSpa_Page_Dropdown_Control($wp_customize, 'medispa_services_two', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_servces_section',
		'label'    => __('Select Service Two Page', 'medispa'),
	)));


	$wp_customize->add_setting('medispa_services_three', array(
			'default'			=> esc_url(get_template_directory_uri().'images/servces3.jpg'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'absint',
	));
	$wp_customize->add_control(new MediSpa_Page_Dropdown_Control($wp_customize, 'medispa_services_three', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_servces_section',
		'label'    => __('Select Service Three Page', 'medispa'),
	)));

/** servces **/

/** Latest Posts **/

	$wp_customize->add_section('medispa_home_blog_section', array(
		'title'      => __('Latest Blogs Settings', 'medispa'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('medispa_home_blog_heading', array(
			'default'           => __('Our Blogs', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));
	$wp_customize->add_control('medispa_home_blog_heading', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_home_blog_section',
		'label'    => __('Heading', 'medispa'),
	));

	$wp_customize->add_setting('medispa_home_blog_desc',
		array(
			'default'           => __('Be updated with latest news', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));
	$wp_customize->add_control('medispa_home_blog_desc', array(
		'type'     => 'textarea',
		'priority' => 1,
		'section'  => 'medispa_home_blog_section',
		'label'    => __('Description', 'medispa'),
	));

/** Latest Posts **/


/* Clients */
	$wp_customize->add_section('medispa_home_client_section', array(
		'title'      => __('Clients Settings', 'medispa'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('medispa_home_client_heading',
		array(
			'default'           => __('Our Clients', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('medispa_home_client_heading', array(
		'type'     => 'text',
		'priority' => 1,
		'section'  => 'medispa_home_client_section',
		'label'    => __('Heading', 'medispa'),
	));

	$wp_customize->add_setting('medispa_home_client_desc',
		array(
			'default'           => __('We have awesome client list', 'medispa'),
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control('medispa_home_client_desc', array(
		'type'     => 'textarea',
		'priority' => 1,
		'section'  => 'medispa_home_client_section',
		'label'    => __('Description', 'medispa'),
	));

	$wp_customize->add_setting('medispa_client_image_one', array(
		'default'           => esc_url(get_template_directory_uri() . '/images/client1.png'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'medispa_sanitize_url',

	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'medispa_client_image_one',
		array(
			'label'    => __('Upload Client Image One', 'medispa'),
			'section'  => 'medispa_home_client_section',
			'priority' => 1,
		)));

	$wp_customize->add_setting('medispa_client_image_two', array(
		'default'           => esc_url(get_template_directory_uri() . '/images/client2.png'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'medispa_sanitize_url',

	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'medispa_client_image_two',
		array(
			'label'    => __('Upload Client Image Two', 'medispa'),
			'section'  => 'medispa_home_client_section',
			'priority' => 1,
		)));

	$wp_customize->add_setting('medispa_client_image_three', array(
		'default'           => esc_url(get_template_directory_uri() . '/images/client3.png'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'medispa_sanitize_url',

	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'medispa_client_image_three',
		array(
			'label'    => __('Upload Client Image Three', 'medispa'),
			'section'  => 'medispa_home_client_section',
			'priority' => 1,
		)));

/* Clients */

	$wp_customize->get_section('title_tagline')->priority     = 10;
	$wp_customize->get_section('static_front_page')->priority = 30;
	$wp_customize->get_section('header_image')->priority      = 50;

	$wp_customize->get_setting( 'blogname' )->transport 		= 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport 	= 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
}

add_action('customize_register', 'medispa_upgrade_control');
add_action('customize_register', 'medispa_settings_control');

?>
