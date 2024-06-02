<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<?php wp_head(); ?>
</head>
<body>
    <header class="header" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <nav class="navbar">
                <div class="logo-area">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                    if ($custom_logo_url) {
                        echo '<img src="' . esc_url($custom_logo_url) . '" alt="' . get_bloginfo('name', 'display') . '">';
                    } else {
                        // Fallback if no custom logo is set
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/default-logo.png" alt="' . get_bloginfo('name', 'display') . '">';
                    }
                    
                    ?>
                </div>
                <div id="nav" class="nav-area">
                    <?php
                    $menu_class = new Menus();
                    $header_menu_id = $menu_class->get_menu_id( 'deliverytemplate_top_menu' );
                    $header_menus = wp_get_nav_menu_items( $header_menu_id );
                    if( !empty( $header_menus) && is_array( $header_menus ) ):
                    ?>
                    <ul>
                    <?php
                    foreach( $header_menus as $menu_item ) :
                        if( $menu_item ) :
                     ?>
                        <li>
                            <a href="<?php echo esc_url( $menu_item->url ); ?>">
                                <?php echo esc_html( $menu_item->title ); ?>            
                            </a>
                        </li>
                    <?php endif; endforeach; ?>
                    </ul>
                    
                    <?php endif; ?>
                    <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                    </div>
                </div>    
                <!-- Mobile Menu -->
                <div id='menu'>
                    <div class='menu-line1'></div>
                    <div class='menu-line2'></div>
                </div>
                <div class='nav-page1'>
                    <ul>
                        <?php foreach( $header_menus as $menu_item ) :
                            if( $menu_item ) :
                        ?>
                            <li>
                                <a href="<?php echo esc_url( $menu_item->url ); ?>">
                                    <?php echo esc_html( $menu_item->title ); ?>            
                                </a>
                            </li>
                        <?php endif; endforeach; ?>
                    </ul>
                    <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                    </div>
                </div>
                <div class='nav-page2'></div>
                
            </nav>
        </div>
    </header>