<form role="search" method="get" class="search-form medispa-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
		<label  class="search-label">
			<span class="screen-reader-text"><?php _e('Search for:','medispa'); ?></span>
			<input type="search" class="search-field" placeholder="<?php esc_attr_e('Search ','medispa'); ?>" value="" name="s" title="<?php esc_attr_e('Search for:','medispa'); ?>">
		</label>
	</div>
</form>