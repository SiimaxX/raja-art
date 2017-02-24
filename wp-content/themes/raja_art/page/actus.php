<?php /* Template Name: Actualités */ ?>

<?php get_header(); ?>

<div class="actus">
	<div class="fil-actus">
		<div class="container">
			<div class="row">
				<?php
					$args = array('post_type' => 'post',
						
						'tax_query' => array(
							    array(
							        'taxonomy' => 'article-type',
							        'field' => 'id',
							        'terms' => 21
							    )
							),
						);

					$query = new WP_Query($args);
					while($query -> have_posts()) : $query -> the_post();
				?>
					<div class="article">
						<div class="thumb-article col-md-5">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="infos-article col-md-7">
							<div class="infos-content">
								<p class="blog-cat"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
								<h4 class="big"><?php echo get_the_title(); ?></h4>
								<h5><?php echo(types_render_field( "sub-title" , array( 'raw' => true) )); ?></h5>
								<p class="excerpt-article">
									<?php echo(types_render_field( "excerpt-article" , array( 'raw' => true) )); ?>
								</p>
								<a href="<?php the_permalink(); ?>" class="cta">Voir l'article</a>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_query(); ?>
				<div class="list-short-article">
					<?php
						$args = array('post_type' => 'post',
							
							'tax_query' => array(
								    array(
								        'taxonomy' => 'article-type',
								        'field' => 'id',
								        'terms' => 22
								    )
								),
							);

						$query = new WP_Query($args);
						while($query -> have_posts()) : $query -> the_post();
					?>
						<div class="article short col-md-6">
							<div class="item">
								<div class="thumb-article">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								</div>
								<div class="infos-article">
									<div class="infos-content">
										<p class="blog-cat"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
										<h4 class="big"><?php echo get_the_title(); ?></h4>
										<h5><?php echo(types_render_field( "sub-title" , array( 'raw' => true) )); ?></h5>
										<p class="excerpt-article">
											<?php echo(types_render_field( "excerpt-article" , array( 'raw' => true) )); ?>
										</p>
										<a href="<?php the_permalink(); ?>" class="cta">Voir l'article</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>