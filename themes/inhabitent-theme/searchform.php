<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
	<fieldset>
		<button type="submit" class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html('Search'); ?></span>
		</button>
		
		<label>
			<input type="text" class="search-field" placeholder="type and hit enter..." value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>