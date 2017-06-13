<?php
/*
	Template Name: Thank You Page
*/

$gracias = get_field('gracias');
$me_comunicare = get_field('me_comunicare');

get_header();
?>
<section class="pree">
  <div id="gradient"></div>
</section>
<section class="contacto">
  <?php get_template_part('template-parts/content', 'menu'); ?>

  <div class="container">
    <div class="row">
      <div class="col col--3-of-16 col--push-4-of-16">
        <div class="head cel">
          <p>contacto</p>
          <div class="lead">
            <h2><?php echo $gracias; ?></h2>
            </br>
            </br>
            <h2><?php echo $me_comunicare; ?></h2>
          </div>

        </div>
      </div>
    </div>





    <div class="datos cel">
      <div class="row">
        <div class="col col--3-of-16 col--push-4-of-16">
          <p>T. 415 153 3623</p><a href="mailto:hola@mariasalazar.mx">
            <p>E. hola@mariasalazar.mx</p></a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
