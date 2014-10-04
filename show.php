			<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
				<?php if(have_posts()): the_post(); ?>
				<header style="background-image: url(<?php echo atrib_imagen_destacada('full');//the_post_thumbnail();?>)">
				<div class="mascara">
					<div class="redes"><a href="https://twitter.com/MarsVic5" class="twitter-follow-button rs" data-show-count="false" data-lang="es">Seguir a @MarsVic5</a><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNegroBlog&amp;width&amp;layout=button&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px; width:150px; " allowTransparency="true"></iframe></div>
					<div class="vista">
						<div class="titulo"><h2><?php the_title(); ?></h2></div>
						<div class="desc"><?php the_excerpt(40); ?></div>
						<div class="detalle">
							<span class="glyphicon glyphicon-calendar"></span><?php the_date(); ?>
							<span class="glyphicon glyphicon-user"></span><?php the_author(); ?>
							<span class="glyphicon glyphicon-bookmark"></span><?php the_category(); ?>
						</div>
					</div>
					<div class="btn leer"><a href="<?php the_permalink(); ?>">Leer <img src="<?php bloginfo('template_url'); ?>/icon/leer.svg" alt="" class="icon"/></a></div>
				</div>
				</header>
				<?php else: ?>
				<?php endif; ?>
			</div>