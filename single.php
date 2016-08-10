<?php  

	get_header();

?>

<?php
	if (have_posts()) :
				
	while (have_posts()) : the_post(); 

	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

	<header class="intro-header" style="background-image: url(<?php echo $url; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>
							<?php the_title(); ?>	
						</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div class="container">

		<div class="row">

			<!-- Blog Post Content Column -->
			<div class="col-lg-8">

				<hr>
				<p>
					<i class="fa fa-male" aria-hidden="true"></i>
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
						<?php the_author(); ?>
					</a>
					|
					<span class="glyphicon glyphicon-time"></span>
					<?php the_time('F j, Y - g:i a'); ?> 
					| <i class="fa fa-tags" aria-hidden="true"></i> 
					<?php 
						$categories = get_the_category();
						$separator = ", ";
						$output = '';
						if ($categories) {
							foreach ($categories as $category)
								$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
							} 

						echo trim($output, $separator);

					?>
				</p>
				<hr>

				<?php the_content(); ?>

                
                <?php  endwhile;

                    else :
                        echo '<p>No content found</p>';
                    endif;

                ?>

			</div>
		
	
				


	<!-- Blog Sidebar Widgets Column -->
        
        <?php get_sidebar(); ?>

        </div>
        <!-- /.row -->
        <hr>
       </div>
<?php
	get_footer();

?>
