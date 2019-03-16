<div id="secondary" class="col-md-3 medi_sidebar" role="complementary">
<div class="sidebar-inner">
<?php
if (is_active_sidebar( 'sidebar' ) ) {
	 dynamic_sidebar( 'sidebar' ); 
}else{

	$args = array(
		'name'          => esc_html__( 'Sidebar', 'medispa' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Sidebar Widget Area', 'medispa' ),
		'before_widget' => '<div class="madispa-widget widget sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	);
	the_widget('WP_Widget_Calendar', 'title='.esc_html__('Calendar', 'medispa'), $args);
	the_widget('WP_Widget_Search', 'title='.esc_html__('Search', 'medispa'), $args);
	the_widget('WP_Widget_Tag_Cloud', null, $args);
	the_widget('WP_Widget_Archives', null, $args);
	the_widget('WP_Widget_Recent_Posts', null, $args);
	the_widget('WP_Widget_Categories', null, $args);

}
?>
</div>
</div><!-- #secondary -->