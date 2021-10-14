<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Templatemela
 */
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
        <?php tmpmela_header(); ?>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>
    <!--CSS Spinner-->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
<div id="page" class="hfeed site">
    <div class="outer-container">
    <?php if (get_header_image()) : ?>
        <div id="site-header">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>"
                alt="<?php echo esc_attr_e('Siteheader', 'starbella'); ?>"> </a></div>
    <?php endif; ?>
    <!-- Header -->
<?php tmpmela_header_before(); ?>
    <header id="masthead" class="site-header site-header-fix <?php echo "header" . esc_attr(get_option('tmpmela_header_layout')); ?> <?php echo esc_attr(tmpmela_sidebar_position()); ?>">
        <div class="site-header-main">
            <div class="header-main header-fix">
                <div class="theme-container">
                    <div class="header-top">
                        <!-- Start header_left -->
                        <?php if (is_active_sidebar('offer-widget')): ?>
                            <div class="header-left">
                                <?php tmpmela_get_widget('offer-widget'); ?>
                            </div>
                        <?php endif; ?>
                        <?php tmpmela_header_inside(); ?>
                        <!-- Start header_center -->
                        <div class="header-center">
                            <!-- Header LOGO-->
                            <div class="header-logo">
                                <?php if (get_option('tmpmela_logo_image') != '') : ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                        <?php tmpmela_get_logo(); ?>
                                    </a>
                                <?php else: ?>
                                    <h3 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <span class="logo-text"><?php echo get_option('tmpmela_logo_image_alt'); ?></span>
                                        </a>
                                    </h3>
                                <?php endif; ?>
                                <?php if (get_option('tmpmela_showsite_description') == 'yes') : ?>
                                    <h2 class="site-description">
                                        <?php bloginfo('description'); ?>
                                    </h2>
                                <?php endif; // End tmpmela_showsite_description ?>
                            </div>
                            <!-- Header Mob LOGO-->
                            <div class="header-mob-logo">
                                <?php if (get_option('tmpmela_mob_logo_image') != '') : ?>
                                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                        <?php tmpmela_get_mob_logo(); ?>
                                    </a>
                                <?php else: ?>
                                    <h3 class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                            <span class="logo-text"><?php echo get_option('tmpmela_logo_image_alt'); ?></span>
                                        </a>
                                    </h3>
                                <?php endif; ?>
                                <?php if (get_option('tmpmela_showsite_description') == 'yes') : ?>
                                    <h2 class="site-description">
                                        <?php bloginfo('description'); ?>
                                    </h2>
                                <?php endif; // End tmpmela_showsite_description ?>
                            </div>
                        </div>
                        <!-- Start header_right -->
                        <div class="header-right">
                            <!-- For Responsive Mobile MEnu -->
                            <?php if (has_nav_menu('primary')): ?>
                                <nav class="mobile-navigation">
                                    <h3 class="menu-toggle"><?php esc_html_e('Menu', 'starbella'); ?></h3>
                                    <div class="mobile-menu">
                                        <span class="close-menu"></span>
                                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'mobile-menu-inner')); ?>
                                    </div>
                                </nav>
                            <?php endif; ?>
                            <!-- End For Responsive Mobile MEnu -->
                            <!--Search-->
                            <?php if (is_active_sidebar('header-search')) : ?>
                                <div class="header-search">
                                    <div class="header-toggle"></div>
                                    <div class="search-overlay"><?php tmpmela_get_widget('header-search'); ?> </div>
                                </div>
                            <?php endif; ?>
                            <!--End Search-->
                            <!-- Topbar link -->

                            <?php if (!has_nav_menu('header-menu')): ?>
                                <div class="topbar-link login-out">
                                    <?php $logout_url = '';
                                    if (is_user_logged_in()) {
                                        $myaccount_page_id = get_option('woocommerce_myaccount_page_id');
                                        if ($myaccount_page_id) {
                                            $logout_url = wp_logout_url(get_permalink($myaccount_page_id));
                                            if (get_option('woocommerce_force_ssl_checkout') == 'yes')
                                                if (is_ssl()) {
                                                    $logout_url = str_replace('http:', 'https:', $logout_url);
                                                }
                                        } ?>
                                        <?php if ($myaccount_page_id): ?>
                                            <a href="<?php echo esc_url($logout_url); ?>">
                                                <?php echo esc_html_e('Logout', 'starbella'); ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php } else {
                                        $myaccount_page_id = get_option('woocommerce_myaccount_page_id'); ?>
                                        <?php if ($myaccount_page_id): ?>
                                            <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">
                                                <?php echo esc_html_e('Login', 'starbella'); ?>
                                            </a>
                                        <?php endif; ?>
                                    <?php } ?>
                                </div>
                            <?php endif; ?>

                            <?php if (has_nav_menu('header-menu')): ?>
                            <div class="topbar-link">
                                <span class="topbar-link-toggle"></span>
                                <div class="topbar-link-wrapper">
                                    <div class="header-menu-links">

                                            <?php
                                            // Woo commerce Header Cart
                                            $tmpmela_header_menu = array(
                                                'menu' => esc_html__('TM Header Account Links', 'starbella'),
                                                'depth' => 1,
                                                'echo' => false,
                                                'menu_class' => 'header-menu',
                                                'container' => '',
                                                'container_class' => '',
                                                'theme_location' => 'header-menu'
                                            );
                                            echo wp_nav_menu($tmpmela_header_menu);
                                            ?>
                                        <?php
                                        $logout_url = '';
                                        if (is_user_logged_in()) {
                                            $myaccount_page_id = get_option('woocommerce_myaccount_page_id');
                                            if ($myaccount_page_id) {
                                                $logout_url = wp_logout_url(get_permalink($myaccount_page_id));
                                                if (get_option('woocommerce_force_ssl_checkout') == 'yes')
                                                    if (is_ssl()) {
                                                        $logout_url = str_replace('http:', 'https:', $logout_url);
                                                    }
                                            } ?>
                                            <?php if ($myaccount_page_id): ?>
                                                <a href="<?php echo esc_url($logout_url); ?>"><?php echo esc_html_e('Logout', 'starbella'); ?></a>
                                            <?php endif; ?>
                                        <?php } else { ?>
                                           <?php $myaccount_page_id = get_option('woocommerce_myaccount_page_id'); ?>
                                            <?php if ($myaccount_page_id): ?>
                                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"><?php echo esc_html_e('User Login', 'starbella'); ?></a>
                                            <?php endif; ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                            <!--end toplink-->
                            <!--Cart -->
                            <?php if (is_active_sidebar('header-widget')): ?>
                                <div class="header-cart headercart-block">
                                    <?php
                                    // Woo commerce Header Cart
                                    if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))) && is_active_sidebar('header-widget')) : ?>
                                        <div class="cart togg">
                                            <?php global $woocommerce;
                                            ob_start(); ?>
                                            <div class="shopping_cart tog" title="<?php esc_attr_e('View your shopping cart', 'starbella'); ?>">
                                                <a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'starbella'); ?>">
                                                    <span class="cart-icon"></span>
                                                    <div class="cart-qty">
                                                        <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'starbella'), $woocommerce->cart->cart_contents_count); ?>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php global $woocommerce; ?>
                                            <?php tmpmela_get_widget('header-widget'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- End header_right -->
                    </div>
                </div>
            </div>
            <!-- End header-main -->
        </div>
        <!-- #site-navigation -->
        <?php if (has_nav_menu('primary')): ?>
            <nav id="site-navigation" class="navigation-bar main-navigation">
                <h3 class="menu-toggle"><?php esc_html_e('Menu', 'starbella'); ?></h3>
                <a class="screen-reader-text skip-link" href="#content"
                   title="<?php esc_attr_e('Skip to content', 'starbella'); ?>"><?php esc_html_e('Skip to content', 'starbella'); ?></a>
                <div class="mega-menu">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'mega')); ?>
                </div>
                <div class="mobile-menu">
                    <span class="close-menu"></span>
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'mobile-menu-inner')); ?>
                </div>
            </nav>
        <?php endif; ?>
    </header>
