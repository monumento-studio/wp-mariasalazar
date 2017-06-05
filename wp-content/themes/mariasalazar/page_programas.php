<?php
/*
	Template Name: Programas Page
*/

// Custom fields

$titulo_programa_1 = get_field('titulo_programa_1');
$etiqueta_programa_1 = get_field('etiqueta_programa_1');
$descripcion_programa_1 = get_field('descripcion_programa_1');

$titulo_programa_2 = get_field('titulo_programa_2');
$etiqueta_programa_2 = get_field('etiqueta_programa_2');
$descripcion_programa_2 = get_field('descripcion_programa_2');

$titulo_programa_3 = get_field('titulo_programa_3');
$etiqueta_programa_3 = get_field('etiqueta_programa_3');
$descripcion_programa_3 = get_field('descripcion_programa_3');


get_header();
?>

<section class="pree">
  <div id="gradient"></div>
</section>
<section class="programas">
  <?php get_template_part('template-parts/content', 'menu'); ?>
  <div class="container">
    <div class="detox sec">
      <div class="row">
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead"><a href="page_detox.php?page_id=81">
              <h2><?php echo $titulo_programa_1; ?></h2></a></div>
        </div>
        <div class="col col--4-of-16">
          <p><?php echo $descripcion_programa_1; ?></p>
        </div>
        <div class="col col--3-of-16 col--ab col--pull-7-of-16 arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="page_detox.php?page_id=81">
            <p><?php echo $etiqueta_programa_1; ?></p></a></div>
      </div>
    </div>
    <div class="anti sec">
      <div class="row">
        <div class="col col--push-5-of-16"></div>
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead"><a href="page_antiestres.php?page_id=89">
              <h2><?php echo $titulo_programa_2; ?></h2></a></div>
        </div>
        <div class="col col--4-of-16">
          <p><?php echo $descripcion_programa_2; ?></p>
        </div>
        <div class="col col--3-of-16 col--ab col--pull-7-of-16 arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="page_antiestres.php?page_id=89">
            <p><?php echo $etiqueta_programa_2; ?></p></a></div>
      </div>
    </div>
    <div class="nutricion sec">
      <div class="row">
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead"><a href="page_nutricion.php?page_id=95">
              <h2><?php echo $titulo_programa_3; ?></h2></a></div>
        </div>
        <div class="col col--4-of-16">
          <p><?php echo $descripcion_programa_3; ?></p>
        </div>
        <div class="col col--3-of-16 col--ab col--pull-7-of-16 arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="page_nutricion.php?page_id=95">
            <p><?php echo $etiqueta_programa_3; ?> </p></a></div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
