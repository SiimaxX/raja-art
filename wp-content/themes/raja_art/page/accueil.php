<?php /* Template Name: Page d'accueil */ ?>

<?php get_header(); ?>


	<div class="top-cover">
		<div class="content-cover">
			<h1>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-full.svg" alt="La Collection RAJA Art" class="logo-home">
			</h1>
			<a href="<?php echo get_page_link(page_id_gallery);?>" class="cta">Voir la galerie</a>
		</div>
		<?php

			$file = get_field('background-video');

		?>
		<video src="<?php echo $file['url']; ?>" autoplay loop preload="none" class="video-home"></video>
	</div>
	<div class="wrapper">
		<div class="citation">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/citation.png" class="picto-citation">
			<?php if(get_field('citation')): ?>

				<?php while(has_sub_field('citation')): ?>
					<div>
						<p><?php the_sub_field('citation-ligne'); ?></p>
					</div>
				<?php endwhile; ?>

			<?php endif; ?>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/citation2.png" class="picto-citation2">
		</div>
	</div>
	<div class="block-dk">
		<div class="wrapper">
			<div class="photo-dk">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-dk.jpg">
			</div>
			<div class="title-dk">
				<h5>Danièle Kapel-Marcovici</h5>
				<h5 class="h5-brown">Présidente Directrice Générale du groupe RAJA</h5>
			</div>
			<p class="text-intro">C’est un immense plaisir pour moi de dévoiler la collection d’art contemporain, <strong>RAJA’ Art</strong>, installée au siège européen du Groupe près de Roissy. Cet événement marque d’une pierre blanche l’inauguration des espaces rénovés pour y accueillir la collection enrichie de nouvelles acquisitions. La collection exposée dans des conditions « muséales » est également valorisée par une scénographie créative.<br/><br/>Il y a une vingtaine d’années, j’ai découvert l’intérêt des artistes pour les matériaux d’emballage et commencé la collection <strong>RAJA’ Art</strong>, qui compte aujourd’hui une centaine d’œuvres : peintures, sculptures, photographies, installations et vidéos, créées par des artistes reconnus ou émergents, français et internationaux.</p>
			<a href="" class="cta read-less cta-brown">Fermer</a>
			<p class="text-full">La collection RAJA’ Art est unique, car elle est centrée sur le thème de l’emballage, en pleine cohérence avec notre cœur de métier et l’univers de RAJA, leader européen de la distribution d’emballages, de fournitures et d’équipements pour les entreprises.<br/><br/>Chacune des œuvres de la collection est en lien avec les matériaux d’emballage : bois, papier, carton ondulé, polyéthylène,  celle, ou avec la représentation des emballages eux- mêmes : palettes, rubans adhésifs, sachets, caisses en carton,  lms à bulle... Certaines œuvres ont été réalisées à partir de ces matériaux, d’autres s’en inspirent, sublimant les supports d’emballages en les transposant en marbre, bois, bronze, métal, plastique, céramique,...<br/><br/> Cette collection est, depuis le début, dédiée aux collaboratrices et collaborateurs de l’entreprise, qui vivent et travaillent quotidiennement en contact avec les œuvres exposées. L’art contribue à stimuler les esprits. C’est une ouverture sur le monde qui développe la capacité à rêver et invite aux échanges, à la ré exion et à l’émotion. Le travail des artistes à travers leurs œuvres donne également de la noblesse aux matériaux que nous utilisons tous les jours.<br/><br/>Comme à la Fondation Villa Datris que j’ai créée en 2010 à L’Isle-sur-la-Sorgue et dont c’est la vocation, je souhaite que l’art contemporain soit accessible à tous.<br/><br/>Ainsi, la collection RAJA’ Art fédère les collaborateurs autour de valeurs communes : créativité, solidarité et engagement.</p>
			<a href="" class="cta read-more cta-brown"><?php echo __('Lire la suite', 'raja') ?></a>
		</div>
	</div>
	<div class="last-acquisition">
		<h5>Nos dernières acquisitions :</h5>
		<div class="container">
			<div class="row">

				<?php
					$args = array('post_type' => 'works', 'posts_per_page' => 3,);
					$query = new WP_Query($args);
					while($query -> have_posts()) : $query -> the_post();
				?>

					<a href="<?php the_permalink(); ?>" class="thumb-work col-md-4 col-sm-4">
						<div class="img-thumb">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</div>
						<div class="infos-work-zone">
							<div class="infos-work">
								<h4><?php echo(types_render_field( "author-first-name" , array( 'raw' => true) )); ?>&nbsp;<span><?php echo(types_render_field( "author-last-name" , array( 'raw' => true) )); ?></span></h4>
								<div class="work-name"><?php the_title(); ?></div>
							</div>
						</div>
					</a>
				<?php endwhile; ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
