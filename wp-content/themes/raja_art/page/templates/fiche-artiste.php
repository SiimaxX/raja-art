<?php get_header(); ?>

	<div class="fiche-artiste">
		<div class="wrapper">
			<div class="top-page">
				<h4 class="big"><?php echo(types_render_field( "author-first-name" , array( 'raw' => true) )); ?>&nbsp;<span><?php echo(types_render_field( "author-last-name" , array( 'raw' => true) )); ?></span></h4>
				<p><?php echo(types_render_field( "birth-and-local" , array( 'raw' => false) )); ?></p>
			</div>
			<div class="author-bio">
				<p><?php echo(types_render_field("author-bio", array() )); ?></p>
			</div>
			<div class="author-links">
				<ul>
					<?php 
					    $author_email = types_render_field("author-email", array());
					    if (!empty($author_email)) {
					?>
					<li><span>Email : </span><?php echo(types_render_field( "author-email" , array( 'raw' => false) )); ?></li>
					<?php
					    } else { 
					    }
					?>

					<?php 
					    $author_blog_name = types_render_field("author-blog-name", array());
					    if (!empty($author_blog_name)) {
					?>
					<li><a href="<?php echo(types_render_field( "author-blog-url" , array( 'raw' => false) )); ?>"><span>Blog : </span><?php echo(types_render_field( "author-blog-name" , array( 'raw' => false) )); ?></a></li>
					<?php
					    } else { 
					    }
					?>

					<?php 
					    $author_website_name = types_render_field("author-website-name", array());
					    if (!empty($author_website_name)) {
					?>
					<li><a href="<?php echo(types_render_field( "author-website-url" , array( 'raw' => false) )); ?>"><span>Site Web : </span><?php echo(types_render_field( "author-website-name" , array( 'raw' => false) )); ?></a></li>
					<?php
					    } else { 
					    }
					?>

					<?php 
					    $author_insta = types_render_field("author-instagram", array());
					    if (!empty($author_insta)) {
					?>
					<li><span>Instagram : </span><?php echo(types_render_field( "author-instagram" , array( 'raw' => false) )); ?></li>
					<?php
					    } else { 
					    }
					?>
				</ul>
			</div>

			<p class="p-center">Exposé(s) chez nous :</p>
			<div class="lightbar"></div>
		</div>
		<div class="container">
			<div class="row">

				<?php
					$authorid = types_render_field("author-id", array());
				?>

				<?php
					$args = array('post_type' => 'works',
						
						'tax_query' => array(
							    array(
							        'taxonomy' => 'artist-name',
							        'field' => 'id',
							        'terms' => $authorid
							    )
							),
						);

					$query = new WP_Query($args);
					while($query -> have_posts()) : $query -> the_post();
				?>

					<a href="<?php the_permalink(); ?>" class="thumb-work col-md-4 col-sm-4">
						<div class="img-thumb">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="infos-work-zone">
							<div class="infos-work">
							</div>
						</div>
					</a>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
		
<?php get_footer(); ?>