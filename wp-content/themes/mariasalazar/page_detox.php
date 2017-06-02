<?php
/*
	Template Name: Detox Page
*/

$nombre_de_la_seccion = get_field("nombre_de_la_seccion");
$numero_junto_a_titulo = get_field("numero_junto_a_titulo");
$descripcion_detox = get_field("descripcion_detox");
$imagen_1 = get_field("imagen_1");
$cita = get_field("cita");
$descripcion_cita = get_field("descripcion_cita");
$imagen_2 = get_field("imagen_2");
$texto_antes_de_conceptos = get_field("texto_antes_de_conceptos");
$concepto_a = get_field("concepto_a");
$concepto_b = get_field("concepto_b");
$concepto_c = get_field("concepto_c");
$texto_final = get_field("texto_final");
$imagen_3 = get_field("imagen_3");



get_header();
?>
<section class="pree">
      <div id="gradient"></div>
    </section>
    <section class="detox">
      <?php get_template_part('template-parts/content', 'menu'); ?>
      <div class="container">
        <div class="detox sec">
          <div class="row">
            <div class="col col--3-of-16 col--push-3-of-16">
              <div class="lead cel">
                <h2><?php echo $nombre_de_la_seccion; ?></h2>
              </div>
            </div>
            <div class="col col--3-of-16 col--pull-3-of-16">
              <div class="pull">
                <h2><?php echo $numero_junto_a_titulo; ?></h2>
              </div>
            </div>
          </div>
          <div class="top">
            <div class="first uno">
              <div class="row">
                <div class="col col--5-of-16 col--push-4-of-16">
                  <div class="text cel">
                    <p><?php echo $descripcion_detox; ?></p>
                  </div>
                </div>
                <div class="col col--4-of-16">
                  <?php if ( !empty($imagen_1) ) : ?>
        			  	  <div class="img"><img class="tel" src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>"></div>
        					<?php endif; ?>
                </div>
              </div>
            </div>
            <div class="second">
              <div class="row float">
                <div class="col col--7-of-16 col--push-4-of-16 cel">
                  <div class="line"></div>
                  <p>Para estar sanos, las células necesitan lo siguiente</p>
                  <p>— Oxígeno</p>
                  <p class="push1">— Alimentos saludables que contienen micronutrientes</p>
                  <p class="push2">— Una hidratación adecuada</p>
                  <p class="push3">— Un buen funcionamiento de las vías de desintoxicación</p>
                </div>
              </div>
            </div>
          </div>
          <div class="middle">
            <div class="row">
              <div class="col col--7-of-16">
                <div class="img">
                  <?php if ( !empty($imagen_2) ) : ?>
        			  	  <div class="zan"><img class="tel" src="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>"></div>
        					<?php endif; ?>
                </div>
              </div>
              <div class="col col--5-of-16 col--push-1-of-16 cel">
                <div class="square cel">
                  <p><?php echo $cita; ?></p>
                </div>
                <p class="p"><?php echo $descripcion_cita; ?></p>
              </div>
            </div>
          </div>
          <div class="last">
            <div class="row">
              <div class="col col--7-of-16 col--push-2-of-16">
                <div class="p cel">
                  <p class="padding col--push-2-of-16">— <?php echo $texto_antes_de_conceptos; ?> —</p>
                  <div class="letra">
                    <div class="col--push-5-of-16">
                      <p><?php echo $concepto_a; ?></p>
                      <h2>A</h2>
                    </div>
                  </div>
                  <div class="letra">
                    <div class="col--push-5-of-16">
                      <p><?php echo $concepto_b; ?></p>
                      <h2>B</h2>
                    </div>
                  </div>
                  <div class="letra">
                    <div class="col--push-5-of-16">
                      <p><?php echo $concepto_c; ?></p>
                      <h2>C</h2>
                    </div>
                    <div class="col--push-5-of-16">
                      <div class="line"></div>
                    </div>
                    <div class="col col--14-of-16 col--push-4-of-16">
                      <p class="padding"><?php echo $texto_final; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col col--6-of-16 col--push-1-of-16">
                <div class="img">
                  <?php if ( !empty($imagen_3) ) : ?>
        			  	  <div class="maria"><img class="tel" src="<?php echo $imagen_3['url']; ?>" alt="<?php echo $imagen_3['alt']; ?>"></div>
        					<?php endif; ?>
                </div><span class="cel">beneficios</span>
                <div class="cuadro col col--13-of-16 cuadro">
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
