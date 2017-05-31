<?php
/*
	Template Name: Contacto Page
*/

// Custom fields

// $nombre_3 = get_field('nombre_3');


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
    <form>
      <input type="text" name="name" placeholder="Nombre">
      <input type="email" name="email" placeholder="Correo Electronico">
      <textarea placeholder="Mensaje"></textarea>
      <input type="submit" value="Enviar">
    </form>
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
