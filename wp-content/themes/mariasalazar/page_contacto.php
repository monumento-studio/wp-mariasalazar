<?php
/*
	Template Name: Contacto Page
*/


$contacto = get_field('contacto');


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
          <p><?php echo $contacto; ?></p>
        </div>
      </div>
    </div>

    <form action="https://formspree.io/hola@mariasalazar.mx"
          method="POST">
        <input type="text" name="name" placeholder="Nombre">
        <input type="email" name="_replyto" placeholder="Correo Electronico">
        <textarea name="message" placeholder="Mensaje"></textarea>
        <input type="hidden" name="_next" value="http://localhost:8888/thank-you/" />
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
