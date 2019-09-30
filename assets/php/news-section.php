<div class="info-section news-section ">
    <div class="text-center grid-container">
        <div class="grid-x grid-margin-x grid-margin-y text-center txt-white ">
            <img src="
        <?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/typewriter.svg" loading="lazy" class="cell large-2 large-offset-5 medium-4 medium-offset-4 small-6 small-offset-3" />
            <br />

            <h2 class="section-title txt-white cell">
                News
            </h2>
        </div>
        <div class="">
            <?php
            $how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

            /* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
            if ($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 4;

            $my_query = new WP_Query('post_type=post&nopaging=1');
            if ($my_query->have_posts()) {
                echo '<div class="archives-latest-section grid-x grid-margin-x">';
                $counter = 1;
                while ($my_query->have_posts() && $counter <= $how_many_last_posts) {
                    $my_query->the_post();
                    ?>
                    <div class="cell card large-6 medium-6 small-12">
                        <div class="cell large-12 medium-12 small-12 card-gray bdr-stripe-black">
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?>
                                </a>
                            </h3>
                            <br />
                            <strong><?php the_time('F j, Y') ?></strong>
                        </div>
                    </div>
            <?php
                    $counter++;
                }

                echo '</div>';
                wp_reset_postdata();
            }

            ?>
        </div>


        <?php
        //NOTE: Here's how to show posts according to category isntead of by just general post type. This might be useful in the future depending on how blog posts end up getting structured.
        // Get the ID of a given category
        // $category_id = get_cat_ID('dispatches');

        // Get the URL of this category
        //$category_link = get_category_link($category_id);

        //Print a link to all posts this is the way to show it by category tho for future reference
        // href="<?php echo esc_url($category_link);
        ?>

        <div class="cell text-center">
            <a class="button" href="<?php echo site_url(); ?>/?post_type=post">
                See All
            </a>
        </div>

    </div>
</div>