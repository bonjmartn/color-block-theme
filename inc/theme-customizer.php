<?php

function colorblock_customize_register( $wp_customize ) {


  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'color-block-free');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'color-block-free');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'color-block-free');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
  $wp_customize->get_control('header_textcolor')->section = 'header_text_styles'; 
  $wp_customize->get_control('header_textcolor')->label = __('Site Title Color', 'color-block-free');
  $wp_customize->get_setting('header_textcolor')->transport = 'postMessage'; 

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Home and Blog Pages', 'color-block-free');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Home and Blog Pages', 'color-block-free');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'color-block-free');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'color-block-free');  


  // Customize Background Settings

  $wp_customize->get_section('background_image')->title = __('Background Styles', 'color-block-free');  
  $wp_customize->get_control('background_color')->section = 'background_image'; 

  $wp_customize->remove_control('header_image');

// Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'color-block-free' ),
      'description' => __( 'Controls the basic settings for the theme.', 'color-block-free' ),
  ) );
  $wp_customize->add_panel( 'design_settings', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Design Settings', 'color-block-free' ),
      'description' => __( 'Controls the basic design settings for the theme.', 'color-block-free' ),
  ) ); 
  $wp_customize->add_panel( 'color_choices', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Color Choices', 'color-block-free' ),
      'description' => __( 'Controls the color settings for the theme.', 'color-block-free' ),
  ) ); 

  // Assign sections to panels

  $wp_customize->get_section('title_tagline')->panel = 'general_settings';      
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->priority = 1000;


// GENERAL SETTINGS PANEL ........................................ //


// DESIGN SETTINGS PANEL ........................................ //

  // Add Custom Logo Settings

  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','color-block-free'), 
    'panel'      => 'design_settings',
    'priority'   => 20
  ) );  
  $wp_customize->add_setting(
      'colorblock_logo',
      array(
          'default'         => get_template_directory_uri() . '/images/logo.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'color-block-free' ),
               'section'    => 'custom_logo',
               'settings'   => 'colorblock_logo',
               'context'    => 'colorblock-custom-logo' 
           )
       )
   ); 


