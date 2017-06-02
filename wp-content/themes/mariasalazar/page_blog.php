<?php
/*
	Template Name: Blog Page
*/

// Custom fields

// $nombre_3 = get_field('nombre_3');
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
          <article>
            <div class="content">
              <header>
                <div class="lay"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="post.html">
                    <time datatime="2017-05-21">21.05.17	</time></a></div>
                <div class="lead"><a href="post.html">
                    <h2>Magna Tellus Quam</h2></a></div>
                <div class="post-image"><a href="post.html"><img src="assets/img/blog/img/frutas-01.jpg"></a></div>
                <div class="description">
                  <div class="text">
                    <div class="line"></div>
                    <p>Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                  </div>
                </div>
              </header>
              <div class="blogmas">
                <div class="contentmas">
                  <p>Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
                  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  <div class="aparte">
                    <div class="quote">
                      <p>“Donec id elit non mi porta gravida at eget metus donec id elit non mi porta gravida at egetetus.”</p>
                    </div>
                    <div class="pie">
                      <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                  </div>
                </div>
                <div class="leermas"><span>- Leer Más.</span></div>
                <div class="leermenos"><span>- Leer Menos. </span></div>
              </div>
            </div>
          </article>
          <article>
            <div class="content">
              <header>
                <div class="lay"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="post.html">
                    <time datatime="2017-05-21">14.05.17	</time></a></div>
                <div class="lead"><a href="post.html">
                    <h2>Aenean Ornare Mollis</h2></a></div>
                <div class="post-image"><a href="post.html"><img src="assets/img/blog/img/frutas-01.jpg"></a></div>
                <div class="description">
                  <div class="text">
                    <div class="line"></div>
                    <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  </div>
                </div>
              </header>
              <div class="blogmas">
                <div class="contentmas">
                  <p>Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
                  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  <div class="aparte">
                    <div class="quote">
                      <p>“Donec id elit non mi porta gravida at eget metus donec id elit non mi porta gravida at egetetus.”</p>
                    </div>
                    <div class="pie">
                      <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                  </div>
                </div>
                <div class="leermas"><span>- Leer Más.</span></div>
                <div class="leermenos"><span>- Leer Menos.</span></div>
              </div>
            </div>
          </article>
          <article>
            <div class="content">
              <header>
                <div class="lay"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="post.html">
                    <time datatime="2017-05-21">14.05.17	</time></a></div>
                <div class="lead"><a href="post.html">
                    <h2>Aenean Ornare Mollis</h2></a></div>
                <div class="post-image"><a href="post.html"><img src="assets/img/blog/img/frutas-01.jpg"></a></div>
                <div class="description">
                  <div class="text">
                    <div class="line"></div>
                    <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  </div>
                </div>
              </header>
              <div class="blogmas">
                <div class="contentmas">
                  <p>Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
                  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  <div class="aparte">
                    <div class="quote">
                      <p>“Donec id elit non mi porta gravida at eget metus donec id elit non mi porta gravida at egetetus.”</p>
                    </div>
                    <div class="pie">
                      <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                  </div>
                </div>
                <div class="leermas"><span>- Leer Más.</span></div>
                <div class="leermenos"><span>- Leer Menos.</span></div>
              </div>
            </div>
          </article>
          <article>
            <div class="content">
              <header>
                <div class="lay"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow1.svg"><a href="post.html">
                    <time datatime="2017-05-21">14.05.17	</time></a></div>
                <div class="lead"><a href="post.html">
                    <h2>Aenean Ornare Mollis</h2></a></div>
                <div class="post-image"><a href="post.html"><img src="assets/img/blog/img/frutas-01.jpg"></a></div>
                <div class="description">
                  <div class="text">
                    <div class="line"></div>
                    <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  </div>
                </div>
              </header>
              <div class="blogmas">
                <div class="contentmas">
                  <p>Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</p>
                  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  <div class="aparte">
                    <div class="quote">
                      <p>“Donec id elit non mi porta gravida at eget metus donec id elit non mi porta gravida at egetetus.”</p>
                    </div>
                    <div class="pie">
                      <p>Dleo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                  </div>
                </div>
                <div class="leermas"><span>- Leer Más.</span></div>
                <div class="leermenos"><span>- Leer Menos.</span></div>
              </div>
            </div>
          </article>
        </main>
      </div>
    </section>
<?php get_footer(); ?>
