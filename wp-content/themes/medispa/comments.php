<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'medispa' ); ?></p>
<?php return;
endif; ?>
<?php if ( have_comments() ) : ?>
<div id="comments" class="row medspa_comment">	
	<h2><?php echo comments_number(__('No Comments','medispa'), __('1 Comment','medispa'), '% Comments'); ?></h2>
	<?php wp_list_comments( array( 'callback' => 'medispa_comment' ) ); ?>		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="row pagination medspa_blog_pagination">
		<h1 class="assistive-text"><?php _e( 'Comment navigation', 'medispa' ); ?></h1>
		<ul class="pager">
			<li class="nav-previous previous"><?php previous_comments_link( __( 'Previous Comments', 'medispa' ) ); ?>
			</li>
			<li class="nav-next next"><?php next_comments_link( __( 'Next Comments', 'medispa' ) ); ?>
			</li>
		</ul>
	</nav>
<?php endif;  ?>
</div>		
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div class="row medspa_comment_form">
		<?php 
			$fields=array(
				'author' => '<div class="form-group col-md-4"><label  for="name">'.__( 'NAME', 'medispa' ).':</label><input type="text" class="form-control" id="name" name="author" placeholder="'.esc_attr__( 'Full Name', 'medispa' ).'"></div>',
				'email' => '<div class="form-group col-md-4"><label for="email">'.__( 'EMAIL', 'medispa' ).':</label><input type="email" class="form-control" id="email" name="email" placeholder="'.esc_attr__( 'Your Email Address', 'medispa' ).'"></div>',
				'website' => '<div class="form-group col-md-4"><label  for="web">'.__( 'WEBSITE', 'medispa' ).':</label><input type="text" class="form-control" id="web" placeholder="'.esc_attr__( 'Website', 'medispa' ).'"></div>',
			);
			function medspa_fields($fields) {
				return $fields;
			}
			add_filter('medspa_comment_form_default_fields','medspa_fields');
			$defaults = array(
				'fields'=> apply_filters( 'medspa_comment_form_default_fields', $fields ),
				'submit_field' => '<div class="form-group col-md-4">%1$s %2$s</div>',
				'comment_field'=> '<div class="form-group col-md-12"><label  for="message">'.__( 'COMMENT', 'medispa' ).':</label><textarea class="form-control" rows="5" id="comment" name="comment" placeholder="'.esc_attr__( 'Message', 'medispa' ).'"></textarea></div>',
				'logged_in_as' => '<p class="logged-in-as">'. __( "Logged in as ",'medispa' ).'<a href="'.esc_url(admin_url( 'profile.php' )).'">'.$user_identity.'</a>'.'<a href="'. esc_url( wp_logout_url( get_permalink() ) ).'" title="'.esc_attr__('Log out of this account','medispa').'">'.__(" Log out?",'medispa').'</a>' . '</p>',
				'title_reply_to' => __( 'Post Your Reply Here To %s','medispa'),
				'class_submit' => 'btn',
				'label_submit'=>__( 'SUBMIT COMMENT','medispa'),
				'comment_notes_before'=> '',
				'comment_notes_after'=>'',
				'title_reply'=> '<h2>'.__('Post Your Comment Here','medispa').'</h2>',
				'role_form'=> 'form',
			);
			comment_form($defaults); 
		?>		
	</div>
<?php endif; // If registration required and not logged in ?>