<?php tmpmela_header_after(); ?>
<?php tmpmela_main_before(); ?>
<?php
$tmpmela_page_layout = tmpmela_page_layout();
if (isset($tmpmela_page_layout) && !empty($tmpmela_page_layout)):
    $tmpmela_page_layout = $tmpmela_page_layout;
else:
    $tmpmela_page_layout = '';
endif;
?>
<?php
$shop = '0';
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) :
    if (is_shop())
        $tmpmela_page_layout = 'wide-page';
    $shop = '1';
endif;
?>
<?php
global $wp;
$current = esc_url(home_url( add_query_arg( array( $_GET ), $wp->request ) ));
$str = substr(strrchr($current, '?'), 1);
if ($str == 'left') {
    $div_class = 'left-sidebar';
} elseif ($str == 'right') {
    $div_class = 'right-sidebar';
} elseif ($str == 'full') {
    $div_class = 'full-width';
} else {
    $div_class = tmpmela_sidebar_position();
}
if (get_option('tmpmela_page_sidebar') == 'no'):
    $div_class = "full-width";
endif;
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    if (is_product()) {
        if (get_option('tmpmela_shop_sidebar') == 'no'):
            $div_class = "full-width";
        endif;
    }
}
if (is_home() && tmpmela_is_blog()) {
    $div_class = "left-sidebar";
}
?>
<div id="main" class="site-main <?php echo esc_attr($div_class); ?> <?php echo esc_attr(tmpmela_page_layout()); ?>">
    <div class="main_inner">
