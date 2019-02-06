






<?php get_header();?>




<!--HOME SECTION-->
<section class="home-section">



    <div class="container">


        <h1 class="section-title">
            Blog
        </h1>

        <h3 class="section-subtitle">
            SuperSonic Articles with super sonic information,<br>
            best proxy practices and internet security advice. Private Proxies
        </h3>


    </div>




</section>


<section class="blog-section">

    <div class="container">

        <div class="wrap">
            <?php
            //Protect against arbitrary paged values
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

            ?>

            <?php $query = new WP_Query(
                array(	'posts_per_page' => 999,
                    'paged' => $paged,)
            ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


                <div class="blog-post">
                    <a class="link-to-blog-single-post" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                        <!--                    --><?php //the_post_thumbnail(array(300, 100)); ?>
                        <?php the_post_thumbnail(); ?>

                        <!-- Display the Title as a link to the Post's permalink. -->
                        <h5 class="post-blog-title" ><?php the_title(); ?></h5>
                    </a>

                    <p class="blog-post-data">
                        <?php the_time('F j, Y'); ?>
                    </p>


                    <p class="blog-excerpt">

                        <?php the_excerpt();?>


                    </p>
                </div>


            <?php endwhile; ?>
                <!-- End of the main loop -->

                <!-- Add the pagination functions here. -->

                <!--            <div class="nav-previous alignleft">--><?php //previous_posts_link( 'Older posts' ); ?><!--</div>-->
                <!--            <div class="nav-next alignright">--><?php //next_posts_link( 'Newer posts' ); ?><!--</div>-->




            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>




    </div>
</section>









<?php get_footer();?>


<?php the_post() ?>
<?php the_content(); ?>


