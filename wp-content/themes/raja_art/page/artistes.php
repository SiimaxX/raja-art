<?php /* Template Name: Artistes */ ?>

<?php get_header(); ?>

<div class="artiste">
	<div class="wrapper">
		<div class="top-page">
			<h3>Ils exposent chez nous</h3>
		</div>
		<div class="author-list">
			<ul>

				<?php
					$args = array('post_type' => 'artists' , 'orderby'=> 'title' , 'order' => 'ASC');
					$query = new WP_Query($args);
					while($query -> have_posts()) : $query -> the_post();
				?>

				<li>
					<a href="<?php the_permalink(); ?>"><h4 class="big"><span><?php echo(types_render_field( "author-last-name" , array( 'raw' => true) )); ?>&nbsp;</span><?php echo(types_render_field( "author-first-name" , array( 'raw' => true) )); ?></h4></a>
					<img src="<?php echo(types_render_field( "author-thumb" , array( 'raw' => true) )); ?>" class="author-thumb">
				</li>

				<?php endwhile; ?>

			</ul>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>




