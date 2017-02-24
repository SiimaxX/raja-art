<?php if ( have_posts() ) { the_post(); rewind_posts(); } ?>

      <?php if ('works' == get_post_type()) { ?>

         <?php include(TEMPLATEPATH . '/page/templates/fiche-oeuvre.php'); ?>

      <?php } elseif('artists' == get_post_type()) { ?>

         <?php include(TEMPLATEPATH . '/page/templates/fiche-artiste.php'); ?>

      <?php } else { ?>

         <?php include(TEMPLATEPATH . '/page/templates/blog-page.php'); ?>

      <?php } ?>