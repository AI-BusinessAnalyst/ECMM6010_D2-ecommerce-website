<?php
function medispa_top_contact_info(){
    $theme_data = medispa_set_theme_var();
    ?>
    <ul class="social">
        <?php if(!empty($theme_data['contact_email'])): ?>
        <li class="contacts"> <i class="fa fa-envelope"></i> <?php echo esc_html($theme_data['contact_email']); ?></li>
        <?php endif; ?>
        <?php if(!empty($theme_data['contact_phone'])): ?>
        <li class="contacts"> <i class="fa fa-phone"></i> <?php echo esc_html($theme_data['contact_phone']); ?> </li>
        <?php endif; ?>
        </ul>
    <?php
}

function medispa_get_social_block(){
    $theme_data = medispa_set_theme_var();
    $open_new_tab = ($theme_data['social_link_open_in_new_tab'])?'target="_blank"':'';
    $is_all_empty = true;
    ?>
        <ul class="f_social">
        	<?php if(!empty($theme_data['social_link_facebook'])): $is_all_empty = false;?>
            <li class="facebook"><a href="<?php echo esc_url($theme_data['social_link_facebook']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-facebook icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_google'])): $is_all_empty = false;?>
            <li class="google"><a href="<?php echo esc_url($theme_data['social_link_google']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-google-plus icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_twitter'])): $is_all_empty = false;?>
            <li class="twitter"><a href="<?php echo esc_url($theme_data['social_link_twitter']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-twitter icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_youtube'])): $is_all_empty = false;?>
            <li class="youtube"><a href="<?php echo esc_url($theme_data['social_link_youtube']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-youtube icon"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($theme_data['social_link_linkedin'])): $is_all_empty = false;?>
            <li class="linkedin"><a href="<?php echo esc_url($theme_data['social_link_linkedin']); ?>"  <?php echo esc_attr($open_new_tab); ?>><i class="fa fa-linkedin icon"></i></a></li>
            <?php endif; ?>
            <?php if($is_all_empty && current_user_can('edit_theme_options')): ?>
            <li><a href="<?php echo esc_url(admin_url( 'customize.php' )); ?>" target="_blank"><i class="fa fa-info icon"></i> <?php _e('Click To Add Social Links ','medispa'); ?> </a> </li>
            <?php endif; ?>
        </ul>
    <?php
}


function medispa_comment( $comment, $args, $depth ){
    $GLOBALS['comment'] = $comment;
    //get theme data
    global $comment_data;
    //translations
    $leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] :__('Reply','medispa'); ?>
    <div class="col-xs-12 border">
        <div class="col-xs-2 "><?php echo get_avatar($comment,$size = '80'); ?></div>
        <div class="col-xs-11  col-xs-push-1">
            <h4><?php comment_author();?></h4>  
            <h5>
                <?php 
                    if ( ('d M  y') == get_option( 'date_format' ) ) :  
                        comment_date('F j, Y');
                    else :
                        comment_date();
                    endif;
                 _e('at','medispa');?>&nbsp;<?php comment_time('g:i a'); 
                 ?>
             </h5>
            <p><?php comment_text() ; ?></p>
            <?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'medispa' ); ?></em>
                <br/>
            <?php endif; ?>
        </div>
    </div>                              
    <?php
}
