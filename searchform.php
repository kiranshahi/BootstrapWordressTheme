<div class="well">
	<h4>Search on My Blog</h4>

	<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
	    <fieldset>
			<div class="input-group">
				<input type="text" name="s" id="search" placeholder="<?php _e("Search for...","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default"><?php _e("Go!","wpbootstrap"); ?></button>
				</span>
			</div>
	    </fieldset>
	</form>
</div>