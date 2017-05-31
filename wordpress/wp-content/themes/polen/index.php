<?php

get_header()

 ?>

 <div class="container">
  <div class="row">
    <div class="col-md-12">
        <?php
            // while(have_posts()):
            //     the_post();
            //     the_content();

    echo do_shortcode("[metaslider id=4]");


            // endwhile
                         ?>
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
