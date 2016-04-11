<?php get_header(); ?>

<div class="page-topper">

    <?php if( get_theme_mod( 'colorblock_archives' ) != "" ): ?>
        <img src="<?php echo get_theme_mod( 'colorblock_archives' ); ?>" class="spot1-image">
    <?php endif; ?>

</div>

<div class="page-header">
    <div class="page-header-1000">
        <h1><?php wp_title(''); ?></h1>
    </div>   
</div>  

<div class="container-1000">

    <div class="section group">

    <div class="col span_8_of_12">

        <div class="the_content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="archive-byline">
            <p>
                by <?php the_author(); ?> 
                on <?php echo the_time('l, F jS, Y');?>
                in <?php the_category( ', ' ); ?>.
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>            
        </div>

        <p><?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
        <?php endif; ?></p>

        <?php the_excerpt(); ?>

        <p>&nbsp;</p>

        <?php endwhile; else: ?>

        <div class="page-header">
            <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>

        <?php endif; ?>

                <div class="pagination">

                    <?php the_posts_pagination( array( 
                    'mid_size' => 2,
                    'type' => 'list',
                    )); ?>

                </div>

        </div>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

    </div>

    <div class="col span_4_of_12 sidebar">
        <?php get_sidebar( 'blog' ); ?>
    </div>

    </div>

</div>

<?php get_footer(); ?>