<?php get_header(); ?>

<main>
        <section class="hero-section">
            <div class="left-column">
                <p class="sub-title"><?php echo get_theme_mod('hero_subtitle', 'Food Delivery Service'); ?></p>
                <h1><?php echo get_theme_mod('hero_title', 'Delicious food at your fingertips'); ?></h1>
                <p class="hero-text"><?php echo get_theme_mod('hero_text', 'A ultricies eget condimentum sed faucibus enim maecenas variusd dolor sitegestas hendrerit et maecenas habitant mattis in facili.'); ?></p>
                <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                </div>
                <hr class="devider">
                <ul class="stats-list">
                    <li class="stats-cards">
                        <p class="stats-title"><?php echo get_theme_mod('hero_info_customer_number', '10'); ?><span>+</span></p>
                        <p class="stats-text"><?php echo get_theme_mod('hero_info_customer_text', 'Happy customers'); ?></p>
                    </li>
                    <li class="stats-cards">
                        <p class="stats-title"><?php echo get_theme_mod('hero_info_restaurant_number', '500k'); ?><span>+</span></p>
                        <p class="stats-text"><?php echo get_theme_mod('hero_info_restaurant_text', 'Restaurant available'); ?></p>
                    </li>
                    <li class="stats-cards">
                        <p class="stats-title"><?php echo get_theme_mod('hero_info_deliveries_number', '30M'); ?><span>+</span></p>
                        <p class="stats-text"><?php echo get_theme_mod('hero_info_delivery_text', 'Seccessful deliveries'); ?></p>
                    </li>
                </ul>
                <!-- Add more PHP code to display other elements based on theme options -->
            </div>
            <div class="right-column">
                <img class="hero-back-image" src="<?php echo esc_url(get_theme_mod('hero_background_image')); ?>" alt="" data-aos="fade-down-left" data-aos-duration="500">
                <img class="hero-mobile" src="<?php echo esc_url(get_theme_mod('hero_mobile_image')); ?>" alt="" data-aos="hero-image" data-aos-duration="600">
            </div>
        </section>
        <!-- New Code -->
        <section class="partners-section">
            <div class="container">
                <p class="section-title"><?php echo get_theme_mod('restaurant_section_title', 'Trusted by 5,000+ restaurants around the world'); ?></p>
                <ul>
                    <li>
                        <span><img src="<?php echo get_template_directory_uri();?>/images/table-image.png" alt=""></span>
                        <span>Restaurant</span>
                    </li>
                    <li>
                        <span><img src="<?php echo get_template_directory_uri();?>/images/bati-chamus.png" alt=""></span>
                        <span>Restaurant</span>
                    </li>
                    <li>
                        <span><img src="<?php echo get_template_directory_uri();?>/images/spoon-fork.png" alt=""></span>
                        <span>Restaurant</span>
                    </li>
                    <li>
                        <span><img src="<?php echo get_template_directory_uri();?>/images/piza.png" alt=""></span>
                        <span>Restaurant</span>
                    </li>
                </ul>
            </div>            
        </section>
        <section class="how-it-work">
            <div class="container">
                <p class="sub-title"><?php echo get_theme_mod('how_it_subtitle', 'How it works');?></p>
                <h2><?php echo get_theme_mod('how_it_title', 'Our simple, yet efficient delivery system'); ?></h2>
                <p class="card-text"><?php echo get_theme_mod('how_it_text', 'Lorem ipsum dolor sit amet consectetur adipiscing elit tortor eu egestas morbi sem vulputate etiam facilisis pellentesque ut quis.'); ?></p>
                <div class="how-it-works-posts">
                    <?php
                        $how_it_contents = new WP_Query(
                            array(
                                'post_type'         => 'how_it__contents',
                                'posts_per_page'    => 3,
                                'order'             => 'ASC'
                            )
                        );

                        while( $how_it_contents->have_posts() ) : $how_it_contents->the_post();
                    ?>
                    <div class="post-card">
                        <span data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="bottom-bottom"><?php the_post_thumbnail(); ?></span>
                        <h3 class="card-title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                
                <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                </div>
            </div>
        </section>
        <section class="intro-section">
            <div class="container">
                <div class="intro-contents">
                    <div class="left-column">
                        <h2><?php echo get_theme_mod('intro_title', 'Learn why Deliver X is great for your restaurant'); ?></h2>
                        <p class="card-text">
                            <?php echo get_theme_mod('intro_text', 'Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.'); ?>
                        </p>
                        <div class="speciality">
                            <?php
                                $specialities = new WP_Query(
                                    array(
                                        'post_type'         => 'specialities',
                                        'posts_per_page'    => 4,
                                        'order'             => 'ASC'
                                    )
                                );

                                while( $specialities->have_posts() ) : $specialities->the_post();
                            ?>
                            <div class="speciality-card">
                                <p>
                                    <?php if( get_field('speciality_icon') ): ?>
                                    <i class="<?php the_field('speciality_icon'); ?>"></i>
                                    <?php endif; ?>
                                </p>
                                <h4><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="right-column">
                        <img class="hero-back-image" src="<?php echo esc_url(get_theme_mod('intro_background_image')); ?>" alt="" data-aos="zoom-in">
                        <img class="mobile-front" src="<?php echo esc_url(get_theme_mod('intro_mobile_image')); ?>" alt="" data-aos="zoom-in">
                    </div>
                </div>
                
                <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                </div>
            </div>
        </section>
        <section class="gallery-section">
            <div class="left-column">
                <h2><?php echo get_theme_mod('gallery_title', 'A delicious burger is one tap away!' ) ?></h2>
                <p>
                    <?php echo get_theme_mod('gallery_text', 'Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.'); ?>                   
                </p>
                <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                </div>
            </div>
            <div class="right-column">
                <div class="slider-container">
                    <div class="slider-column">
                        <div class="slider-images">
                            <?php
                            $image_gallery_col1 = new WP_Query(
                                array(
                                    'post_type'     => 'image_gallery',
                                    'posts_per_page'=> 4,
                                )
                            );
                            while($image_gallery_col1->have_posts() ) : $image_gallery_col1->the_post();
                            ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="slider-column">
                        <div class="slider-images">
                            <?php
                            $image_gallery_col2 = new WP_Query(
                                array(
                                    'post_type'     => 'image_gallery',
                                    'posts_per_page'=> 4,
                                    'offset'        => 4
                                )
                            );
                            while($image_gallery_col2->have_posts() ) : $image_gallery_col2->the_post();
                            ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="gallery">
                    
                </div> -->
            </div>
        </section>
        <section class="feature-section">
            <div class="container">
                <p class="sub-title"><?php echo get_theme_mod('feature_subtitle', 'Our Features') ?></p>
                <h2><?php echo get_theme_mod('feature_title', 'Learn why Deliver is great for customers too!') ?></h2>
                <p class="card-text"><?php echo get_theme_mod('feature_text', 'Lorem ipsum dolor sit amet consectetur adipiscing elit tortor eu egestas morbi sem vulputate etiam facilisis pellentesque ut quis.'); ?></p>
                <div class="features">
                    <?php
                        $features = new WP_Query(
                            array(
                                'post_type'         => 'features',
                                'posts_per_page'    => 6,
                                'order'             => 'ASC'
                            )
                        );
                        while( $features->have_posts() ) : $features->the_post();
                    ?>
                    <div class="feature-card">
                        <?php the_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                </div>
            </div>
        </section>
        <section class="management-section">
            <div class="container">
                <div class="left-column">
                    <img class="delivery-background" src="<?php echo esc_url(get_theme_mod('digital_main_back_image')); ?>" alt="">
                    <img class="delivery-man" src="<?php echo esc_url(get_theme_mod('digital_main_front_image')); ?>" alt="">
                </div>
                <div class="right-column">
                    <h2><?php echo get_theme_mod('digital_title', 'Hassle-free restaurant management') ?></h2>
                    <p><?php echo get_theme_mod('digital_text', 'Bibendum consectetur eu quis dignissim purus quis felis urna in enim elementum tellus amet ullamcorper ante in sollicitudin sollicitudin pellentesque porttitor ornare.');?></p>
                    <div class="management-cards">
                        <div class="card">
                            <img src="<?php echo esc_url(get_theme_mod('digital_soft_image')); ?>" alt="">
                            <div class="card-text">
                                <h4><?php echo get_theme_mod('digital_subtitle1', 'Order Management') ?></h4>
                                <p><?php echo get_theme_mod('digital_sub_text1', 'Aliquam vestibulum morbi blandit cursus risus atomol ultrices proin gravida hendrerit lectusa.'); ?></p>
                            </div>
                        </div>
                        <div class="card">
                        <img src="<?php echo esc_url(get_theme_mod('pos_image')); ?>" alt="">
                            
                            <div class="card-text">
                                <h4><?php echo get_theme_mod('digital_subtitle2', 'POS integration'); ?></h4>
                                <p><?php echo get_theme_mod('digital_sub_text2', 'Lobortis elementum nibh tellus molestie nunc nonolfu celerisque fermentum dui faucibus inomle.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="management-section2">
            <div class="container">
                <div class="right-column">
                    <h2><?php echo get_theme_mod('digital_second_title', 'Super convenient for customers too') ?></h2>
                    <p><?php echo get_theme_mod('digital_second_post_text', 'Bibendum consectetur eu quis dignissim purus quis felis urna in enim elementum tellus amet ullamcorper ante in sollicitudin sollicitudin pellentesque porttitor ornare.');?></p>
                    <div class="management-cards">
                        <div class="card">
                            <img src="<?php echo esc_url(get_theme_mod('digital_bucket_image')); ?>" alt="">
                            <div class="card-text">
                                <h4><?php echo get_theme_mod('digital_second_subtitle1', 'Order from app') ?></h4>
                                <p><?php echo get_theme_mod('digital_second_post_sub_text1', 'Aliquam vestibulum morbi blandit cursus risus atomol ultrices proin gravida hendrerit lectusa.'); ?></p>
                            </div>
                        </div>
                        <div class="card">
                        <img src="<?php echo esc_url(get_theme_mod('digital_map_image')); ?>" alt="">
                            
                            <div class="card-text">
                                <h4><?php echo get_theme_mod('digital_second_post_subtitle2', 'Delivery tracking'); ?></h4>
                                <p><?php echo get_theme_mod('digital_second_post_sub_text2', 'Lobortis elementum nibh tellus molestie nunc nonolfu celerisque fermentum dui faucibus inomle.'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-column">
                    <img class="delivery-background" src="<?php echo esc_url(get_theme_mod('digital_second_post_main_back_image')); ?>" alt="">
                    <img class="front-image" src="<?php echo esc_url(get_theme_mod('digital_second_post_main_front_image')); ?>" alt="">
                </div>
            </div>
        </section>
        <section class="testimonial-section">
            <div class="container">
                <div class="title-section">
                    <div class="text-column">
                        <h2><?php echo get_theme_mod('testimonial_section_title', 'What our clients say'); ?></h2>
                        <p><?php echo get_theme_mod('testimonial_section_text', 'Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero'); ?></p>
                    </div>
                    <div class="cta-buttons">
                        <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link'); ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                        <a href="<?php echo get_theme_mod('cta_button_link', 'App url'); ?>" class="app-btn"><?php echo get_theme_mod('cta_button_text', 'Download App') ?></a>
                    </div>
                </div>
                <div class="testimonials">
                    <?php
                    $testimonials = new WP_Query(
                        array(
                            'post_type'         => 'testimonials',
                            'posts_per_page'    => 6
                        )
                    );
                    while( $testimonials->have_posts() ) : $testimonials->the_post();

                    ?>
                    <div class="testimoni-card">
                        <div class="card-top">
                            <div class="client-name">
                                <?php the_post_thumbnail();?>
                                <div class="customer-name">
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php if(get_field('designation')){ the_field('designation'); } ?></p>
                                </div>
                            </div>
                            <div class="social-links">
                                <?php if( get_field('social_link')): ?>
                                <a href="<?php the_field('social_link'); ?>"><i class="fa-brands fa-twitter"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <section class="banner-section">
            <div class="container">
                <div class="left-column">
                    <h2><?php echo get_theme_mod('banner_title', 'Start attracting more clients today!' ); ?></h2>
                    <p><?php echo get_theme_mod('banner_text', 'Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam neque ultrices.' ); ?></p>
                    <a href="<?php echo get_theme_mod('cta_button2_link', 'Registration link') ?>" class="register-btn"><?php echo get_theme_mod('cta_button2_text', 'Register'); ?></a>
                </div>
                <div class="right-column">
                    <img class="mobile-ux-1" src="<?php echo esc_url(get_theme_mod('banner_mobile_image1')); ?>" alt="">
                    <img class="mobile-ux-2" src="<?php echo esc_url(get_theme_mod('banner_mobile_image2')); ?>" alt="">
                </div>                
            </div>
        </section>
        <section class="cta-section">
            <div class="container">
                <div class="left-column">
                    <img src="<?php echo esc_url(get_theme_mod('cta_logo')); ?>" alt="">
                    <p><?php echo get_theme_mod('cta_section_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut.'); ?></p>
                </div>
                <div class="cta-buttons">
                    <a href="<?php echo get_theme_mod('cta_section_button_link', 'Link for IOS'); ?>" class="register-btn"><i class="fa-brands fa-apple"></i><span><?php echo get_theme_mod('cta_section_button_text', 'Download for IOS'); ?></span></a>
                    <a href="<?php echo get_theme_mod('cta_section_button2_link', 'Link for Android'); ?>" class="app-btn"><i class="fa-brands fa-android"></i><span><?php echo get_theme_mod('cta_section_button2_text', 'Download for Android') ?></span></a>
                </div>
            </div>
        </section>


    <?php get_footer(); ?>