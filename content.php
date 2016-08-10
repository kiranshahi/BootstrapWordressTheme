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