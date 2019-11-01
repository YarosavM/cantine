<?php  


add_action( 'customize_register', 'theme_customize_register');
function theme_customize_register( $wp_customize ) {


    /************************************************
    *** Current product page ***
    ************************************************/
    /*$wp_customize->add_section( 'current_product_page_section' , array(
        'title'    => __( 'Current Product Page', 'starter' ),
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'product_filter_keywords', array(
        'capability' => 'edit_theme_options',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'product_filter_keywords', array(
        'type' => 'textarea',
        'section' => 'current_product_page_section',
        'label' => __( 'Filtring keywords' ),
        'description' => __( 'Type here classes that will used for filting in archive products page' ),
    ) );







    /************************************************
    *** Head Section ***
    ************************************************/
    $wp_customize->add_section( 'header_cust_section' , array(
        'title'    => __( 'Head Section', 'starter' ),
        'priority' => 30
    ) );   

    $wp_customize->add_setting( 'header_back_setting' , array(
        'default'   => 'http://localhost:81/wordpress/wp-content/uploads/2018/07/international5-1.jpg',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'frontpage_background', array(
        'label'    => __( 'H Background', 'starter' ),
        'section'  => 'header_cust_section',
        'settings' => 'header_back_setting',
    ) ) );

    $wp_customize->add_setting('darkness_set', array(
        'default'   => 0,
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'darkness_checking', array(
        'label'          => __( 'Dark overback', 'starter' ),
        'section'        => 'header_cust_section',
        'settings'       => 'darkness_set',
        'type'           => 'checkbox',
    ) ) );

    $wp_customize->add_setting( 'head_description_settings', array(
        'capability' => 'edit_theme_options',
        'default' => 'Web-Designer on HTML, CSS, JavaScript and jQuery. Programmer on PHP, C++ and Java. A lot of practice and completed projects',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'head_description_settings', array(
        'type' => 'textarea',
        'section' => 'header_cust_section',
        'label' => __( 'Totally information' ),
        'description' => __( 'Input "description" about yourself here (short statistic)' ),
    ) );


    /************************************************
    *** Colors Section ***
    ************************************************/
    $wp_customize->add_section( 'color_section' , array(
        'title'    => __( 'Colors', 'starter' ),
        'priority' => 30
    ) );   

    $wp_customize->add_setting( 'fav_color_setting' , array(
        'default'   => '#FFA3B1',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fav_color', array(
        'label'    => __( 'Key Color', 'starter' ),
        'section'  => 'color_section',
        'settings' => 'fav_color_setting',
    ) ) );


    $wp_customize->add_setting( 'sel_bg_color_setting' , array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sel_bg_color', array(
        'label'    => __( 'Selection Background Color', 'starter' ),
        'section'  => 'color_section',
        'settings' => 'sel_bg_color_setting',
    ) ) );


    $wp_customize->add_setting( 'sel_txt_color_setting' , array(
        'default'   => '#0a0a0a',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sel_txt_color', array(
        'label'    => __( 'Selection Text Color', 'starter' ),
        'section'  => 'color_section',
        'settings' => 'sel_txt_color_setting',
    ) ) );


    /************************************************
    *** Futher Head Section ***
    ************************************************/
    $wp_customize->add_panel( 'futher_head_panel', array(
        'title' => __( 'Infra Head' ),
        'priority' => 160, // Mixed with top-level-section hierarchy.
    ) );
    
    $wp_customize->add_section( 'futher_head_section' , array(
        'title' => 'Generally',
        'panel' => 'futher_head_panel',
    ) );

    $wp_customize->add_setting( 'fh_back_setting' , array(
        'default'   => 'http://localhost:81/wordpress/wp-content/uploads/2018/08/dark_dimond.jpg',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fh_background', array(
        'label'    => __( 'FH Background', 'starter' ),
        'section'  => 'futher_head_section',
        'settings' => 'fh_back_setting',
    ) ) );

    $wp_customize->add_setting('infra_darkness_set', array(
        'default'   => 0,
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'infra_darkness_checking', array(
        'label'          => __( 'Dark overback', 'starter' ),
        'section'        => 'futher_head_section',
        'settings'       => 'infra_darkness_set',
        'type'           => 'checkbox',
    ) ) );


    $wp_customize->add_setting( 'fh_cap_setting' , array(
        'default'  => __( 'Resume', 'starter' ),
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fh_caption_prim', array(
        'label'    => __( 'FH Primary Caption (h1)', 'starter' ),
        'section'  => 'futher_head_section',
        'settings' => 'fh_cap_setting',
        'type'     => 'text'
    ) ) );

    $wp_customize->add_setting( 'fh_cap_sec_setting' , array(
        'default'  => __( 'Dobie', 'starter' ),
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fh_caption_sec', array(
        'label'    => __( 'FH Secondary Caption (h2)', 'starter' ),
        'section'  => 'futher_head_section',
        'settings' => 'fh_cap_sec_setting',
        'type'     => 'text'
    ) ) );

    $wp_customize->add_setting( 'fh_cap_sec_setting' , array(
        'default'  => __( 'Dobie', 'starter' ),
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fh_caption_sec', array(
        'label'    => __( 'FH Secondary Caption (h2)', 'starter' ),
        'section'  => 'futher_head_section',
        'settings' => 'fh_cap_sec_setting',
        'type'     => 'text'
    ) ) );




    $wp_customize->add_section( 'block1_section' , array(
        'title' => 'Block 1',
        'panel' => 'futher_head_panel',
    ) );

    $wp_customize->add_setting( 'block1_cap_set' , array(
        'default'  => __( 'Summary', 'starter' ),
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'block1_caption', array(
        'label'    => __( 'Caption', 'starter' ),
        'section'  => 'block1_section',
        'settings' => 'block1_cap_set',
        'type'     => 'text',
        'description' => 'Input here your block 1 caption'
    ) ) );

    $wp_customize->add_setting( 'block1_cont_txt_set' , array(
        'capability' => 'edit_theme_options',
        'default' => 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'block1_cont_txt_set', array(
        'type' => 'textarea',
        'label' => __( 'Content text' ),
        'description' => __( 'Input here your block 1 content text' ),
        'section'  => 'block1_section',
        'settings' => 'block1_cont_txt_set',
    ) );

}



