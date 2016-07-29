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
    ?>
    
    <div class="post-preview">
        <a href="<?php the_permalink(); ?>">
            <h2 class="post-title">
                <?php the_title(); ?>
            </h2>
            <p class="post-subtitle">
                <?php echo get_the_excerpt(); ?>
            </p>
        </a>

        <p class="post-meta">
            Published by 
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
            </a> 
            on <?php the_time('F j, Y'); ?> <i class="fa fa-tags" aria-hidden="true"></i> 
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
    </div>
    
    <hr>

    <?php  endwhile;
        else :
            echo '<h1>Opps ! No result found.</h1>';
        endif;

        echo    "</div>";


        ?>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
        
                      <?php get_search_form(); ?>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->
        <hr>
       </div>
       </div>
       </div>
<?php
    get_footer();

?>