<?php
/* Template Name: Right Sidebar
*/
?>
<?php get_header(); ?>

<div class="page-topper">
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail(); ?>
  <?php endif; ?>
</div>


<div class="page-header">
  <div class="page-header-1000">
    <h1><?php the_title(); ?></h1>
  </div>   
</div>  

<div class="container-1000">
  <div class="section group">

    <div class="col span_8_of_12">

      <!-- WP LOOP -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="the_content">
        <?php the_content(); ?>
      </div>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'color-block-free' ); ?></p>
      <?php endif; ?> 

      </div>

    <div class="col span_4_of_12 sidebar">
      <?php get_sidebar( 'page' ); ?>
    </div>

    </div>
</div>

<?php get_footer(); ?>
