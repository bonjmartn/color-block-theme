<?php get_header(); ?>

<div class="page-topper">

  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail(); ?>
  <?php endif; ?>

</div>

     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
      $thumbnail_id = get_post_thumbnail_id(); 
      $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
      $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
      ?>

      <div class="page-header">
        <div class="page-header-1000">
        <h1><?php the_title(); ?></h1>
        </div>   
      </div>      
  


  <div class="container-1000">

  <div class="section group">

    <div class="col span_8_of_12">

      <div class="the_content">

      <?php the_content(); ?>

      <?php
        $defaults = array(
          'before'           => '<p>' . __( 'Pages:', 'color-block-free' ),
          'after'            => '</p>',
          'link_before'      => '',
          'link_after'       => '',
          'next_or_number'   => 'number',
          'separator'        => ' ',
          'nextpagelink'     => __( 'Next page', 'color-block-free' ),
          'previouspagelink' => __( 'Previous page', 'color-block-free' ),
          'pagelink'         => '%',
          'echo'             => 1
        );
       
              wp_link_pages( $defaults );
      ?>
      
      </div>

      <hr>

      <p><em>
      Posted in <?php the_category( ', ' ); ?> on <?php echo the_time('l, F jS, Y');?> <?php the_tags( 'Tagged with: ', ', ', '' ); ?>
      </em></p>

      <hr>
      <?php comments_template(); ?>
      <?php paginate_comments_links() ?>

      <?php endwhile; else: ?>

      <div class="page-header">
      <h1>Oh no!</h1>
      </div>

      <p>No content is appearing for this page!</p>

      <?php endif; ?>

    </div>

    <div class="col span_4_of_12 sidebar">
      <?php get_sidebar( 'blog' ); ?>
    </div>

  </div>

</div>

<?php get_footer(); ?>