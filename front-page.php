<?php get_header(); ?>

<div class="homepage">     
<div class="container-1200">

<!-- SPOT 1 TOP PHOTO AND HEADLINE -->

<div class="spot1-wrap">

  <?php if( get_theme_mod( 'colorblock_spot1' ) != "" ): ?>
    <img src="<?php echo get_theme_mod( 'colorblock_spot1' ); ?>" class="spot1-image">
  <?php endif; ?>


  <div class="spot1-headline-text">
    <h1><a href="<?php echo get_theme_mod( 'colorblock_spot1_link' ); ?>"><?php echo get_theme_mod('colorblock_spot1_headline'); ?></a></h1>
  </div>

</div>



<!-- SPOT 2 SPOT 3 TWO HALF PHOTOS -->

  <div class="section group">
    <div class="col-home span_6_of_12-home">
      <?php if( get_theme_mod( 'colorblock_spot2' ) != "" ): ?>
        <a href="<?php echo get_theme_mod( 'colorblock_spot2_link' ); ?>"><img src="<?php echo get_theme_mod( 'colorblock_spot2' ); ?>" class="spot2-image"></a>
      <?php endif; ?>
    </div>
    <div class="col-home span_6_of_12-home">
      <?php if( get_theme_mod( 'colorblock_spot3' ) != "" ): ?>
        <a href="<?php echo get_theme_mod( 'colorblock_spot3_link' ); ?>"><img src="<?php echo get_theme_mod( 'colorblock_spot3' ); ?>" class="spot3-image"></a>
      <?php endif; ?>
    </div>
  </div> 

<!-- SPOT 4 CALL TO ACTION BAR -->

  <div class="section group">
    <div class="cta-bar">

      <?php if ( ! dynamic_sidebar( 'front-bar') ): ?>
        <h3>Call to Action Bar Setup</h3>
        <p>Set up your call to action bar with a widget. Go to Appearance > Widgets and add the widget to the "Call to Action Bar" section.</p>
      <?php endif; ?>

    </div>
  </div>

<!-- SPOT 5 SPOT 6 TWO HALF PHOTOS -->

  <div class="section group">
    <div class="col-home span_6_of_12-home">
      <?php if( get_theme_mod( 'colorblock_spot4' ) != "" ): ?>
        <a href="<?php echo get_theme_mod( 'colorblock_spot4_link' ); ?>"><img src="<?php echo get_theme_mod( 'colorblock_spot4' ); ?>" class="spot4-image"></a>
      <?php endif; ?>
    </div>
    <div class="col-home span_6_of_12-home">
      <?php if( get_theme_mod( 'colorblock_spot5' ) != "" ): ?>
        <a href="<?php echo get_theme_mod( 'colorblock_spot5_link' ); ?>"><img src="<?php echo get_theme_mod( 'colorblock_spot5' ); ?>" class="spot5-image"></a>
      <?php endif; ?>
    </div>
  </div> 

<!-- SPOT 7 SOCIAL ICONS BAR -->

  <div class="homepage-social-icons">
    <?php if ( ! dynamic_sidebar( 'homepage-social-icons') ): ?>
        <h3>Social Icons Bar Setup</h3>
        <p>Show your social media icons here with a widget. Go to Appearance > Widgets and add the "Homepage Social Icons" widget to the "Homepage Social Icons" section.</p>
      <?php endif; ?>
  </div>

<!-- SPOT 8 MOST RECENT BLOG POST AND FEATURED IMAGE -->

  <div>

      <!-- WP LOOP -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.', 'color-block' ); ?></p>

      <?php endif; ?> 

      <!-- show latest blog post -->

      <?php
      $args = array( 'posts_per_page' => 1,
                      'orderby' => 'date',
                      'post__in'  => get_option( 'sticky_posts' ),
                      'ignore_sticky_posts' => 1 );
      $postslist = get_posts( $args );
      foreach ( $postslist as $post ) :
      setup_postdata( $post ); ?> 

        <div class="most-recent-post clearfix">
          <h3><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?>
          </p>
        </div>

      <?php
      endforeach; 
      wp_reset_postdata();
      ?>

  </div>

</div><!-- end of 1200 container -->
</div>

<?php get_footer(); ?>