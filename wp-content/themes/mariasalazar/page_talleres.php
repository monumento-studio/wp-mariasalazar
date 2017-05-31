<?php
/*
	Template Name: Talleres Page
*/

// Custom fields

// $nombre_3 = get_field('nombre_3');


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
          <h2>Talleres & Conferencias</h2>
        </div>
      </div>
    </div>
    <div class="imagen">
      <div class="row clearfix">
        <div class="col col--4-of-16 col--push-3-of-16">
          <div class="lead cel">
            <h2>¡Mi trabajo es mi pasión y mi vida!</h2>
          </div>
        </div>
        <div class="col col--6-of-16 col--push-2-of-16 float-right">
          <div class="img"><img src="assets/img/talleres/talleres-01.jpg" alt="Talleres de María Salazar"></div>
        </div>
      </div>
    </div>
    <div class="texto">
      <div class="row">
        <div class="col col--4-of-16 col--push-4-of-16">
          <div class="text cel">
            <p>My passion is to meet with a group of people from different institutions such as schools, women's groups and companies, where I give lectures and workshops, and give them the tools they need to be successful in all areas of their lives.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="texto">
      <div class="row">
        <div class="col col--4-of-16 col--push-3-of-16">
          <div class="etiqueta"><a>
              <div class="lay cel"><img class="blend" src="assets/img/arrow1.svg"><span>Más información</span></div></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
