<?php
/**
 * TemplateMela
 */
?><?php // Reference:  http://codex.wordpress.org/Widgets_API
class CMSBlockWidget extends WP_Widget
{
    function __construct()
    {
        $widget_settings = array('description' => 'CMS Block Widget', 'classname' => 'widgets-cms');
        parent::__construct(false, $name = 'TM - CMS Block Widget', $widget_settings);
    }
    function widget($args, $instance)
    {
        extract($args);
        $service_no = empty($instance['service_no']) ? '' : $instance['service_no'];
        $service_other_text = empty($instance['service_other_text']) ? '' : $instance['service_other_text'];
        $service_title = empty($instance['service_title']) ? '' : $instance['service_title'];
        echo wp_kses_post($before_widget);
        ?>
        <div class="service-list service-<?php echo esc_attr($service_no); ?>">
            <div class="service-content">
                <span class="icon-image"> </span>
                <div class="content">
                    <div class="service_other_text"><?php echo esc_attr($service_other_text); ?> </div>
                    <div class="service-title"><?php echo esc_attr($service_title); ?> </div>
                </div>
            </div>
        </div>
        <?php
        echo wp_kses_post($after_widget);
    }
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['service_no'] = strip_tags($new_instance['service_no']);
        $instance['service_other_text'] = strip_tags($new_instance['service_other_text']);
        $instance['service_title'] = strip_tags($new_instance['service_title']);
        return $instance;
    }
    function form($instance)
    {
        $instance = wp_parse_args((array)$instance, array(
            'service_no' => '1',
            'service_other_text' => 'FREE SHIPPING WORLDWIDE',
            'service_title' => 'On order over $150 - 7 days a week'
        ));
        $service_no = esc_attr($instance['service_no']);
        $service_other_text = esc_attr($instance['service_other_text']);
        $service_title = esc_attr($instance['service_title']);
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('service_no')); ?>">Service Style No:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_no')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_no')); ?>" type="text"
                   value="<?php echo esc_attr($service_no); ?>"></input>
            <label>(e.g. 1,2,3,....)</label><br/>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('service_other_text')); ?>">Main Title:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_other_text')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_other_text')); ?>" type="text"
                   value="<?php echo esc_attr($service_other_text); ?>"></input>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('service_title')); ?>">Sub Title:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('service_title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('service_title')); ?>" type="text"
                   value="<?php echo esc_attr($service_title); ?>"></input>
        </p>
        <?php
    }
}
function cms_block_register_widgets()
{
    global $wp_widget_factory;
    $wp_widget_factory->register('CMSBlockWidget');
}
add_action('widgets_init', 'cms_block_register_widgets');
// end CMSBlockWidget
?>