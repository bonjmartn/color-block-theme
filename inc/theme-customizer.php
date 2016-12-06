<?php

function colorblock_customize_register( $wp_customize ) {


  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'color-block');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'color-block');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'color-block');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
  $wp_customize->get_control('header_textcolor')->section = 'header_text_styles'; 
  $wp_customize->get_control('header_textcolor')->label = __('Site Title Color', 'color-block');
  $wp_customize->get_setting('header_textcolor')->transport = 'postMessage'; 

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Home and Blog Pages', 'color-block');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Home and Blog Pages', 'color-block');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'color-block');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'color-block');  


  // Customize Background Settings

  $wp_customize->get_section('background_image')->title = __('Background Styles', 'color-block');  
  $wp_customize->get_control('background_color')->section = 'background_image'; 

  $wp_customize->remove_control('header_image');

// Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'color-block' ),
      'description' => __( 'Controls the basic settings for the theme.', 'color-block' ),
  ) );
  $wp_customize->add_panel( 'design_settings', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Design Settings', 'color-block' ),
      'description' => __( 'Controls the basic design settings for the theme.', 'color-block' ),
  ) ); 
  $wp_customize->add_panel( 'color_choices', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Color Choices', 'color-block' ),
      'description' => __( 'Controls the color settings for the theme.', 'color-block' ),
  ) ); 
  $wp_customize->add_panel( 'typography_settings', array(
      'priority' => 40,
      'theme_supports' => '',
      'title' => __( 'Typography', 'color-block' ),
      'description' => __( 'Controls the fonts for the theme.', 'color-block' ),
  ) ); 

  // Assign sections to panels

  $wp_customize->get_section('title_tagline')->panel = 'general_settings';      
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->priority = 1000;


// GENERAL SETTINGS PANEL ........................................ //

  $wp_customize->add_section( 'archives_topper' , array(
    'title'      => __('Archives Large Photo','color-block'), 
    'panel'      => 'general_settings',
    'priority'   => 20
  ) );
   $wp_customize->add_setting(
      'colorblock_archives',
      array(
          'default'         => get_template_directory_uri() . '/images/colorblock-archives.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'archives_topper',
           array(
               'label'      => __( 'Choose a large photo for the top of the Blog index and other Archives pages', 'color-block' ),
               'section'    => 'archives_topper',
               'settings'   => 'colorblock_archives',
               'context'    => 'colorblock-custom-archives' 
           )
       )
   );



// DESIGN SETTINGS PANEL ........................................ //

  // Add Custom Logo Settings

  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','color-block'), 
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
               'label'      => __( 'Change Logo', 'color-block' ),
               'section'    => 'custom_logo',
               'settings'   => 'colorblock_logo',
               'context'    => 'colorblock-custom-logo' 
           )
       )
   ); 


