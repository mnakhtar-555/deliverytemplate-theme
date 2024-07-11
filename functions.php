<?php

// Theme Supports

function deliverytemplate_theme_basic(){
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails');

}
add_action( 'after_setup_theme', 'deliverytemplate_theme_basic' );


//Menu 
class Menus{
    public function __construct(){
        add_action( 'init', [ $this, 'deliverytemplate_menu_register' ] );
    }

    public function deliverytemplate_menu_register(){
        register_nav_menus( 
            array(
                'deliverytemplate_top_menu'		=> esc_html__( 'Main Menu', 'dt_mnakhtar' ),
                'deliverytemplate_footer_menu'		=> esc_html__( 'Footer Menu', 'dt_mnakhtar' )
            ) 
    );
    }

    public function get_menu_id( $location ){
        $locations = get_nav_menu_locations();
        $menu_id = $locations[ $location ];

        return !empty( $menu_id ) ? $menu_id : '';
    }
}
$menu_class = new Menus();


function deliverytemplate_style_and_script(){
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css' );
    wp_enqueue_style( 'brands', get_template_directory_uri() . '/css/brands.min.css' );
    wp_enqueue_style( 'solid', get_template_directory_uri() . '/css/solid.min.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), time(), true );
}
add_action( 'wp_enqueue_scripts', 'deliverytemplate_style_and_script');



function deliverytemplate_post_types(){

    /** Custom Post Type for "How It Work Section" */
    $labels = array(
			'name'              => __( 'How It Contents', 'dt_mnakhtar' ),
			'singular_name'     => __( 'How It Content', 'dt_mnakhtar' ),
            'name_admin_bar'    => __( 'How It Content', 'dt_mnakhtar'),
            'all_items'         => __( 'All Items', 'dt_mnakhtar' ),
            'add_new_item'      => __( 'Add New Item', 'dt_mnakhtar' ),
            'add_new'           => __( 'Add New', 'dt_mnakhtar' ),
            'new_item'          => __( 'New Item', 'dt_mnakhtar' ),
            'edit_item'         => __( 'Edit Item', 'dt_mnakhtar' ),
            'update_item'       => __( 'Update Item', 'dt_mnakhtar' ),
            'view_item'         => __( 'View Item', 'dt_mnakhtar' ),
            'view_items'        => __( 'View Items', 'dt_mnakhtar' ),
			);
        $args = array(
            'label'                 => __( 'How It Content', 'dt_mnakhtar' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'public'                => true,
            'menu_position'         => 25
        );
        register_post_type( 'how_it__contents', $args );

        /** Post Type For company Specialities  */
        $labels = array(
			'name'              => __( 'Specialities', 'dt_mnakhtar' ),
			'singular_name'     => __( 'Speciality', 'dt_mnakhtar' ),
            'name_admin_bar'    => __( 'Speciality', 'dt_mnakhtar'),
            'all_items'         => __( 'All Items', 'dt_mnakhtar' ),
            'add_new_item'      => __( 'Add New Item', 'dt_mnakhtar' ),
            'add_new'           => __( 'Add New', 'dt_mnakhtar' ),
            'new_item'          => __( 'New Item', 'dt_mnakhtar' ),
            'edit_item'         => __( 'Edit Item', 'dt_mnakhtar' ),
            'update_item'       => __( 'Update Item', 'dt_mnakhtar' ),
            'view_item'         => __( 'View Item', 'dt_mnakhtar' ),
            'view_items'        => __( 'View Items', 'dt_mnakhtar' ),
			);
        $args = array(
            'label'                 => __( 'Specialities', 'dt_mnakhtar' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'public'                => true,
            'menu_position'         => 26
        );
        register_post_type( 'specialities', $args );
        
        
        /** Post Type For Service Features  */
        $labels = array(
			'name'              => __( 'Features', 'dt_mnakhtar' ),
			'singular_name'     => __( 'Feature', 'dt_mnakhtar' ),
            'name_admin_bar'    => __( 'Feature', 'dt_mnakhtar'),
            'all_items'         => __( 'All Items', 'dt_mnakhtar' ),
            'add_new_item'      => __( 'Add New Item', 'dt_mnakhtar' ),
            'add_new'           => __( 'Add New', 'dt_mnakhtar' ),
            'new_item'          => __( 'New Item', 'dt_mnakhtar' ),
            'edit_item'         => __( 'Edit Item', 'dt_mnakhtar' ),
            'update_item'       => __( 'Update Item', 'dt_mnakhtar' ),
            'view_item'         => __( 'View Item', 'dt_mnakhtar' ),
            'view_items'        => __( 'View Items', 'dt_mnakhtar' ),
			);
        $args = array(
            'label'                 => __( 'Features', 'dt_mnakhtar' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'public'                => true,
            'menu_position'         => 27
        );
        register_post_type( 'features', $args );
        
        /** Post Type For Testimonials  */
        $labels = array(
			'name'              => __( 'Testimonials', 'dt_mnakhtar' ),
			'singular_name'     => __( 'Testimonial', 'dt_mnakhtar' ),
            'name_admin_bar'    => __( 'Testimonial', 'dt_mnakhtar'),
            'all_items'         => __( 'All Items', 'dt_mnakhtar' ),
            'add_new_item'      => __( 'Add New Item', 'dt_mnakhtar' ),
            'add_new'           => __( 'Add New', 'dt_mnakhtar' ),
            'new_item'          => __( 'New Item', 'dt_mnakhtar' ),
            'edit_item'         => __( 'Edit Item', 'dt_mnakhtar' ),
            'update_item'       => __( 'Update Item', 'dt_mnakhtar' ),
            'view_item'         => __( 'View Item', 'dt_mnakhtar' ),
            'view_items'        => __( 'View Items', 'dt_mnakhtar' ),
			);
        $args = array(
            'label'                 => __( 'Testimonials', 'dt_mnakhtar' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'public'                => true,
            'menu_position'         => 28
        );
        register_post_type( 'testimonials', $args );
        
        /** Post Type For Image Gallery  */
        $labels = array(
			'name'              => __( 'Image Gallery', 'dt_mnakhtar' ),
			'singular_name'     => __( 'Image Gallery', 'dt_mnakhtar' ),
            'name_admin_bar'    => __( 'Image Gallery', 'dt_mnakhtar'),
            'all_items'         => __( 'All Items', 'dt_mnakhtar' ),
            'add_new_item'      => __( 'Add New Item', 'dt_mnakhtar' ),
            'add_new'           => __( 'Add New', 'dt_mnakhtar' ),
            'new_item'          => __( 'New Item', 'dt_mnakhtar' ),
            'edit_item'         => __( 'Edit Item', 'dt_mnakhtar' ),
            'update_item'       => __( 'Update Item', 'dt_mnakhtar' ),
            'view_item'         => __( 'View Item', 'dt_mnakhtar' ),
            'view_items'        => __( 'View Items', 'dt_mnakhtar' ),
			);
        $args = array(
            'label'                 => __( 'Image Gallery', 'dt_mnakhtar' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail' ),
            'public'                => true,
            'menu_position'         => 28
        );
        register_post_type( 'image_gallery', $args );
}
add_action( 'init', 'deliverytemplate_post_types' );


// Adding Widgets
function deliverytemplate_widgets() 
{
    register_sidebar(
		array(
			'name'				=> __( 'Footer Widgets', 'dt_mnakhtar' ),
			'description'		=> __( 'Put your footer widget here', 'dt_mnakhtar' ),
			'id'				=> 'footer-left-widget',
			'before_widget'		=> '<div class="widget">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h5 class="widget-title">',
			'after_title'		=> '</h5>'
		)
	);  
}
add_action( 'widgets_init', 'deliverytemplate_widgets' );


/******** THEME OPTIONS *************** */

// Register customizer options
function custom_theme_options($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Food Delivery Service', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Subtitle', 'dt_mnakhtar'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Title
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Delicious food at your fingertips', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Hero Text
    $wp_customize->add_setting('hero_text', array(
        'default' => __('A ultricies eget condimentum sed faucibus enim maecenas variusd dolor sitegestas hendrerit et maecenas habitant mattis in facili.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_text', array(
        'label' => __('Hero Text', 'dt_mnakhtar'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    //Hero Section Extra Info Contents
    $wp_customize->add_setting('hero_info_customer_number', array(
        'default'           => __('10+', 'dt_mnakhtar' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('hero_info_customer_number', array(
        'label'         => __('Number', 'dt_mnakhtar' ),
        'section'       => 'hero_section',
        'type'          => 'text'
    ));
    $wp_customize->add_setting('hero_info_customer_text', array(
        'default'           => __('Happy Customers', 'dt_mnakhtar' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('hero_info_customer_text', array(
        'label'         => __('Text 1', 'dt_mnakhtar' ),
        'section'       => 'hero_section',
        'type'          => 'text'
    ));

    $wp_customize->add_setting('hero_info_restaurant_number', array(
        'default'           => __('500k+', 'dt_mnakhtar' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('hero_info_restaurant_number', array(
        'label'         => __('Number', 'dt_mnakhtar' ),
        'section'       => 'hero_section',
        'type'          => 'text'
    ));
    $wp_customize->add_setting('hero_info_restaurant_text', array(
        'default'           => __('Restaurant available', 'dt_mnakhtar' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('hero_info_restaurant_text', array(
        'label'         => __('Text 1', 'dt_mnakhtar' ),
        'section'       => 'hero_section',
        'type'          => 'text'
    ));

    $wp_customize->add_setting('hero_info_deliveries_number', array(
        'default'           => __('30M+', 'dt_mnakhtar' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('hero_info_deliveries_number', array(
        'label'         => __('Number', 'dt_mnakhtar' ),
        'section'       => 'hero_section',
        'type'          => 'text'
    ));
    $wp_customize->add_setting('hero_info_delivery_text', array(
        'default'           => __('Successful deliveries', 'dt_mnakhtar' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control('hero_info_delivery_text', array(
        'label'         => __('Text 1', 'dt_mnakhtar' ),
        'section'       => 'hero_section',
        'type'          => 'text'
    ));

    // Hero Background Image
    $wp_customize->add_setting('hero_background_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label' => __('Hero Background Image', 'dt_mnakhtar'),
        'section' => 'hero_section',
        'settings' => 'hero_background_image',
    )));

    // Hero Mobile Image
    $wp_customize->add_setting('hero_mobile_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_mobile_image', array(
        'label' => __('Hero Mobile Image', 'dt_mnakhtar'),
        'section' => 'hero_section',
        'settings' => 'hero_mobile_image',
    )));

    // Restaurant Section 
    $wp_customize->add_section('restaurant_section', array(
        'title' => __('Restaurant Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('restaurant_section_title', array(
        'default' => __('Trusted by 5,000+ restaurants around the world', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('restaurant_section_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'restaurant_section',
        'type' => 'text',
    ));

    // How It Work Section
    $wp_customize->add_section('how_it_work_section', array(
        'title' => __('How It Work Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Subtitle
    $wp_customize->add_setting('how_it_subtitle', array(
        'default' => __('How it works', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('how_it_subtitle', array(
        'label' => __('Subtitle', 'dt_mnakhtar'),
        'section' => 'how_it_work_section',
        'type' => 'text',
    ));
    // Title
    $wp_customize->add_setting('how_it_title', array(
        'default' => __('Our simple, yet efficient delivery system', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('how_it_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'how_it_work_section',
        'type' => 'text',
    ));
    // How it work Text
    $wp_customize->add_setting('how_it_text', array(
        'default' => __('A ultricies eget condimentum sed faucibus enim maecenas variusd dolor sitegestas hendrerit et maecenas habitant mattis in facili.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('how_it_text', array(
        'label' => __('How it work Text', 'dt_mnakhtar'),
        'section' => 'how_it_work_section',
        'type' => 'textarea',
    ));

    // Intro Section
    $wp_customize->add_section('intro_section', array(
        'title' => __('Intro Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Title
    $wp_customize->add_setting('intro_title', array(
        'default' => __('Learn why Deliver X is great for your restaurant', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('intro_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'intro_section',
        'type' => 'text',
    ));

    // Intro Section Text
    $wp_customize->add_setting('intro_text', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('intro_text', array(
        'label' => __('Intro Section Text', 'dt_mnakhtar'),
        'section' => 'intro_section',
        'type' => 'textarea',
    ));

    // Intro Section Background Image
    $wp_customize->add_setting('intro_background_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro_background_image', array(
        'label' => __('Intro Background Image', 'dt_mnakhtar'),
        'section' => 'intro_section',
        'settings' => 'intro_background_image',
    )));

    // Intro Mobile Image
    $wp_customize->add_setting('intro_mobile_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro_mobile_image', array(
        'label' => __('Intro Mobile Image', 'dt_mnakhtar'),
        'section' => 'intro_section',
        'settings' => 'intro_mobile_image',
    )));
    
    // Gallery Section
    $wp_customize->add_section('gallery_section', array(
        'title' => __('Gallery Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Title
    $wp_customize->add_setting('gallery_title', array(
        'default' => __('Start attracting more clients today!', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('gallery_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'gallery_section',
        'type' => 'text',
    ));

    // Gallery Section Text
    $wp_customize->add_setting('gallery_text', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('gallery_text', array(
        'label' => __('Gallery Section Text', 'dt_mnakhtar'),
        'section' => 'gallery_section',
        'type' => 'textarea',
    ));
    
    // Our Feature Section
    $wp_customize->add_section('our_feature_section', array(
        'title' => __('Our Feature Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Our Feature SubTitle
    $wp_customize->add_setting('feature_subtitle', array(
        'default' => __('Our Features', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_subtitle', array(
        'label' => __('Sub-title', 'dt_mnakhtar'),
        'section' => 'our_feature_section',
        'type' => 'text',
    ));
    
    // Our Feature Title
    $wp_customize->add_setting('feature_title', array(
        'default' => __('Learn why Deliver is great for customers too!', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('feature_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'our_feature_section',
        'type' => 'text',
    ));

    // Our Feature Section Text
    $wp_customize->add_setting('feature_text', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('feature_text', array(
        'label' => __('gallery Section Text', 'dt_mnakhtar'),
        'section' => 'our_feature_section',
        'type' => 'textarea',
    ));

    // Digital Management Section
    $wp_customize->add_section('digital_management_section', array(
        'title' => __('Digital Management Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Title
    $wp_customize->add_setting('digital_title', array(
        'default' => __('Hassle-free restaurant management', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('digital_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'text',
    ));

    // Digital Management Section Text
    $wp_customize->add_setting('digital_text', array(
        'default' => __('Bibendum consectetur eu quis dignissim purus quis felis urna in enim elementum tellus amet ullamcorper ante in sollicitudin sollicitudin pellentesque porttitor ornare.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('digital_text', array(
        'label' => __('Digital Section Text', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'textarea',
    ));
    // Digital Section Main Image
    $wp_customize->add_setting('digital_main_back_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_main_back_image', array(
        'label' => __('Digital Main back Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_main_back_image',
    )));

    // Digital Main Image
    $wp_customize->add_setting('digital_main_front_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_main_front_image', array(
        'label' => __('Main front Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_main_front_image',
    )));
    // Sub Title
    $wp_customize->add_setting('digital_subtitle1', array(
        'default' => __('Order management', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('digital_subtitle1', array(
        'label' => __(' Sub Title 1', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'text',
    ));

    // Digital Management Section sub Text
    $wp_customize->add_setting('digital_sub_text1', array(
        'default' => __('BAliquam vestibulum morbi blandit cursus risus atomol ultrices proin gravida hendrerit lectusa.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('digital_sub_text1', array(
        'label' => __('Digital Section Sub Text 1', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'textarea',
    ));

    // Digital Section sub Image
    $wp_customize->add_setting('digital_soft_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_soft_image', array(
        'label' => __('Digital Soft Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_soft_image',
    )));

    // Sub Title 2
    $wp_customize->add_setting('digital_subtitle2', array(
        'default' => __('POS integration', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('digital_subtitle2', array(
        'label' => __(' Sub Title 2', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'text',
    ));

    // Digital Section sub Text
    $wp_customize->add_setting('digital_sub_text2', array(
        'default' => __('Lobortis elementum nibh tellus molestie nunc nonolfu celerisque fermentum dui faucibus inomle.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('digital_sub_text2', array(
        'label' => __('Digital Section Sub Text 1', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'textarea',
    ));

    // Digital sub Image
    $wp_customize->add_setting('pos_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'pos_image', array(
        'label' => __('Pos Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'pos_image',
    )));

    // Digital Management Second Post Title
    $wp_customize->add_setting('digital_second_title', array(
        'default' => __('Super convenient for customers too', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('digital_second_title', array(
        'label' => __('2nd Post Title', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'text',
    ));
    // Digital Management Section Second Post Text
    $wp_customize->add_setting('digital_second_post_text', array(
        'default' => __('Bibendum consectetur eu quis dignissim purus quis felis urna in enim elementum tellus amet ullamcorper ante in sollicitudin sollicitudin pellentesque porttitor ornare.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('digital_second_post_text', array(
        'label' => __('Digital Section Text', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'textarea',
    ));
    // Digital Section Second Post Main Image
    $wp_customize->add_setting('digital_second_post_main_back_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_second_post_main_back_image', array(
        'label' => __('Digital Main 2nd Post back Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_second_post_main_back_image',
    )));

    // Digital Second Post Main Front Image
    $wp_customize->add_setting('digital_second_post_main_front_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_second_post_main_front_image', array(
        'label' => __('2nd Post Main front Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_second_post_main_front_image',
    )));
    
    // Second Post Sub Title
    $wp_customize->add_setting('digital_second_subtitle1', array(
        'default' => __('Order from app', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('digital_second_subtitle1', array(
        'label' => __(' Second Post Sub Title 1', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'text',
    ));
    
    // Digital Section sub Text
    $wp_customize->add_setting('digital_second_post_sub_text1', array(
        'default' => __('Lobortis elementum nibh tellus molestie nunc nonolfu celerisque fermentum dui faucibus inomle.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('digital_second_post_sub_text1', array(
        'label' => __('2nd Post Sub Text 1', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'textarea',
    ));
    // Digital Section sub Image
    $wp_customize->add_setting('digital_bucket_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_bucket_image', array(
        'label' => __('Digital Bucket Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_bucket_image',
    )));

    // Second Post Sub Title 2
    $wp_customize->add_setting('digital_second_post_subtitle2', array(
        'default' => __('Delivery tracking', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('digital_second_post_subtitle2', array(
        'label' => __(' 2nd Post Sub Title 2', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'text',
    ));

    // Digital Section sub Text
    $wp_customize->add_setting('digital_second_post_sub_text2', array(
        'default' => __('Lobortis elementum nibh tellus molestie nunc nonolfu celerisque fermentum dui faucibus inomle.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('digital_second_post_sub_text2', array(
        'label' => __('2nd Post Sub Text 2', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'type' => 'textarea',
    ));
    // Digital Section sub Image
    $wp_customize->add_setting('digital_map_image');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digital_map_image', array(
        'label' => __('Digital Map Image', 'dt_mnakhtar'),
        'section' => 'digital_management_section',
        'settings' => 'digital_map_image',
    )));

    
    // Banner Section
    $wp_customize->add_section('banner_section', array(
        'title' => __('banner Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Title
    $wp_customize->add_setting('banner_title', array(
        'default' => __('Start attracting more clients today!', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('banner_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'banner_section',
        'type' => 'text',
    ));

    // Banner Section Text
    $wp_customize->add_setting('banner_text', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('banner_text', array(
        'label' => __('banner Section Text', 'dt_mnakhtar'),
        'section' => 'banner_section',
        'type' => 'textarea',
    ));

    // banner Section Background Image
    $wp_customize->add_setting('banner_mobile_image1');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_mobile_image1', array(
        'label' => __('Banner Mobile Image 1', 'dt_mnakhtar'),
        'section' => 'banner_section',
        'settings' => 'banner_mobile_image1',
    )));

    // Banner Mobile Image
    $wp_customize->add_setting('banner_mobile_image2');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_mobile_image2', array(
        'label' => __('Banner Mobile Image 2', 'dt_mnakhtar'),
        'section' => 'banner_section',
        'settings' => 'banner_mobile_image2',
    )));

    // CTA Section
    $wp_customize->add_section('cta_section', array(
        'title' => __('CTA Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));

    // Title
    $wp_customize->add_setting('cta_section_text', array(
        'default' => __('Hassle-free restaurant management', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_section_text', array(
        'label' => __('Text', 'dt_mnakhtar'),
        'section' => 'cta_section',
        'type' => 'textarea',
    ));
    // CTA Section BUTTONS
    $wp_customize->add_setting('cta_section_button_text', array(
        'default' => __('Download for IOS', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_section_button_text', array(
        'label' => __('Text', 'dt_mnakhtar'),
        'section' => 'cta_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('cta_section_button_link', array(
        'default' => __('Link for IOS', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_section_button_link', array(
        'label' => __('App URL', 'dt_mnakhtar'),
        'section' => 'cta_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('cta_section_button2_text', array(
        'default' => __('Download for Android', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_section_button2_text', array(
        'label' => __('Text', 'dt_mnakhtar'),
        'section' => 'cta_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('cta_section_button2_link', array(
        'default' => __('Link for Android', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_section_button2_link', array(
        'label' => __('App URL', 'dt_mnakhtar'),
        'section' => 'cta_section',
        'type' => 'text',
    ));
    // CTA Section Logo
    $wp_customize->add_setting('cta_logo');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cta_logo', array(
        'label' => __('CTA section Logo', 'dt_mnakhtar'),
        'section' => 'cta_section',
        'settings' => 'cta_logo',
    )));

    /***************** CTA BUTTONS ********************************/
    // CTA Section BUTTONS
    $wp_customize->add_section('cta_buttons', array(
        'title' => __('CTA Buttos', 'dt_mnakhtar'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('cta_button_text', array(
        'default' => __('Download App', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_button_text', array(
        'label' => __('Text', 'dt_mnakhtar'),
        'section' => 'cta_buttons',
        'type' => 'text',
    ));
    $wp_customize->add_setting('cta_button_link', array(
        'default' => __('App url', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_button_link', array(
        'label' => __('App URL', 'dt_mnakhtar'),
        'section' => 'cta_buttons',
        'type' => 'text',
    ));
    $wp_customize->add_setting('cta_button2_text', array(
        'default' => __('Register', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_button2_text', array(
        'label' => __('Text', 'dt_mnakhtar'),
        'section' => 'cta_buttons',
        'type' => 'text',
    ));
    $wp_customize->add_setting('cta_button2_link', array(
        'default' => __('Registration link', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_button2_link', array(
        'label' => __('Registration link', 'dt_mnakhtar'),
        'section' => 'cta_buttons',
        'type' => 'text',
    ));
    /**************** CTA BUTTONS END *********************/
    
    // Testimonial Section 
    $wp_customize->add_section('testimonials_section', array(
        'title' => __('Testimonials Section', 'dt_mnakhtar'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('testimonial_section_title', array(
        'default' => __('What our clients say', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('testimonial_section_title', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('testimonial_section_text', array(
        'default' => __('Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero', 'dt_mnakhtar'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('testimonial_section_text', array(
        'label' => __('Title', 'dt_mnakhtar'),
        'section' => 'testimonials_section',
        'type' => 'textarea',
    ));

}

add_action('customize_register', 'custom_theme_options');


//Include Widgets Files from Widgets Folder
require_once get_template_directory() . '/widgets/footer-widget.php';


// functions.php

function mnakhtar_register_sidebars() {
register_sidebar(array(
    'name' => __('Footer Sidebar', 'text_domain'),
    'id' => 'footer-sidebar',
    'description' => __('Widgets in this area will be shown in the footer.', 'text_domain'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
));
}
add_action('widgets_init', 'mnakhtar_register_sidebars');