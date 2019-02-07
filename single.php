
<style>

    .nav-blog-link a{
        color: #999 !important;
        font-weight: 700;
    }
</style>


<?php get_header();?>

<?php the_post(); ?>



<!--HOME SECTION-->
<section class="single-blog-home-section">

    <div class="bg-img-wrap">
        <?php the_post_thumbnail( ); ?>

    </div>


    <div class="container">


        <h1 class="section-title">
            <?php wp_title(''); ?>
        </h1>

        <div class="post-date">
            <?php the_time('F j, Y'); ?>
        </div>

        <h3 class="section-subtitle">
            <?php the_excerpt();?>
        </h3>


    </div>




</section>


<section class="single-blog-article-section">

    <div class="container">


        <div class="single-blog-article" >

            <div class="blog-article-content">
                <?php the_content(); ?>

            </div>
            <div class="blog-article-sidebar">

                <div class="proxy-banner">

                    <div class="server-img">

                    </div>

                    <h3 class="banner-title">BUY PRIVATE PROXIES</h3>

                    <p class="banner-description">
                        All proxies are Elite Anonmity, 1 Gbps, and unlimited bandwidth. Grab your 2 day free trial today!
                    </p>

                    <a href="/#pricing" class="banner-link">SEE PRICING</a>
                </div>

                <div class="recent-posts-wrap">

                    <h2>Recent Posts</h2>
                    <ul>
                        <?php
                        $args = array( 'numberposts' => '2' );
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){


                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .the_post_thumbnail().   $recent["post_title"].'</a>    <p class="blog-post-date">
                        '.the_time("F j, Y").' </p></li> ';
                        }
                        wp_reset_query();
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>



</section>




<?php get_footer();?>


