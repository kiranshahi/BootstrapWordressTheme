<?php  
    get_header();
?>
<header class="intro-header" style="background-image: url('http://www.kirans.com.np/wp-content/themes/kirans/nepal.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Howdy!</h1>
                    <hr class="small">
                    <span class="subheading"><?php bloginfo('description'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
<div class="row">
<div class="col-lg-8">

<?php
    if (have_posts()) :
 ?>
    	<h3><?php 

	if ( is_category() ) {
		single_cat_title(); echo ' Archives:';
	} elseif ( is_tag() ) {
		single_tag_title(); echo ' Archives:';
	} elseif ( is_author() ){
		the_post();
		echo 'Author Archives: ' . get_the_author();
		rewind_posts();	
	} elseif ( is_day() ) {
		echo 'Daily Archives: ' . get_the_date();
	} elseif ( is_month() ) {
		echo 'Monthly Archives: ' . get_the_date('F Y');
	} elseif ( is_year() ) {
		echo 'Yearly Archives: ' . get_the_date('Y');
	} else {
		echo "Archives:";
	}

	 ?></h3>
	 <?php

        while (have_posts()) : the_post();
            get_template_part('content', get_post_format());
    ?>
    <hr>

    <?php  endwhile;
        else :
            echo '<h1>Opps! No content found.</h1>';
        endif;

        echo    "</div>";

        get_sidebar();
        ?>

        <!-- /.row -->
        <hr>
       </div>
       </div>
       </div>
<?php
    get_footer();

?>