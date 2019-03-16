	</div><!-- #content -->
    <!-- Footer Start -->
    <footer class="medispa-footer footer" role="contentinfo">
        <div class="container-fluid medi_footer">
            <div class="container">
                <div class="row footer_detail">
                    <?php 
                        $footer_widget  = array(
                            'name'          => esc_html__('Footer Widget Area', 'medispa'),
                            'id'            => 'footer-widget-area',
                            'description'   => esc_html__('footer widget area', 'medispa'),
                            'before_widget' => '<div class="col-md-3 col-sm-6 footer_widget widget">',
                            'after_widget'  => '</div>',
                            'before_title'  => '<div class="row widget_heading"><h2>',
                            'after_title'   => '</h2></div>',
                        );

                       if ( is_active_sidebar( 'footer-widget-area' ) ) {
                             dynamic_sidebar( 'footer-widget-area'); 
                         }else{ 
                            the_widget('WP_Widget_Calendar', 'title='.esc_attr__('Calendar', 'medispa'), $footer_widget);
                            the_widget('WP_Widget_Categories', null, $footer_widget);
                            the_widget('WP_Widget_Pages', null, $footer_widget);
                            the_widget('WP_Widget_Archives', null, $footer_widget);
                        } 
                    ?>
                </div>
            </div>
        </div>
        <div class="container-fluid footer_copyright">
            <div class="container">
                <div class="row footer_link">
                    <div class="col-md-8 col-sm-8 footer-copy-text">
                        <p>&copy; <?php echo esc_html(date('Y')).' '; bloginfo( 'name' ); ?> | <?php printf( esc_html__( 'Theme by %1$s', 'medispa' ),  '<a href="'.esc_url('https://themescorners.com/').'" rel="designer">'.__('Themes Corners','medispa').'</a>' ); ?></p>
                    </div>
                    <div class="col-md-4 col-sm-4 footer-copy-social">
                        <?php medispa_get_social_block() ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</div><!-- .wrapper -->
<?php wp_footer(); ?>
</body>
</html>
