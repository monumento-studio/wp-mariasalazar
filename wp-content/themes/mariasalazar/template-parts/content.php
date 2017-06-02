<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package María_Salazar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content">
	<header class="entry-header">
		<div class="content">
			<header>
				<div class="lay"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="post.html">
						<time><?php echo $fecha; ?></time></a></div>
				<div class="lead"><a href="post.html">
						<h2><?php echo $titulo_del_post; ?></h2></a></div>
				<div class="post-image">
					<a href="post.html">
						<?php if ( !empty($imagen) ) : ?>
              <div class="maria"><img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>"></div>
            <?php endif; ?>
				</a></div>
				<div class="description">
					<div class="text">
						<div class="line"></div>
						<p><?php echo $texto_corto; ?></p>
					</div>
				</div>
			</header>
			<div class="blogmas">
				<div class="contentmas">
					<p><?php echo $cuerpo_del_post; ?></p>
					<div class="aparte">
						<div class="quote">
							<p><?php echo $cita; ?></p>
						</div>
						<div class="pie">
							<p><?php echo $texto_corto_final; ?></p>
						</div>
					</div>
				</div>
				<div class="leermas"><span>- Leer Más.</span></div>
				<div class="leermenos"><span>- Leer Menos. </span></div>
			</div>
		</div>
	</header><!-- .entry-header -->



	<footer class="entry-footer">
		<?php mariasalazar_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
