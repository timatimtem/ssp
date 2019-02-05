<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SSP">
    <meta name="author" content="tt-dev">


    <!--browser icons-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">

    <!--    title    -->
    <title><?php wp_title( '' ); ?></title>


    <?php wp_head();?>
</head>

<body>


<!--Header navigation-->
<header>




    <!--Fixed centered navbar container    -->
    <div class="navbar">


        <!--Logo-->
        <a href="/" class="logo"></a>



        <?php wp_nav_menu(
            array(
                'menu'            => 'ssp-menu',
                'container'       => 'nav',
                'container_class' => 'nav-collapse',
                'container_id'    => '',
                'menu_class'      => 'nav-menu',
                'menu_id'         => 'nav-menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            )
        ); ?>



    </div>



</header>