<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package María_Salazar
 */
 $fecha = the_field('fecha');
 $titulo_del_post = the_field('titulo_del_post');
 $texto_corto = the_field('texto_corto');
 $cuerpo_del_post = the_field('cuerpo_del_post');
 $imagen = the_field('imagen');
 $cita = the_field('cita');
 $texto_corto_final = the_field('texto_corto_final');


get_header();
?>

<section class="pree">
      <div id="gradient"></div>
</section>
<section class="blog">
  <?php get_template_part('template-parts/content', 'menu'); ?>

  <div class="container">
    <main id="content" role="main">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</main>
	</div>
</section>


<?php
get_footer();
