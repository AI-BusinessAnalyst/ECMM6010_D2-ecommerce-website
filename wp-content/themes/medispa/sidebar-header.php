<div id="header-widget" class="medi_header_w" role="banner">
<div class="header-w-inner">
<?php
if (is_active_sidebar( 'header' ) ) {
	 dynamic_sidebar( 'header' ); 
}else{

	$args = array(
		'name'          => esc_html__( 'header', 'medispa' ),
		'id'            => 'header',
		'description'   => esc_html__( 'Header Widget Area', 'medispa' ),
		'before_widget' => '<div class="madispa-widget widget Header-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);
	the_widget('WP_Widget_Search', null, $args);

}
?>
</div>
</div><!-- #secondary -->