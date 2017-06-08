<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package María_Salazar
 */

get_header(); ?>
<section class="pree">
      <div id="gradient"></div>
</section>
<section class="post">
	<div class="container">
			<main id="content" role="main">
<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php get_template_part('template-parts/content', 'menu'); ?>


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-page', get_post_format() );


		endwhile; // End of the loop.
		?>


  </main>
</div>
</section>
<?php

get_footer();
