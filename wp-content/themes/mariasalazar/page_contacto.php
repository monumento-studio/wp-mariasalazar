<?php
/*
	Template Name: Contacto Page
*/

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
        </div>
      </div>
    </div>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>

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
