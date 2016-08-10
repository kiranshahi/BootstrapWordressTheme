<?php  
    get_header();
?>
<header class="intro-header" style="background-image: url('wp-content/themes/kirans/nepal.jpg')">
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
            while (have_posts()) : the_post();
                get_template_part('content', get_post_format());
           
    ?>
    <hr>
    <?php  endwhile;
        else :
            echo '<h1>Opps! No content found.</h1>';
        endif;
        echo    "</div>";      
        // Blog Categories Well        
         get_sidebar(); ?>

   
        <!-- /.row -->
        <hr>
       </div>
       </div>
       </div>
<?php
    get_footer();

?>