<?php
function medispa_get_post_date(){

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	return $time_string;

}
function medispa_get_categories(){
		$categories_list = get_the_category_list( esc_html__( ', ', 'medispa' ) );
		return $categories_list;
}

function medispa_get_tags(){
	$tags_list = get_the_tag_list( '', esc_html__( ', ', 'medispa' ) );
	return $tags_list;
}

function medispa_get_comment_count(){
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo comments_popup_link( esc_html__( '0 comment', 'medispa' ), esc_html__( '1 Comment', 'medispa' ), esc_html__( '% Comments', 'medispa' ) );
	}
}
if ( ! function_exists( 'medispa_posted_on' ) ) :
function medispa_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'medispa' ),
		'<i class="fa fa-clock-o icon"></i> <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
	
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link"> <i class="fa fa-comment-o icon"> </i> ';
		comments_popup_link( esc_html__( 'Leave a comment', 'medispa' ), esc_html__( '1 Comment', 'medispa' ), esc_html__( '% Comments', 'medispa' ) );
		echo '</span>';
	}

	$byline = sprintf(
		esc_html_x( ' by %s' , 'post author', 'medispa' ),
		'<i class="fa fa-user icon"></i> <span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a> </span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span> <span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'medispa' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link"> <i class="fa fa-pencil icon"></i> ',
		'</span>'
	);

}
endif;

if ( ! function_exists( 'medispa_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function medispa_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'medispa' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">' . esc_html__( 'Tags %1$s', 'medispa' ) . '</div><div class="clearfix"></div>', $tags_list ); // WPCS: XSS OK.
		}
		
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'medispa' ) );
		if ( $categories_list && medispa_categorized_blog() ) {
			printf( '<div class="cat-links">' . esc_html__( 'Categories %1$s', 'medispa' ) . '</div><div class="clearfix"></div>', $categories_list ); // WPCS: XSS OK.
		}
	}
	
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function medispa_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'medispa_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'medispa_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so medispa_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so medispa_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in medispa_categorized_blog.
 */
function medispa_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'medispa_categories' );
}
add_action( 'edit_category', 'medispa_category_transient_flusher' );
add_action( 'save_post',     'medispa_category_transient_flusher' );
