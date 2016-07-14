<?php 
    get_header();
?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../wp-content/themes/kirans/resources/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php
        if (have_posts()) :
        
        while (have_posts()) : the_post(); 
    ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php 

                    the_content();

                 ?>
            </div>
        </div>
    </div>

    <hr>

    <?php 

        endwhile;

    else :
        echo '<p>No content found</p>';
    endif;

        get_footer();

?>