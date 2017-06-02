<?php
/*
	Template Name: Nutricion Page
*/

// Custom fields

$titulo_de_seccion = get_field("titulo_de_seccion");
$descripcion_1 = get_field("descripcion_1");
$descripcion_2 = get_field("descripcion_2");
$imagen_1 = get_field("imagen_1");
$imagen_2 = get_field("imagen_2");
$texto_1 = get_field("texto_1");
$texto_2 = get_field("texto_2");
$texto_3 = get_field("texto_3");
$texto_4 = get_field("texto_4");
$texto_5 = get_field("texto_5");
$texto_6 = get_field("texto_7");
$texto_8 = get_field("texto_8");
$texto_9 = get_field("texto_9");
$texto_10 = get_field("texto_10");
$imagen_3 = get_field("imagen_3");

get_header();
?>

<section class="pree">
      <div id="gradient"></div>
    </section>
    <section class="nutricion">
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
                <p><?php echo $descripcion_1 ?></p>
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
            <div class="col col--6-of-16 col--push-3-of-16">
              <div class="text cel">
                <p><?php echo $descripcion_2; ?></p>
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
              </div>
            </div>
            <div class="col col--5-of-16 col--push-1-of-16">
              <div class="text cel">
                <p>— <?php echo $texto_1; ?> —</p>
              </div>
              <div class="text2 col--push-6-of-16 text">
                <p><?php echo $texto_2; ?></p>
              </div>
              <div class="text3 col--push-3-of-16 text">
                <p><?php echo $texto_3; ?></p>
              </div>
              <div class="text2 col--push-6-of-16 text">
                <p><?php echo $texto_4; ?></p>
              </div>
              <div class="text3 col--push-3-of-16 text">
                <p><?php echo $texto_5; ?></p>
              </div>
              <div class="text2 col--push-6-of-16 text">
                <p><?php echo $texto_6; ?></p>
              </div>
              <div class="text3 col--push-3-of-16 text">
                <p><?php echo $texto_7; ?></p>
              </div>
              <div class="text2 col--push-6-of-16 text">
                <p><?php echo $texto_8; ?></p>
              </div>
              <div class="text3 col--push-3-of-16 text">
                <p><?php echo $texto_9; ?></p>
              </div>
              <div class="text2 col--push-6-of-16 text">
                <p><?php echo $texto_10; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="beneficios">
          <div class="row">
            <div class="col col--5-of-16 col--push-3-of-16 margin"><span class="cel">beneficios</span>
              <div class="cuadro cel">
                <p class="list">— Bajar de peso</p>
                <p class="list">— Liberar la grasa almacenada</p>
                <p class="list">— Renovación de las células</p>
                <p class="list">— Reducir la inflamación</p>
                <p class="list">— Mejorar tu digestión</p>
                <p class="list">— Fortalecer tu sistema inmunológico</p>
                <p class="list">— Aumentar tu deseo sexual</p>
                <p class="list">— Tener una piel más limpia</p>
                <p class="list">— Reducir la celulitis</p>
                <p class="list">— Dormir bien</p>
                <p class="list">— Acceder a la energía que tu cuerpo necesita para mantenerse sano y restaurar su Qi vital.</p>
              </div>
            </div>
            <div class="col col--6-of-16 col--push-2-of-16">
              <div class="img">
                <?php if ( !empty($imagen_3) ) : ?>
                  <img src="<?php echo $imagen_3['url']; ?>" alt="<?php echo $imagen_3['alt']; ?>">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
