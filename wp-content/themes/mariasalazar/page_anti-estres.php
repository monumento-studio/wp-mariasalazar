<?php
/*
	Template Name: Anti-estres Page
*/

// Custom fields

$titulo_de_la_seccion = get_field("titulo_de_la_seccion");
$imagen_1 = get_field("imagen_1");
$descripcion_1 = get_field("descripcion_1");
$descripcion_2 = get_field("descripcion_2");
$texto_antes_de_descripcion_3 = get_field("texto_antes_de_descripcion_3");
$imagen_2 = get_field("imagen_2");
$descripcion_3 = get_field("descripcion_3");
$titulo_2 = get_field("titulo_2");
$descripcion_4 = get_field("descripcion_4");


get_header();
?>

<section class="pree">
  <div id="gradient"></div>
</section>
<section class="antiestres">
  <?php get_template_part('template-parts/content', 'menu'); ?>
  <div class="container">
    <div class="antiestres">
      <div class="row">
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2><?php echo $titulo_de_la_seccion; ?></h2>
          </div>
        </div>
        <div class="col col--5-of-16 col--push-2-of-16">
          <div class="text cel clearfix">
            <p><?php echo $descripcion_1; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="imagen">
      <div class="row">
        <div class="col col--7-of-16">
          <div class="img">
            <?php if ( !empty($imagen_1) ) : ?>
              <img src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>">
            <?php endif; ?>
          </div>
        </div>
        <div class="col col--5-of-16 col--push-1-of-16 col--ab">
          <div class="text cel">
            <p><?php echo $descripcion_2 ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="rocks">
      <div class="row">
        <div class="col col--5-of-16 col--push-3-of-16">
          <div class="text cel">
            <p>— <?echo $texto_antes_de_descripcion_3; ?> —</p>
          </div>
        </div>
        <div class="col col--6-of-16 float">
          <div class="img">
            <?php if ( !empty($imagen_2) ) : ?>
              <img src="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="text-rocks">
      <div class="row">
        <div class="col col--4-of-16 col--push-5-of-16">
          <div class="text cel">
            <p><?php echo $descripcion_3; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="spa">
      <div class="row">
        <div class="col col--4-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2><?php echo $titulo_2 ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="text-spa">
      <div class="row">
        <div class="col col--5-of-16 col--push-4-of-16">
          <div class="text cel">
            <p><?php echo $descripcion_4; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