if ( get_theme_mod('infra_darkness_set') == 1 ) {

    add_action( 'customize_register', 'theme_customize_register_add_cb1');
    function theme_customize_register_add_cb1( $wp_customize ) {

        $wp_customize->add_section( 'test1_section' , array(
            'title'    => __( 'Test Section', 'starter' ),
            'priority' => 30
        ) );   

        $wp_customize->add_setting( 'test1_setting' , array(
            'default'   => 'http://localhost:81/wordpress/wp-content/uploads/2018/07/international5-1.jpg',
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'test1_background', array(
            'label'    => __( 'Test Background', 'starter' ),
            'section'  => 'test1_section',
            'settings' => 'test1_setting',
        ) ) );

    }

}


add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css() {
    ?>
         <style type="text/css">
            ::selection{
                color: <?php echo get_theme_mod('sel_txt_color_setting', '#0a0a0a'); ?>;
                background: <?php echo get_theme_mod('sel_bg_color_setting', '#FFFFFF'); ?>;
                opacity: 1;
            }

            .cap-zone { 
                background: url( "<?php echo get_theme_mod('header_back_setting', 'http://localhost:81/wordpress/wp-content/uploads/2018/07/international5-1.jpg'); ?>" );
                background-repeat: no-repeat; 
                background-size: cover;
                min-width:100%;
                min-height:100%;
                transition:1s;
            }

            .next-page1 {
                background: url("<?php echo get_theme_mod('fh_back_setting', 'http://localhost:81/wordpress/wp-content/uploads/2018/08/dark_dimond.jpg'); ?>");
                background-size:cover;
                overflow:hidden;
                min-height:50%;
                max-height:200%;
            }


            .fav-color-text{
                color: <?php echo get_theme_mod('fav_color_setting', '#FFA3B1'); ?>;
            }
            .fav-color-border {
                border-color: <?php echo get_theme_mod('fav_color_setting', '#FFA3B1'); ?>;
            }
            .mtl-unactive:hover {
                color:<?php echo get_theme_mod('fav_color_setting', '#FFA3B1'); ?>;
            }
            .cb-padder:hover {
                border: 3.25px solid <?php echo get_theme_mod('fav_color_setting', '#FFA3B1'); ?>;
            }
            .place-capper:hover{    
                color: <?php echo get_theme_mod('fav_color_setting', '#FFA3B1'); ?>;
            }
            .f-mli-def-unite:hover {
                color: <?php echo get_theme_mod('fav_color_setting', '#FFA3B1'); ?>;
            }

         </style>
    <?php
}

?>