// SPOT 1 IMAGE

  $wp_customize->add_section( 'homepage_images' , array(
    'title'      => __('Homepage Image Areas','color-block'), 
    'panel'      => 'design_settings',
    'priority'   => 20
  ) );  
  $wp_customize->add_setting(
      'colorblock_spot1',
      array(
          'default'         => get_template_directory_uri() . '/images/colorblock-hometop.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot1_image',
           array(
               'label'      => __( 'Change Spot 1 Image', 'color-block' ),
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
          'default'           => __( 'Spot 1 Headline', 'color-block' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot1_headline_text',
            array(
                'label'          => __( 'Spot 1 Headline', 'color-block' ),
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
          'default'           => __( 'http://', 'color-block' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot1_link',
            array(
                'label'          => __( 'What URL should the Spot 1 headline link to?', 'color-block' ),
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
          'default'         => get_template_directory_uri() . '/images/colorblock2.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot2_image',
           array(
               'label'      => __( 'Change Spot 2 Image', 'color-block' ),
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
          'default'           => __( 'http://', 'color-block' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot2_link',
            array(
                'label'          => __( 'What URL should the Spot 2 image link to?', 'color-block' ),
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
          'default'         => get_template_directory_uri() . '/images/colorblock3.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot3_image',
           array(
               'label'      => __( 'Change Spot 3 Image', 'color-block' ),
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
          'default'           => __( 'http://', 'color-block' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot3_link',
            array(
                'label'          => __( 'What URL should the Spot 3 image link to?', 'color-block' ),
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
          'default'         => get_template_directory_uri() . '/images/colorblock4.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot4_image',
           array(
               'label'      => __( 'Change Spot 4 Image', 'color-block' ),
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
          'default'           => __( 'http://', 'color-block' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot4_link',
            array(
                'label'          => __( 'What URL should the Spot 4 image link to?', 'color-block' ),
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
          'default'         => get_template_directory_uri() . '/images/colorblock5.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'spot5_image',
           array(
               'label'      => __( 'Change Spot 5 Image', 'color-block' ),
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
          'default'           => __( 'http://', 'color-block' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'spot5_link',
            array(
                'label'          => __( 'What URL should the Spot 5 image link to?', 'color-block' ),
                'section'        => 'homepage_images',
                'settings'       => 'colorblock_spot5_link',
                'type'           => 'text'
            )
        )
   ); 


// COLOR CHOICES PANEL ........................................ //


// Text Colors

  $wp_customize->add_section( 'text_colors' , array(
    'title'      => __('Text Colors','color-block'), 
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
               'label'      => __( 'Homepage Text Color', 'color-block' ),
               'section'    => 'text_colors',
               'settings'   => 'homepage_text_color' 
           )
       )
   );

// Headings Color

  $wp_customize->add_setting(
      'colorblock_h1_color',
      array(
          'default'         => '#000000',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_h1_color',
           array(
               'label'      => __( 'Headings Color', 'color-block' ),
               'section'    => 'text_colors',
               'settings'   => 'colorblock_h1_color' 
           )
       )
   );

// Paragraph Text Color

  $wp_customize->add_setting(
      'colorblock_p_color',
      array(
          'default'         => '#000000',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_p_color',
           array(
               'label'      => __( 'Paragraph Color', 'color-block' ),
               'section'    => 'text_colors',
               'settings'   => 'colorblock_p_color' 
           )
       )
   );

// Links Color

  $wp_customize->add_setting(
      'colorblock_a_color',
      array(
          'default'         => '#ff1d25',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_a_color',
           array(
               'label'      => __( 'Link Color', 'color-block' ),
               'section'    => 'text_colors',
               'settings'   => 'colorblock_a_color' 
           )
       )
   );

// Homepage Color Blocks

// Call to Action Bar Background Color

  $wp_customize->add_section( 'home_block_colors' , array(
    'title'      => __('Homepage Color Blocks','color-block'), 
    'panel'      => 'color_choices',
    'priority'   => 10    
  ) );

  $wp_customize->add_setting(
      'cta_block_color',
      array(
          'default'         => '#ff1d25',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'block_cta_color',
           array(
               'label'      => __( 'Background color for the Call to Action bar', 'color-block' ),
               'section'    => 'home_block_colors',
               'settings'   => 'cta_block_color' 
           )
       )
   );

// Social Icons Bar Background Color

  $wp_customize->add_section( 'home_block_colors' , array(
    'title'      => __('Homepage Color Blocks','color-block'), 
    'panel'      => 'color_choices',
    'priority'   => 10    
  ) );

  $wp_customize->add_setting(
      'social_block_color',
      array(
          'default'         => '#009245',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'block_social_color',
           array(
               'label'      => __( 'Background color for the Social Icons bar', 'color-block' ),
               'section'    => 'home_block_colors',
               'settings'   => 'social_block_color' 
           )
       )
   );

// Recent Blog Post Background Color

  $wp_customize->add_section( 'home_block_colors' , array(
    'title'      => __('Homepage Color Blocks','color-block'), 
    'panel'      => 'color_choices',
    'priority'   => 10    
  ) );

  $wp_customize->add_setting(
      'blog_block_color',
      array(
          'default'         => '#1b1464',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'block_blog_color',
           array(
               'label'      => __( 'Background color for the blog post area', 'color-block' ),
               'section'    => 'home_block_colors',
               'settings'   => 'blog_block_color' 
           )
       )
   );

// TYPOGRAPHY PANEL ........................................ //

// Heading Fonts

  $wp_customize->add_section( 'custom_h1_fonts' , array(
    'title'      => __('Heading Font','color-block'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) );  
 
$wp_customize->add_setting(
      'colorblock_h1_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_h1_font_type',
            array(
                'label'          => __( 'Headings Font', 'color-block' ),
                'section'        => 'custom_h1_fonts',
                'settings'       => 'colorblock_h1_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Roboto'       => 'Roboto',
                  'Shadows Into Light' => 'Shadows Into Light',
                  'Open Sans'    => 'Open Sans',
                  'Lato'         => 'Lato',
                  'Merriweather' => 'Merriweather',
                  'Covered By Your Grace' => 'Covered By Your Grace',
                  'Lora'         => 'Lora',
                  'Montserrat'   => 'Montserrat',
                  'Raleway'      => 'Raleway',
                  'Source Sans Pro'   => 'Source Sans Pro',
                  'Droid Sans'    => 'Droid Sans',
                  'Oswald'        => 'Oswald'
                )
            )
        )       
   );


 // Paragraph Fonts

   $wp_customize->add_section( 'custom_p_fonts' , array(
    'title'      => __('Paragraph Styles','color-block'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) );  

   $wp_customize->add_setting(
      'colorblock_p_font_size',
      array(
          'default'         => '14px',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_size',
            array(
                'label'          => __( 'Paragraph font size', 'color-block' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'colorblock_p_font_size',
                'type'           => 'select',
                'choices'        => array(
                  '12'   => '12px',
                  '14'   => '14px',
                  '16'   => '16px',
                  '18'   => '18px',
                  '20'   => '20px',
                  '22'   => '22px'
                )
            )
        )       
   ); 

   $wp_customize->add_setting(
      'colorblock_p_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_type',
            array(
                'label'          => __( 'Paragraph font', 'color-block' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'colorblock_p_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Roboto'       => 'Roboto',
                  'Open Sans'    => 'Open Sans',
                  'Lato'         => 'Lato',
                  'Merriweather' => 'Merriweather',
                  'Covered By Your Grace' => 'Covered By Your Grace',
                  'Lora'         => 'Lora',
                  'Montserrat'   => 'Montserrat',
                  'Raleway'      => 'Raleway',
                  'Source Sans Pro'   => 'Source Sans Pro',
                  'Droid Sans'    => 'Droid Sans',
                  'Oswald'        => 'Oswald'
                )
            )
        )       
   );

  
  // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','color-block'), 
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
                'label'          => __( 'Add custom CSS here', 'color-block' ),
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

h1,
h2,
h3,
h4,
h5,
h6,
.homepage h1,
.homepage h1 a,
.homepage h3,
.homepage h3 a {
	font-family: <?php echo get_theme_mod('colorblock_h1_font_type'); ?>;
}

.the_content h1,
.the_content h1 a,
.the_content h2,
.the_content h2 a,
.the_content h3,
.the_content h3 a,
.the_content h4,
.the_content h4 a,
.the_content h5,
.the_content h5 a,
.the_content h6,
.the_content h6 a {
  color: <?php echo get_theme_mod('colorblock_h1_color'); ?>;
}

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

a,
a:visited {
  font-family: <?php echo get_theme_mod('colorblock_p_font_type'); ?>;
  color: <?php echo get_theme_mod('colorblock_a_color'); ?>;
}

.cta-bar {
  background-color: <?php echo get_theme_mod('cta_block_color'); ?>;
}

.homepage button {
  border-color: <?php echo get_theme_mod('homepage_text_color'); ?>;
  background-color: <?php echo get_theme_mod('cta_block_color'); ?>;
}

.homepage button:hover {
  color: <?php echo get_theme_mod('cta_block_color'); ?>;
}

.homepage-social-icons {
  background-color: <?php echo get_theme_mod('social_block_color'); ?>;
}

.most-recent-post {
  background-color: <?php echo get_theme_mod('blog_block_color'); ?>;
}

.the_content p {
	font-size: <?php echo get_theme_mod('colorblock_p_font_size') . 'px'; ?>;
	color: <?php echo get_theme_mod('colorblock_p_color'); ?>;
	font-family: <?php echo get_theme_mod('colorblock_p_font_type'); ?>;
}

li {
  font-size: <?php echo get_theme_mod('colorblock_p_font_size') . 'px'; ?>;
  color: <?php echo get_theme_mod('colorblock_p_color'); ?>;
  font-family: <?php echo get_theme_mod('colorblock_p_font_type'); ?>;
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