<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>" name="s" title="Search">
	<input type="search" class="search-field form-control" placeholder="🔍Search Products…" value="<?php echo get_search_query(); ?>" name="s">

	<input type="hidden" value="product" name="post_type" id="post_type" />
</form>
