<?php /* Template Name: Galerie */ ?>

<?php get_header(); ?>

<div class="galerie">
	<div class="wrapper">
		<div class="top-page">
			<h3>L'art et l'emballage</h3>
			<p class="text-intro">
				Que ce soit par goût ou par nécessité, les artistes ont, depuis l’époque moderne, volontiers eu recours aux matériaux de récupération, notamment ceux issus de l’univers de l’emballage et du transport. Dès le XIXe siècle, on voit apparaître des huiles sur carton - support moins onéreux que la toile, permettant de rapides pochades sur le vif.
				<br/><br/>Au XXe siècle, la notion de réemploi, de récupération, devient prédominante et catalyseur d’inspiration. On le voit chez Picasso qui, à partir de 1912, abandonne la sculpture traditionnelle et commence sa série de Guitares, assemblages innovants de matériaux « pauvres » : bois, carton,  celle. Il sera ensuite suivi par Henri Laurens et Picabia, qui composeront à leur tour des assemblages dans le même esprit.
			</p>
			<p class="text-full">Plus tard, dans la lignée des ready-made de Marcel Duchamp, Warhol impose dans les années 1960 ses cartons de lessive Brillo Box et autres conditionnements de transport pour les Campbell’s Soup ou les Kellogg’s Corn Flakes qu’il érige en œuvre d’art. Le packaging est alors perçu comme une pratique artistique à part entière, et Warhol invite le spectateur à changer de regard sur ces cartons destinés au transport, puis au rebut. Ce changement de perception est tel qu’ils basculent ainsi du low art au high art, des arts modestes au grand art, de l’utilitaire au créatif via le pop art. Réalisée entre 1974 et 1987, la série des Times Capsules de Warhol va plus loin encore, avec une surprenante séquence de 612 cartons de déménagement, remplis de souvenirs personnels divers de l’artiste, classés méthodiquement par thématiques, et ensuite fermés et envoyés dans un dépôt.</p>
			<a href="" class="cta read-less cta-brown">Fermer</a>
			<a href="" class="cta read-more cta-brown">Lire la suite</a>
		</div>
		<div class="filters filter">
			<?php
				$args = array(
				    'number'     => $number,
				    'orderby'    => $orderby,
				    'order'      => $order,
				    'hide_empty' => $hide_empty,
				    'include'    => $ids
				);
				$product_categories = get_terms( 'works-type', $args );
				$count = count($product_categories);
				if ( $count > 0 ){
				    foreach ( $product_categories as $product_category ) {
				        echo '<a class="tag-collection" data-link="' . $product_category->slug .'" href="' . get_term_link( $product_category ) . '">' . $product_category->name . '</a>';
				    }
				}
			?>
		</div>
	</div>
	<div class="container">
		<div class="row grille-oeuvres">
			<div class="clear"></div>

			<?php
				$args = array('post_type' => 'works');
				$query = new WP_Query($args);
				while($query -> have_posts()) : $query -> the_post();
				$category = wp_get_post_terms( get_the_ID(), 'works-type' );
				$allCate = count($category) - 1;
			?>

				<a href="<?php the_permalink(); ?>" class="thumb-work col-md-4 col-sm-4 <?php $i = 0; while ( $i <= $allCate) {?> article-<?php echo $category[$i]->slug; $i++;} ?>">
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