<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="contact">
	<div class="wrapper">
		<div class="top-page">
			<h3>Contactez-nous</h3>
			<p><strong>Une info ? Une visite ? Un projet ?</strong><br/>N'hésitez pas à nous joindre à l'aide des coordonnées ou du formulaire suivant</p>
			<div class="coord">
				<p><img src=""><strong>contact@raja.fr</strong></p>
				<p><img src=""><strong>01.64.66.34.87</strong></p>
			</div>
		</div>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
		      		<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
		
<?php get_footer(); ?>

