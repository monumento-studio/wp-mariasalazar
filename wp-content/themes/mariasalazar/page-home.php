<?php

/* Template Name: Home Page */

// Advanced custom fields
$logo_home	=	get_field('logo_home');



get_header(); ?>

<section class="pre">
  <div id="gradient"></div>
</section>
<section class="home">

  <?php get_template_part('template-parts/content', 'menu'); ?>

	<?php if ( !empty($logo_home) ) : ?>
  	<div class="maria"><img src="<?php echo $logo_home['url']; ?>" alt="<?php echo $logo_home['alt']; ?>"></div>
	<?php endif; ?>
</section>



<?php
get_footer();
