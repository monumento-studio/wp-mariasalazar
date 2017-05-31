<?php
/*
Template Name: menu
*/
?>
<section class="menu">
	<div class="blends">
		<div class="marialogo"><a href="/"><img class="blend" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maria-logo.svg" alt="María Salazar"></a></div>
		<div class="lay"><img class="blend" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow.svg"><span>Soul Healthy Living</span></div>
		<div class="logo"><a href="/"><img class="blend" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-negro.svg" alt="Logo María Salazar"></a></div>
	</div>
	<nav>
		<div class="click">Menú</div>
		<div class="full none">
			<div class="line"></div>
			<div class="links">
			<?php
				wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'container' 		 => 'ul',
						'container_class'=> 'links'
				));
			 ?>
		</div>
		<div class="line"></div>
		<div class="lenguaje"><a>English</a><a class="active">Español</a></div>
		</div>
	</nav>
</section>