// SPOT 1 IMAGE

  $wp_customize->add_section( 'homepage_images' , array(
    'title'      => __('Homepage Image Areas','color-block-free'), 
    'panel'      => 'design_settings',
    'priority'   => 20
  ) );  
  $wp_customize->add_setting(
      'colorblock_spot1',
      array(
          'default'         => get_template_directory_uri() . '/images/spot1.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot1_image',
           array(
               'label'      => __( 'Change Spot 1 Image', 'color-block-free' ),
               'section'    => 'homepage_images',
               'settings'   => 'colorblock_spot1',
               'context'    => 'colorblock-spot1-image' 
           )
       )
   ); 

  // SPOT 1 HEADLINE

  $wp_customize->add_setting(
      'colorblock_spot1_headline',
      array(
          'default'           => __( 'Spot 1 Headline', 'color-block-free' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot1_headline_text',
            array(
                'label'          => __( 'Spot 1 Headline', 'color-block-free' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot1_headline',
                'type'           => 'text'
            )
        )
   ); 

// SPOT 1 IMAGE LINK

  $wp_customize->add_setting(
      'colorblock_spot1_link',
      array(
          'default'           => __( 'http://', 'color-block-free' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot1_link',
            array(
                'label'          => __( 'What URL should the Spot 1 headline link to?', 'color-block-free' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot1_link',
                'type'           => 'text'
            )
        )
   ); 

// SPOT 2 IMAGE

  $wp_customize->add_setting(
      'colorblock_spot2',
      array(
          'default'         => get_template_directory_uri() . '/images/spot2.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot2_image',
           array(
               'label'      => __( 'Change Spot 2 Image', 'color-block-free' ),
               'section'    => 'homepage_images',
               'settings'   => 'colorblock_spot2',
               'context'    => 'colorblock-spot2-image' 
           )
       )
   );

// SPOT 2 IMAGE LINK

  $wp_customize->add_setting(
      'colorblock_spot2_link',
      array(
          'default'           => __( 'http://', 'color-block-free' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot2_link',
            array(
                'label'          => __( 'What URL should the Spot 2 image link to?', 'color-block-free' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot2_link',
                'type'           => 'text'
            )
        )
   ); 

// SPOT 3 IMAGE

  $wp_customize->add_setting(
      'colorblock_spot3',
      array(
          'default'         => get_template_directory_uri() . '/images/spot3.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot3_image',
           array(
               'label'      => __( 'Change Spot 3 Image', 'color-block-free' ),
               'section'    => 'homepage_images',
               'settings'   => 'colorblock_spot3',
               'context'    => 'colorblock-spot3-image' 
           )
       )
   );

// SPOT 3 IMAGE LINK

  $wp_customize->add_setting(
      'colorblock_spot3_link',
      array(
          'default'           => __( 'http://', 'color-block-free' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot3_link',
            array(
                'label'          => __( 'What URL should the Spot 3 image link to?', 'color-block-free' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot3_link',
                'type'           => 'text'
            )
        )
   ); 

// SPOT 4 IMAGE

  $wp_customize->add_setting(
      'colorblock_spot4',
      array(
          'default'         => get_template_directory_uri() . '/images/spot4.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot4_image',
           array(
               'label'      => __( 'Change Spot 4 Image', 'color-block-free' ),
               'section'    => 'homepage_images',
               'settings'   => 'colorblock_spot4',
               'context'    => 'colorblock-spot4-image' 
           )
       )
   );

// SPOT 4 IMAGE LINK

  $wp_customize->add_setting(
      'colorblock_spot4_link',
      array(
          'default'           => __( 'http://', 'color-block-free' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot4_link',
            array(
                'label'          => __( 'What URL should the Spot 4 image link to?', 'color-block-free' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot4_link',
                'type'           => 'text'
            )
        )
   ); 

// SPOT 5 IMAGE

  $wp_customize->add_setting(
      'colorblock_spot5',
      array(
          'default'         => get_template_directory_uri() . '/images/spot5.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot5_image',
           array(
               'label'      => __( 'Change Spot 5 Image', 'color-block-free' ),
               'section'    => 'homepage_images',
               'settings'   => 'colorblock_spot5',
               'context'    => 'colorblock-spot5-image' 
           )
       )
   );

// SPOT 5 IMAGE LINK

  $wp_customize->add_setting(
      'colorblock_spot5_link',
      array(
          'default'           => __( 'http://', 'color-block-free' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot5_link',
            array(
                'label'          => __( 'What URL should the Spot 5 image link to?', 'color-block-free' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot5_link',
                'type'           => 'text'
            )
        )
   ); 


// COLOR CHOICES PANEL ........................................ //


// Text Colors

  $wp_customize->add_section( 'text_colors' , array(
    'title'      => __('Text Colors','color-block-free'), 
    'panel'      => 'color_choices',
    'priority'   => 20    
  ) );

// Homepage Text Color

  $wp_customize->add_setting(
      'homepage_text_color',
      array(
          'default'         => '#FFFFFF',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_homepage_text_color',
           array(
               'label'      => __( 'Homepage Text Color', 'color-block-free' ),
               'section'    => 'text_colors',
               'settings'   => 'homepage_text_color' 
           )
       )
   );

  
  // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','color-block-free'), 
    'panel'      => 'design_settings',
    'priority'   => 2000    
  ) );  
  $wp_customize->add_setting(
      'colorblock_custom_css',
      array(          
          'sanitize_callback' => 'sanitize_textarea'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'          => __( 'Add custom CSS here', 'color-block-free' ),
                'section'        => 'custom_css_field',
                'settings'       => 'colorblock_custom_css',
                'type'           => 'textarea'
            )
        )
   );

}
  
add_action( 'customize_register', 'colorblock_customize_register' );

// Call the custom css into the header

$defaults = array(
  'wp-head-callback'       => 'colorblock_style_header'
);
add_theme_support( 'custom-header', $defaults );

// Callback function for updating styles

function colorblock_style_header() {

   ?>

<style type="text/css">

.homepage p,
.homepage h1,
.homepage h3,
.homepage p a,
.homepage a,
.homepage h1 a,
.homepage h3 a,
.homepage .fa,
.homepage button {
  color: <?php echo get_theme_mod('homepage_text_color'); ?>;
}

.homepage button {
  border-color: <?php echo get_theme_mod('homepage_text_color'); ?>;
}

  <?php if( get_theme_mod('colorblock_custom_css') != '' ) {
    echo get_theme_mod('colorblock_custom_css');
  } ?>

</style>

<?php 

}

// Add theme support for Custom Backgrounds

$defaults = array(
  'default-color' => '#ffffff',
);
add_theme_support( 'custom-background', $defaults );


// Sanitize text 

function sanitize_text( $text ) {
    
    return sanitize_text_field( $text );

}

// Sanitize textarea 

function sanitize_textarea( $text ) {
    
    return esc_textarea( $text );

}

// Custom js for theme customizer

function colorblock_customizer_js() {
  wp_enqueue_script(
    'colorblock_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'colorblock_customizer_js' );

?>