<?php
function geekhub_stylesheets() {
    wp_enqueue_style( 'geekhub-style', get_stylesheet_uri() );
}

load_theme_textdomain('geekhub', get_template_directory() . '/languages');

add_action( 'wp_enqueue_scripts', 'geekhub_stylesheets' );


register_nav_menus( array(
	'main_menu' => 'Main Menu'
) );

add_theme_support( 'post-thumbnails' );

// Register Custom Post Type
function create_sponsors() {

    $labels = array(
        'name'                => __( 'Sponsors',  'geekhub' ),
        'singular_name'       => __( 'Sponsor', 'geekhub' ),
        'menu_name'           => __( 'Sponsors', 'geekhub' ),
        'all_items'           => __( 'All Sponsors', 'geekhub' ),
        'view_item'           => __( 'View Sponsor', 'geekhub' ),
        'add_new_item'        => __( 'Add new Sponsor', 'geekhub' ),
        'add_new'             => __( 'ADD Sponsor', 'geekhub' ),
        'edit_item'           => __( 'Edit sponsor', 'geekhub' ),
        'update_item'         => __( 'Update sponsor', 'geekhub' ),
        'search_items'        => __( 'Find sponsor', 'geekhub' ),
        'not_found'           => __( 'no sponsors found', 'geekhub' ),
     );
    $args = array(
        'label'               => __( 'Our Sponsors', 'geekhub' ),
        'description'         => __( 'The sponsors of our project.', 'geekhub' ),
        'labels'              => $labels,
        'supports'            => array( 'thumbnail','title','editor' ),
        'public'              => true,
        'menu_position'       => 5,
        'menu_icon'           => 'http://localhost/wordpress/wp-content/themes/scv/images/settings-20.png',
        'taxonomies'          => array( 'category', 'post_tag' )

    );
    register_post_type( 'scv_sponsors', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_sponsors', 1 );





// Register Custom Post Type
function create_courses() {

    $labels = array(
        'name'                => __( 'Courses', 'geekhub' ),
        'singular_name'       => __( 'Course', 'geekhub' ),
        'menu_name'           => __( 'Our Courses', 'geekhub' ),
        'all_items'           => __( 'All Courses', 'geekhub' ),
        'view_item'           => __( 'View Course', 'geekhub' ),
        'add_new_item'        => __( 'Add new Course', 'geekhub' ),
        'add_new'             => __( 'ADD Course', 'geekhub' ),
        'edit_item'           => __( 'Edit Course', 'geekhub' ),
        'search_items'        => __( 'Find Course', 'geekhub' ),
        'not_found'           => __( 'no Courses found', 'geekhub' ),

    );
    $args = array(
        'label'               => _x( 'scv_courses', 'geekhub' ),
        'description'         => _x( 'The courses of our project.', 'geekhub' ),
        'labels'              => $labels,
        'supports'            => array( 'thumbnail','title','editor' ),
        'public'              => true,
        'menu_position'       => 6,
        'menu_icon'           => 'http://localhost/wordpress/wp-content/themes/scv/images/settings-20.png',
        'taxonomies'          => array( 'category', 'post_tag' ),

    );
    register_post_type( 'scv_courses', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_courses', 2);





function create_team() {

    $labels = array(
        'name'                => __( 'Team', 'geekhub' ),
        'singular_name'       => __( 'Teacher', 'geekhub' ),
        'menu_name'           => __( 'Team', 'geekhub' ),
        'all_items'           => __( 'All teachers', 'geekhub' ),
        'view_item'           => __( 'View teacher', 'geekhub' ),
        'add_new_item'        => __( 'Add new teacher', 'geekhub' ),
        'add_new'             => __( 'ADD teacher', 'geekhub' ),
        'edit_item'           => __( 'Edit teacher', 'geekhub' ),

    );
    $args = array(
        'label'               => __( 'Our teachers', 'geekhub' ),
        'description'         => __( 'The teachers of our project.', 'geekhub' ),
        'labels'              => $labels,
        'supports'            => array( 'thumbnail','title','editor','custom-fields' ),
        'menu_icon'           => 'http://localhost/wordpress/wp-content/themes/scv/images/settings-20.png',
        'menu_position'       => 7,
        'public'              => true,
        'taxonomies'          => array( 'category', 'post_tag' ),

    );
    register_post_type( 'scv_teachers', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_team', 3 );



//Theme Logo customizer support
function geekhub_theme_customizer( $wp_customize ) {
    // Fun code will go here

    $wp_customize->add_section( 'geekhub_logo_section' , array(
        'title'       => __( 'Logo', 'Geekhub' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    $wp_customize->add_setting( 'geekhub_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'geekhub_logo', array(
        'label'    => __( 'Logo', 'geekhub' ),
        'section'  => 'geekhub_logo_section',
        'settings' => 'geekhub_logo',
    ) ) );
    $wp_customize->add_section( 'geekhub_social_links_section', array(
        'title'         => __( 'Social Links Panel', 'Geekhub' ),
        'priority'      => 40,
        'description'   => 'Change your social links right here'
    ) );
    $wp_customize->add_setting('geekhub_social_fb');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'geekhub_social_fb', array(
        'label'          => __( 'Facebook', 'geekhub' ),
        'section'        => 'geekhub_social_links_section',
        'settings'       => 'geekhub_social_fb',
        'type'           => 'text',
    ) ) );
    $wp_customize->add_setting('geekhub_social_vk');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'geekhub_social_vk', array(
        'label'          => __( 'Vkontakte', 'geekhub' ),
        'section'        => 'geekhub_social_links_section',
        'settings'       => 'geekhub_social_vk',
        'type'           => 'text',
    ) ) );
    $wp_customize->add_setting('geekhub_social_tw');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'geekhub_social_tw', array(
        'label'          => __( 'Twitter', 'geekhub' ),
        'section'        => 'geekhub_social_links_section',
        'settings'       => 'geekhub_social_tw',
        'type'           => 'text',
    ) ) );
    $wp_customize->add_setting('geekhub_social_youtube');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'geekhub_social_youtube', array(
        'label'          => __( 'Youtube', 'geekhub' ),
        'section'        => 'geekhub_social_links_section',
        'settings'       => 'geekhub_social_youtube',
        'type'           => 'text',
    ) ) );
    $wp_customize->add_setting('geekhub_social_vimeo');
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'geekhub_social_vimeo', array(
        'label'          => __( 'Vimeo', 'geekhub' ),
        'section'        => 'geekhub_social_links_section',
        'settings'       => 'geekhub_social_vimeo',
        'type'           => 'text',
    ) ) );

}
add_action('customize_register', 'geekhub_theme_customizer');

// Custom widget area.
register_sidebar( array(
    'name' => __( 'Custom Widget Area'),
    'id' => 'custom-widget-area',
    'description' => __( 'An optional custom widget area for your site', 'twentyten' ),
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>"

) );

