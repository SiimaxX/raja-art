<?php get_header(); ?>

	<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="fiche-oeuvre">
			<div class="wrapper">
				<div class="top-page">
					<h4 class="big anim-in"><?php echo(types_render_field( "author-first-name" , array( 'raw' => true) )); ?>&nbsp;<span><?php echo(types_render_field( "author-last-name" , array( 'raw' => true) )); ?></span></h4>
					<h3 class="little anim-in"><?php the_title(); ?></h3>
					<p class="anim-in"><?php echo(types_render_field( "work-year" , array( 'raw' => true) )); ?></p>
				</div>
				<div class="work-show-zone">
					<img src="<?php echo(types_render_field( "main-picture" , array( 'raw' => true) )); ?>" class="main-display">
					<img src="<?php echo(types_render_field( "add1-picture" , array( 'raw' => true) )); ?>" class="add1-display hidden">
					<img src="<?php echo(types_render_field( "add2-picture" , array( 'raw' => true) )); ?>" class="add2-display hidden">
				</div>
				<div class="little-thumbnails">
					<ul>
						<?php 

					      $image = types_render_field('add1-picture');

					      if( !empty($image) ): ?>

					      	<li><a href="" class="btn-main-display"><img src="<?php echo(types_render_field( "main-picture" , array( 'raw' => true) )); ?>"/></a></li>
					        <li><a href="" class="btn-add1-display"><img src="<?php echo(types_render_field( "add1-picture" , array( 'raw' => true) )); ?>"/></a></li>

					    <?php endif; ?>

					    <?php 

					      $image = types_render_field('add2-picture');

					      if( !empty($image) ): ?>

					        <li><a href="" class="btn-add2-display"><img src="<?php echo(types_render_field( "add2-picture" , array( 'raw' => true) )); ?>"/></a></li>

					    <?php endif; ?>
					</ul>
				</div>
				<div class="desc-work">
					<p><?php echo(types_render_field( "work-description" , array( 'raw' => false) )); ?></p>
				</div>
				<p><?php echo(types_render_field( "infos-artist" , array( 'raw' => false) )); ?></p>
				<a href="<?php echo(types_render_field( "author-url" , array( 'raw' => true) )); ?>" class="more">En savoir plus sur <?php echo(types_render_field( "author-first-name" , array( 'raw' => true) )); ?>&nbsp;<?php echo(types_render_field( "author-last-name" , array( 'raw' => true) )); ?></a>
				<div class="same-author">
					<div class="container">
						<div class="row">

							<?php 

							// get the custom post type's taxonomy terms
							 
							$custom_taxterms = wp_get_object_terms( $post->ID, 'artist-name', array('fields' => 'ids') );
							// arguments
							$args = array(
							'post_type' => 'works',
							'post_status' => 'publish',
							'posts_per_page' => 3, // you may edit this number
							'orderby' => 'rand',
							'tax_query' => array(
							    array(
							        'taxonomy' => 'artist-name',
							        'field' => 'id',
							        'terms' => $custom_taxterms
							    )
							),
							'post__not_in' => array ($post->ID),
							);
							$related_items = new WP_Query( $args );
							// loop over query
							if ($related_items->have_posts()) : ?>

							<p>Du même artiste :</p>

							<?php while ( $related_items->have_posts() ) : $related_items->the_post();
							?>

							    <a href="<?php the_permalink(); ?>" class="thumb-work col-md-4 col-sm-4">
									<div class="img-thumb">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>">
									</div>
									<div class="infos-work-zone">
										<div class="infos-work">
											<div class="work-name"><?php the_title(); ?></div>
										</div>
									</div>
								</a>

							<?php
							endwhile;
							endif;
							// Reset Post Data
							wp_reset_postdata();
							?>

						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; endif; ?>
		
<?php get_footer(); ?>