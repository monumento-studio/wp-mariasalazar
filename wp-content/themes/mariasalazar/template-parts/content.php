<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package María_Salazar
 */
$texto_corto_post = get_post_meta(get_the_ID(), 'texto_corto_post', true);
$cuerpo = get_post_meta(get_the_ID(), 'cuerpo', true);
$texto_final_post = get_post_meta(get_the_ID(), 'texto_final_post', true);

$imagen_post = get_field('imagen_post');
$texto_corto_post = get_field('texto_corto_post');
$cuerpo_post = get_field('cuerpo_post');
$cita_de_post = get_field('cita_de_post');
$texto_final_de_post = get_field('texto_final_de_post');
$numero_de_post = get_field('numero_de_post');


?>

<article class="numero<?php echo $numero_de_post; ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content">
			<header class="entry-header">
				<div class="lay"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="<?php the_permalink(); ?>">
						<time><?php the_date(); ?></time></a>
				</div>
				<div class="lead">
						<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url(get_permalink() ) ), '</a></h2>' ); ?>
				</div>
				<div class="post-image">
					<a href="<?php the_permalink(); ?>">
              <div class="maria">
								<?php if ( !empty($imagen_post) ) : ?>
		              <img src="<?php echo $imagen_post['url']; ?>" alt="<?php echo $imagen_post['alt']; ?>">
		            <?php endif; ?>
							</div>
				</a></div>
				<div class="description">
					<div class="text">
						<div class="line"></div>
						<p><?php echo $texto_corto_post; ?></p>
					</div>
				</div>
			</header>
			<div class="blogmas">
				<div class="contentmas">
					<p><?php echo $cuerpo_post; ?></p>
					<div class="aparte">
						<div class="quote">
							<p><?php echo $cita_de_post; ?></p>
						</div>
						<div class="pie">
							<p><?php echo $texto_final_de_post; ?></p>
						</div>
					</div>
				</div>
				<div class="leermas"><span>- Leer Más.</span></div>
				<div class="leermenos"><span>- Leer Menos. </span></div>
			</div>
		</div>



	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
