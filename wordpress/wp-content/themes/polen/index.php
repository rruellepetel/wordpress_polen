<?php

get_header();

wp_head();
 ?>

 <div class="container">
  <div class="row">
      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'secondary', /* identifiant du menu pour WP */
              'menu_class' => 'menu-secondaire',   /* classe css */
              'container' => 'div',            /* élément HTML conteneur */
              'link_before' => '<span>',     /* élément HTML avant le lien */
              'link_after' => '</span>'      /* élément HTML après le lien */
          )
      );
       ?>
    <div class="col-md-12">
      <?php echo do_shortcode("[metaslider id=4]"); ?>
      <img src="<?php echo get_template_directory_uri()?>/static/images/bandeau-blanc.png" alt="" class="bandeau">

      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri()?>/static/images/pep8.png" alt="">
          <h4>Pépinière d'entreprises</h4>
          <p>Hébergement des entreprises innovantes du département</p>
          <a href="#">Infos</a>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri()?>/static/images/tic8.png" alt="">
          <h4>Centre de ressources TIC</h4>
          <p>Un espace dédié aux nouvelles technologies pour les entreprises</p>
          <a href="#">Infos</a>
        </div>
        <div class="col-md-4">
          <img src="<?php echo get_template_directory_uri()?>/static/images/tele8.png" alt="">
          <h4>Le Télécentre SoLozère</h4>
          <p>Un équipement au services des télétravailleurs</p>
          <a href="#">Infos</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h2>Actus Entreprises Innovantes</h2>
          <?php

                $args = array('cat'=> '3');

                $posts = get_posts($args);

                foreach ($posts as $post) {

                    setup_postdata(); ?>

                    <?php the_post_thumbnail() ?>



                    <p><?php the_content() ?></p>



                    <?php

                }

                ?>
        </div>
        <div class="col-md-4">
          <h2>Actus usages des tic en entreprise</h2>
          <?php

                $args = array('cat'=> '4');

                $posts = get_posts($args);

                foreach ($posts as $post) {

                    setup_postdata(); ?>

                    <?php the_post_thumbnail() ?>



                    <p><?php the_content() ?></p>



                    <?php

                }

                ?>
        </div>
        <div class="col-md-4">
          <h2>Actus Télétravail</h2>
          <?php

                $args = array('cat'=> '5');

                $posts = get_posts($args);

                foreach ($posts as $post) {

                    setup_postdata(); ?>

                    <?php the_post_thumbnail() ?>


                    <p><?php the_content() ?></p>



                    <?php

                }

                ?>
        </div>

      </div>



    </div>
<div class="row">
  <h2>Inscription à la Newsletter</h2>
  <input type="text" name="" value="">
  <button type="submit" name="button">Envoyer</button>
  <h2>Agenda</h2>
  <p>Aucun Evenement</p>
  <span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span>
</div>
  </div>















 <?php

get_footer()

  ?>
