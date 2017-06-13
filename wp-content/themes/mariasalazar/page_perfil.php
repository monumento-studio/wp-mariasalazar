<?php
/*
	Template Name: Perfil Page
*/

// Custom fields

$titulo_1_alimentacion = get_field('titulo_1_alimentacion');
$imagen_1 = get_field('imagen_1');
$descripcion_1_alimentacion = get_field('descripcion_1_alimentacion');

$titulo_2_soul = get_field('titulo_2_soul');
$imagen_2 = get_field('imagen_2');
$pre_descripcion_2 = get_field('pre_descripcion_2');
$descripcion_2_soul = get_field('descripcion_2_soul');

$testimonios = get_field('testimonios');

$quote_1 = get_field('quote_1');
$comentario_1 = get_field('comentario_1');
$nombre_1 = get_field('nombre_1');

$testimonios = get_field('testimonios');
$quote_2 = get_field('quote_2');
$comentario_2 = get_field('comentario_2');
$nombre_2 = get_field('nombre_2');

$quote_3 = get_field('quote_3');
$comentario_3 = get_field('comentario_3');
$nombre_3 = get_field('nombre_3');

get_header();
?>

<section class="pree">
  <div id="gradient"></div>
</section>
<section class="perfil">
    <?php get_template_part('template-parts/content', 'menu'); ?>

  <div class="container">
    <div class="uno">
      <div class="row">
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2><?php echo $titulo_1_alimentacion; ?></h2>
          </div>
        </div>
        <div class="col col--7-of-16 col--push-1-of-16 float-rigth">

					<?php if ( !empty($imagen_1) ) : ?>
			  	  <div class="img"><img src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>"></div>
					<?php endif; ?>


        </div>
      </div>
      <div class="article">
        <div class="row">
          <div class="col col--4-of-16 col--push-4-of-16">
            <div class="text cel">

              <p><?php echo $descripcion_1_alimentacion; ?></p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dos">
      <div class="row">
        <div class="col col--7-of-16">
          <div class="img">
						<?php if ( !empty($imagen_2) ) : ?>
				  	  <div class="img"><img src="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>"></div>
						<?php endif; ?>

					</div>
        </div>
        <div class="col col--5-of-16 col--push-1-of-16">
          <div class="lead cel">
            <h2><?php echo $titulo_2_soul; ?></h2>
          </div>
          <div class="text col col--16-of-16 col--push-3-of-16 cel cel">
            <p><?php echo $pre_descripcion_2; ?></p>
            <div class="line"></div>
            <p><?php echo $descripcion_2_soul; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonios1">
      <div class="row">
        <div class="col col--5-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2><?php echo $testimonios; ?></h2>
            <h3><?php echo $quote_1; ?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col--5-of-16 col--push-3-of-16">
          <div class="text cel">
            <p><?php echo $comentario_1; ?></p>
          </div>
        </div>
        <div class="col col--5-of-16 col--ab">
          <div class="text">
            <p class="center"><?php echo $nombre_1; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonios2">
      <div class="row">
        <div class="col col--5-of-16 col--push-9-of-16">
          <div class="lead cel">
            <h3><?php echo $quote_2; ?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col--6-of-16 col--push-3-of-16 col--ab">
          <div class="text">
            <p class="center"><?php echo $nombre_2; ?></p>
          </div>
        </div>
        <div class="col col--5-of-16">
          <div class="text cel">
            <p><?php echo $comentario_2; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonios1">
      <div class="row">
        <div class="col col--5-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h3><?php echo $quote_3; ?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col--5-of-16 col--push-3-of-16">
          <div class="text cel">
            <p><?php echo $comentario_3; ?></p>
          </div>
        </div>
        <div class="col col--5-of-16 col--ab">
          <div class="text">
            <p class="center"><?php echo $nombre_3; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