<?php if (!is_page_template('page-templates/home.php')) : ?>
    <div class="page-title header">
        <div class="page-title-inner">
            <h3 class="entry-title-main">
                <?php
                if ($shop == '1') {
                    if (is_shop()) :
                        echo '';
                    elseif (tmpmela_is_blog()):
                        esc_html_e('Blog', 'starbella');
                    elseif (is_search()) :
                        printf(esc_html__('Search Results for: "%s"', 'starbella'), get_search_query());
                    elseif (is_front_page() && is_home()):
                        esc_html_e('Blog', 'starbella');
                    elseif (is_singular('post')):
                        esc_html_e('Blog', 'starbella');
                    else :
                        the_title_attribute();
                    endif;
                } else {
                    if (tmpmela_is_blog()):
                        esc_html_e('Blog', 'starbella');
                    elseif (is_search()) :
                        printf(esc_html__('Search Results for: "%s"', 'starbella'), get_search_query());
                    elseif (is_singular('post')) :
                        esc_html_e('Blog', 'starbella');
                    else :
                        the_title_attribute();
                    endif;
                }
                ?>
            </h3>
            <?php tmpmela_breadcrumbs(); ?>
        </div>
    </div>
<?php endif; ?>
<?php
$tmpmela_page_layout = tmpmela_page_layout();
if (isset($tmpmela_page_layout) && !empty($tmpmela_page_layout)):
    $tmpmela_page_layout = $tmpmela_page_layout;
else:
    $tmpmela_page_layout = '';
endif;
if ($tmpmela_page_layout == 'wide-page') : ?>
    <div class="main-content-inner-full">
<?php else:
    if (is_archive() || is_tag() || is_404()) : ?>
        <div class="main-content">
    <?php else : ?>
        <div class="main-content-inner  <?php echo esc_attr(tmpmela_sidebar_position()); ?>">
    <?php endif; ?>
<?php endif; ?>
<?php tmpmela_content_before(); ?>