<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Index</title>
    <script type="text/javascript" language="javascript" src="/js/test.js"></script>
    <link rel="stylesheet" type="text/css"        href="<?php bloginfo('stylesheet_url')?>" />
        <?php wp_head(); ?>

        </head>

        <body class="<?php body_class(); ?>">

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div class="head_wrapper">
            <div class="header">
                <!--<h1><a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png">GeekHub</a></h1>-->



                <?php if ( get_theme_mod( 'geekhub_logo' ) ) : ?>
            <div class='site-logo'>
                <h1><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'geekhub_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></h1>
            </div>
        <?php else : ?>
            <hgroup>
                <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
            </hgroup>
        <?php endif; ?>

        <ul>
            <?php wp_nav_menu(array(
                'theme_location'  => 'main_menu',
                'menu_class'      => 'header-navigation',
                'container'       => false
            )); ?>
        </ul>
        <ul class="social_networks">
            <?php if (get_theme_mod( 'geekhub_social_fb' ) ) : ?>
            <li class="fb"><a href="<?php echo esc_url( get_theme_mod( 'geekhub_social_fb' )  ); ?>">Facebook</a></li>
                <?php else : ?>
            <li class="no-display"></li>
                <?php endif; ?>
            <?php if (get_theme_mod( 'geekhub_social_vk' ) ) : ?>
                <li class="vk"><a href="<?php echo esc_url( get_theme_mod( 'geekhub_social_vk' )  ); ?>">Vkontakte</a></li>
            <?php else : ?>
                <li class="no-display"></li>
            <?php endif; ?>
            <?php if (get_theme_mod( 'geekhub_social_tw' ) ) : ?>
                <li class="tw"><a href="<?php echo esc_url( get_theme_mod( 'geekhub_social_tw' )  ); ?>">twitter</a></li>
            <?php else : ?>
                <li class="no-display"></li>
            <?php endif; ?>
            <?php if (get_theme_mod( 'geekhub_social_youtube' ) ) : ?>
                <li class="yt"><a href="<?php echo esc_url( get_theme_mod( 'geekhub_social_youtube' )  ); ?>">YouTube</a></li>
            <?php else : ?>
                <li class="no-display"></li>
            <?php endif; ?>
            <?php if (get_theme_mod( 'geekhub_social_vimeo' ) ) : ?>
                <li class="vm"><a href="<?php echo esc_url( get_theme_mod( 'geekhub_social_vimeo' )  ); ?>">Vimeo</a></li>
            <?php else : ?>
                <li class="no-display"></li>
            <?php endif; ?>

        </ul>

