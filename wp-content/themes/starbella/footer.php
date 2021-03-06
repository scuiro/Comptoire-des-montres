<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<?php tmpmela_content_after(); ?>
</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->
</div>
</div>
<?php tmpmela_footer_before(); ?>
<footer id="colophon" class="site-footer">
    <div class="footer-top">
        <div class="middle-container">
            <?php if (is_active_sidebar('footer-logo-area')) : ?>
                <div class="footer-logo">
                    <?php dynamic_sidebar('footer-logo-area'); ?>
                </div>
            <?php endif; ?>
            <?php tmpmela_footer_inside(); ?>
            <?php get_sidebar('footer'); ?>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="middle-container">
            <?php if (has_nav_menu('footer-menu')) { ?>
                <div class="footer-menu-links">
                    <?php
                    $tmpmela_footer_menu = array(
                        'menu' => esc_html__('TM Footer Navigation', 'starbella'),
                        'depth' => 1,
                        'echo' => false,
                        'menu_class' => 'footer-menu',
                        'container' => '',
                        'container_class' => '',
                        'theme_location' => 'footer-menu'
                    );
                    echo wp_nav_menu($tmpmela_footer_menu);
                    ?>
                </div><!-- #footer-menu-links -->
            <?php } ?>
            <div class="site-info"><?php echo esc_html__('Copyright', 'starbella'); ?>
                &copy; <?php echo esc_attr(date('Y')); ?> <?php echo esc_attr(stripslashes(get_option('tmpmela_footer_slog'))); ?>
                <?php do_action('tmpmela_credits'); ?>
            </div>
        </div>
    </div>
</footer>
<!-- #colophon -->
<?php tmpmela_footer_after(); ?>
<?php tmpmela_go_top(); ?>
<?php tmpmela_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body>
</html>