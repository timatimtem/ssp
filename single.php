
<style>

    .nav-blog-link{
        a{
            color: #999;
            font-weight: 700;
        }
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
            <h3 class="blog-article-header"></h3>



            <div class="blog-article-content">
                <?php the_content(); ?>

            </div>

        </div>
    </div>



</section>




<?php get_footer();?>


