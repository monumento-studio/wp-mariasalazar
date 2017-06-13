<?php
/*
	Template Name: Superballs Page
*/

// Custom fields

// $nombre_3 = get_field('nombre_3');
$titulo_de_la_seccion = get_field('titulo_de_la_seccion');
$descripcion = get_field('descripcion');
$correo_electronico = get_field('correo_electronico');
$imagen_de_la_seccion = get_field('imagen_de_la_seccion');
$informacion = get_field('informacion');

get_header();
?>
<section class="pree">
  <div id="gradient"></div>
</section>
<section class="superballs">
  <?php get_template_part('template-parts/content', 'menu'); ?>
  <div class="container">
    <div class="row">
      <div class="col col--3-of-16 col--push-3-of-16">
        <div class="lead cel">
          <h2><?php echo $titulo_de_la_seccion; ?></h2>
        </div>
      </div>
    </div>
    <div class="imagen">
      <div class="row">
        <div class="col col--5-of-16 col--push-3-of-16">
          <div class="text cel">
            <p><?php echo $descripcion; ?></p>
            <div class="line"></div>
            <p><?php echo $informacion; ?> <a href="mailto:<?php echo $correo_electronico; ?>"><?php echo $correo_electronico; ?> </a></p>
          </div>
        </div>
        <div class="col col--6-of-16 col--push-2-of-16 float-right">
          <div class="img">
            <?php if ( !empty($imagen_de_la_seccion) ) : ?>
              <div class="maria"><img src="<?php echo $imagen_de_la_seccion['url']; ?>" alt="<?php echo $imagen_de_la_seccion['alt']; ?>"></div>
            <?php endif; ?>
            <div class="cuadro">
              <p><span class="left">Cacao</span>-<span class="right">COCO</span></p>
              <p><span class="left">DáTiL</span>-<span class="right">VAINILLA</span></p>
              <p><span class="left">SAL</span>DE<span class="right">MAR</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
