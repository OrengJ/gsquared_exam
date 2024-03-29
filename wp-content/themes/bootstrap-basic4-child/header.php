<?php
/**
 * The theme header.
 *
 * @package bootstrap-basic4
 */
?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!--WordPress head-->
        <?php wp_head(); ?>
        <!--end WordPress head-->
    </head>
    <body <?php body_class(); ?>>
        <?php
        if (function_exists('wp_body_open')) {
            wp_body_open();
        }
        ?>
        <div class="container-fluid page-container">
            <header class="page-header page-header-sitebrand-topbar p-0 m-0">
                <?php if (has_nav_menu('primary') || is_active_sidebar('navbar-right')) { ?>
                <div class="row main-navigation">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bootstrap-basic4-topnavbar" aria-controls="bootstrap-basic4-topnavbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'bootstrap-basic4'); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                                <?php
                                wp_nav_menu(
                                    [
                                        'depth' => '2',
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'menu_id' => 'bb4-primary-menu',
                                        'menu_class' => 'navbar-nav mr-auto',
                                        'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                    ]
                                );
                                ?>
                                <div class="float-lg-right">
                                    <?php dynamic_sidebar('navbar-right'); ?>
                                </div>
                                <div class="clearfix"></div>
                            </div><!--.navbar-collapse-->
                            <div class="clearfix"></div>
                        </nav>
                    </div>
                </div><!--.main-navigation-->
                <?php } else { ?>
                <!-- the navigation is skipped due to there is no menu or active widgets on navbar-right. -->
                <?php }// endif; ?>
            </header><!--.page-header-->

            <div id="content" class="site-content row row-with-vspace">