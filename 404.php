<?php

get_header(); ?>

    <div class="container-1000">

    <div class="section group">
      
      <div class="col span_8_of_12">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Hmm. That page doesn&rsquo;t exist.', 'color-block-free' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'color-block-free' ); ?></p>

					<?php get_search_form(); ?>

				</div>
			</section>

		</div>

	<?php get_sidebar( 'page' ); ?>

	</div>

<?php get_footer(); ?>
