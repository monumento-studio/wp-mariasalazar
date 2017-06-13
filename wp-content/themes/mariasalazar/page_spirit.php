<?php
/*
	Template Name: Spirit Page
*/

// Custom fields

$titulo_de_seccion = get_field('titulo_de_seccion');
$descripcion = get_field('descripcion');
$imagen_1 = get_field('imagen_1');
$texto_1 = get_field('texto_1');
$texto_2 = get_field('texto_2');
$texto_3 = get_field('texto_3');
$beneficios = get_field('beneficios');
$beneficio_1 = get_field('beneficio_1');
$beneficio_2 = get_field('beneficio_2');
$beneficio_3 = get_field('beneficio_3');
$titulo_2 = get_field('titulo_2');
$imagen_2 = get_field('imagen_2');
$descripcion_2 = get_field('descripcion_2');
$descripcion_3 = get_field('descripcion_3');
$cita = get_field('cita');

get_header();
?>

<section class="pree">
  <div id="gradient"></div>
</section>
<section class="spirit">
  <?php get_template_part('template-parts/content', 'menu'); ?>
  <div class="container">
    <div class="nutricion">
      <div class="row">
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2><?php echo $titulo_de_seccion; ?></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="text-nutricion">
      <div class="row">
        <div class="col col--5-of-16 col--push-4-of-16">
          <div class="text cel">
            <p><?php echo $descripcion; ?></p>
            <div class="line"></div>
          </div>
        </div>
        <div class="col col--6-of-16 col--push-1-of-16 float">
          <div class="img">
            <?php if ( !empty($imagen_1) ) : ?>
              <img src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="text-text-nutricion">
      <div class="row">
        <div class="col col--7-of-16 col--push-2-of-16">
          <div class="text cel">
            <p><?php echo $texto_1; ?></p>
            <p class="col--push-4-of-16"><?php echo $texto_2; ?></p>
            <p class="col--push-5-of-16"><?php echo $texto_3; ?></p>
            <div class="col--push-4-of-16 beneficios">
              <div class="row">
                <div class="margin"><span class="cel"><?php echo $beneficios; ?></span>
                  <div class="cuadro cel">
                    <p class="list"><?php echo $beneficio_1; ?></p>
                    <p class="list"><?php echo $beneficio_2; ?></p>
                    <p class="list"><?php echo $beneficio_3; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sesiones">
      <div class="row">
        <div class="col col--7-of-16">
          <div class="img">
            <?php if ( !empty($imagen_2) ) : ?>
              <img src="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
            <?php endif; ?>
            <img src="assets/img/spirit/city-01.jpg" alt="María Salar">
          </div>
        </div>
        <div class="col col--8-of-16 col--push-1-of-16">
          <div class="text cel">
            <div class="lead">
              <h2><?php echo $titulo_2; ?></h2>
            </div>
          </div>
          <div class="col--push-2-of-16">
            <div class="text2">
              <p><?php echo $descripcion_2; ?></p>
            </div>
            <div class="line"></div>
            <div class="text3">
              <p><?php echo $descripcion_3; ?></p>
            </div>
          </div>
          <div class="text4 col--pull-1-of-16">
            <div class="lead2">
              <h2><?php echo $cita; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
