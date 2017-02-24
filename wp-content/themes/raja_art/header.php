<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <title><?php wp_title( '', true, 'right' ); ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/style.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Teko:300,400,400i,500,600,700" rel="stylesheet">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>

       <?php do_action('wpml_add_language_selector'); ?>
      <header>
         <a href="#" class="burger-btn"><span class="<?php echo $classMenu; ?>"></span></a>
         <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alr="Raja Art" class="raja-art-logo"></a>
         <ul class="active-menu">
            <li><a href="<?php echo get_page_link(page_id_home);?>"><?php echo __('Accueil', 'raja') ?></a></li>
            <li><a href="<?php echo get_page_link(page_id_group);?>"><?php echo __('Groupe RAJA', 'raja') ?></a></li>
            <li><a href="<?php echo get_page_link(page_id_gallery);?>"><?php echo __('Galerie', 'raja') ?></a></li>
            <li><a href="<?php echo get_page_link(page_id_artists);?>"><?php echo __('Artistes', 'raja') ?></a></li>
            <li><a href="<?php echo get_page_link(page_id_actuality);?>"><?php echo __('Actualité et presse', 'raja') ?></a></li>
            <li><a href="<?php echo get_page_link(page_id_contact);?>"><?php echo __('Contact', 'raja') ?></a></li>
         </ul>
      </header>
