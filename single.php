

<?php get_header();?>

<?php the_post(); ?>



<!--HOME SECTION-->
<section class="home-section">



    <div class="container">


        <h1 class="section-title">
            <?php wp_title(''); ?>
        </h1>

        <h3 class="section-subtitle">
            Super Sonic Premium Private Proxies
        </h3>


    </div>




</section>


<section class="single-blog-article-section">

    <div class="container">


        <div class="single-blog-article" >
            <h3 class="blog-article-header"></h3>

            <?php the_post_thumbnail( ); ?>


            <div class="blog-article-content">
                <?php the_content(); ?>

            </div>

        </div>
    </div>



</section>




<?php get_footer();?>


