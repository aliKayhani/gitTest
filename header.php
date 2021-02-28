<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="20script.com">
    <link rel="shortcut icon" href="<?php get_option('logo'); ?> ">
    <title>تبدیل قالب به قالب وردپرسی</title>
    <!-- Bootstrap core CSS -->


    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/style/js/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
<div class="body-wrapper">
    <div class="navbar basic default">
        <div class="navbar-header">
            <div class="container">
                <div class="basic-wrapper"><a class="btn responsive-menu pull-left" data-toggle="collapse"
                                              data-target=".navbar-collapse"><i class='icon-menu-1'></i></a> <a
                        class="navbar-brand" href="#"><img
                            src="<?php bloginfo('template_url'); ?>/style/images/logo.png"
                            data-at2x="<?php bloginfo('template_url'); ?>/style/images/logo@2x.png" alt=""/></a></div>

                        <?php

                        $defaults = array(
                            'theme_location'  => '',
                            'menu'            => 'top_menu',
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse pull-left',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => ''
                        );

                        wp_nav_menu( $defaults );

                        ?>

            </div>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.navbar -->
