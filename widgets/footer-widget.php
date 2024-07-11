<?php

class Dynamic_Footer_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'dynamic_footer_widget', // Base ID
            'Dynamic Footer Widget', // Name
            array('description' => __('A custom footer widget for displaying dynamic contact information.', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        $phone_icon = !empty($instance['phone_icon']) ? $instance['phone_icon'] : '';
        $phone_number = !empty($instance['phone_number']) ? $instance['phone_number'] : '';
        $email_icon = !empty($instance['email_icon']) ? $instance['email_icon'] : '';
        $email_address = !empty($instance['email_address']) ? $instance['email_address'] : '';
        $location_icon = !empty($instance['location_icon']) ? $instance['location_icon'] : '';
        $location_address = !empty($instance['location_address']) ? $instance['location_address'] : '';
        $location_link = !empty($instance['location_link']) ? $instance['location_link'] : '';

        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters('widget_title', 'Footer Widget') . $args['after_title'];
        ?>
        <div class="widget">
            <!-- <h3>Get in touch</h3> -->
            <div class="contact">
                <div><a href="tel:<?php echo esc_html($phone_number); ?>"><span class="<?php echo esc_url($phone_icon); ?>"></span> <?php echo esc_html($phone_number); ?></a></div>
                <div><a href="mailto:<?php echo esc_html($email_address); ?>"><span class="<?php echo esc_url($email_icon); ?>"></span> <?php echo esc_html($email_address); ?></a></div>
                <div><a href="<?php echo esc_url($location_link); ?>"><img src="<?php echo esc_url($location_icon); ?>" class="location" alt=""> <?php echo esc_html($location_address); ?></a></div>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance) {
        $phone_icon = !empty($instance['phone_icon']) ? $instance['phone_icon'] : '';
        $phone_number = !empty($instance['phone_number']) ? $instance['phone_number'] : '';
        $email_icon = !empty($instance['email_icon']) ? $instance['email_icon'] : '';
        $email_address = !empty($instance['email_address']) ? $instance['email_address'] : '';
        $location_icon = !empty($instance['location_icon']) ? $instance['location_icon'] : '';
        $location_address = !empty($instance['location_address']) ? $instance['location_address'] : '';
        $location_link = !empty($instance['location_link']) ? $instance['location_link'] : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('phone_icon'); ?>">Phone Icon URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone_icon'); ?>" name="<?php echo $this->get_field_name('phone_icon'); ?>" type="text" value="<?php echo esc_url($phone_icon); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone_number'); ?>">Phone Number:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('phone_number'); ?>" name="<?php echo $this->get_field_name('phone_number'); ?>" type="text" value="<?php echo esc_html($phone_number); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('email_icon'); ?>">Email Icon URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('email_icon'); ?>" name="<?php echo $this->get_field_name('email_icon'); ?>" type="text" value="<?php echo esc_url($email_icon); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('email_address'); ?>">Email Address:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('email_address'); ?>" name="<?php echo $this->get_field_name('email_address'); ?>" type="text" value="<?php echo esc_html($email_address); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('location_icon'); ?>">Location Icon URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('location_icon'); ?>" name="<?php echo $this->get_field_name('location_icon'); ?>" type="text" value="<?php echo esc_url($location_icon); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('location_address'); ?>">Location Address:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('location_address'); ?>" name="<?php echo $this->get_field_name('location_address'); ?>" type="text" value="<?php echo esc_html($location_address); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('location_link'); ?>">Location Link:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('location_link'); ?>" name="<?php echo $this->get_field_name('location_link'); ?>" type="text" value="<?php echo esc_url($location_link); ?>">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['phone_icon'] = (!empty($new_instance['phone_icon'])) ? strip_tags($new_instance['phone_icon']) : '';
        $instance['phone_number'] = (!empty($new_instance['phone_number'])) ? strip_tags($new_instance['phone_number']) : '';
        $instance['email_icon'] = (!empty($new_instance['email_icon'])) ? strip_tags($new_instance['email_icon']) : '';
        $instance['email_address'] = (!empty($new_instance['email_address'])) ? strip_tags($new_instance['email_address']) : '';
        $instance['location_icon'] = (!empty($new_instance['location_icon'])) ? strip_tags($new_instance['location_icon']) : '';
        $instance['location_address'] = (!empty($new_instance['location_address'])) ? strip_tags($new_instance['location_address']) : '';
        $instance['location_link'] = (!empty($new_instance['location_link'])) ? strip_tags($new_instance['location_link']) : '';

        return $instance;
    }
}

function register_dynamic_footer_widget() {
    register_widget('Dynamic_Footer_Widget');
}
add_action('widgets_init', 'register_dynamic_footer_widget');
?>
