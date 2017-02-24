<?php get_header(); ?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="blog-page">
					<div class="top-page">
						<h3><?php echo get_the_title(); ?></h3>
						<h5><?php echo(types_render_field( "sub-title" , array( 'raw' => true) )); ?></h5>
					</div>

					<?php
						$cover = types_render_field( "cover", array( 'raw' => true ) );
					?>

					<?php if (!empty($cover)){ ?>
						<div class="cover-article">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
					<?php } ?>
					<div class="content-article">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		
<?php get_footer(); ?>