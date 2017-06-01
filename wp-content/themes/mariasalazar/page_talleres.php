<?php
/*
	Template Name: Talleres Page
*/

// Custom fields

$titulo_talleres                    = get_field('titulo_talleres');
$frase_seccion_talleres             = get_field('frase_seccion_talleres');
$descripcion_seccion_talleres       = get_field('descripcion_seccion_talleres');
$imagen_seccion_talleres            = get_field('imagen_seccion_talleres');



get_header();
?>
<section class="pree">
  <div id="gradient"></div>
</section>
<section class="talleres">
  <?php get_template_part('template-parts/content', 'menu'); ?>

  <div class="container">
    <div class="row">
      <div class="col col--3-of-16 col--push-3-of-16">
        <div class="lead cel">
          <h2><?php echo $titulo_talleres; ?></h2>
        </div>
      </div>
    </div>
    <div class="imagen">
      <div class="row clearfix">
        <div class="col col--4-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2><?php echo $frase_seccion_talleres; ?></h2>
          </div>
        </div>
        <div class="col col--6-of-16 col--push-2-of-16 float-right">
          <div class="img">
            <?php if ( !empty($imagen_seccion_talleres) ) : ?>
              <div class="maria"><img src="<?php echo $imagen_seccion_talleres['url']; ?>" alt="<?php echo $imagen_seccion_talleres['alt']; ?>"></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="texto">
      <div class="row">
        <div class="col col--4-of-16 col--push-4-of-16">
          <div class="text cel">
            <p><?php echo $descripcion_seccion_talleres; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="texto">
      <div class="row">
        <div class="col col--4-of-16 col--push-3-of-16">
          <div class="etiqueta"><a>
              <div class="lay cel"><img class="blend" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><span>Más información</span></div></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
