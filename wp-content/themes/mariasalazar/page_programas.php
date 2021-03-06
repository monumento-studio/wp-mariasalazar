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

$link_detox = get_field('link_detox');
$link_antiestres = get_field('link_antiestres');
$link_nutrition = get_field('link_nutrition');


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
          <div class="lead"><a href="<?php echo $link_detox; ?>">
              <h2><?php echo $titulo_programa_1; ?></h2></a></div>
        </div>
        <div class="col col--4-of-16">
          <p><?php echo $descripcion_programa_1; ?></p>
        </div>
        <div class="col col--3-of-16 col--ab col--pull-7-of-16 arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="<?php echo $link_detox; ?>">
            <p><?php echo $etiqueta_programa_1; ?></p></a></div>
      </div>
    </div>
    <div class="anti sec">
      <div class="row">
        <div class="col col--push-5-of-16"></div>
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead"><a href="<?php echo $link_antiestres; ?>">
              <h2><?php echo $titulo_programa_2; ?></h2></a></div>
        </div>
        <div class="col col--4-of-16">
          <p><?php echo $descripcion_programa_2; ?></p>
        </div>
        <div class="col col--3-of-16 col--ab col--pull-7-of-16 arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="<?php echo $link_antiestres; ?>">
            <p><?php echo $etiqueta_programa_2; ?></p></a></div>
      </div>
    </div>
    <div class="nutricion sec">
      <div class="row">
        <div class="col col--3-of-16 col--push-3-of-16">
          <div class="lead"><a href="<?php echo $link_nutrition; ?>">
              <h2><?php echo $titulo_programa_3; ?></h2></a></div>
        </div>
        <div class="col col--4-of-16">
          <p><?php echo $descripcion_programa_3; ?></p>
        </div>
        <div class="col col--3-of-16 col--ab col--pull-7-of-16 arrow"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="<?php echo $link_nutrition; ?>">
            <p><?php echo $etiqueta_programa_3; ?> </p></a></div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
