			<aside class="right col-sm-12 col-xs-12 col-md-4 col-lg-4">
				<div class="bio">
					<figure class="autor"><img src="<?php bloginfo('template_url'); ?>/icon/autor.jpg" alt=""/>
					<figcaption>Víctor Agustín Díaz Méndez</figcaption></figure>
					<div class="rs">
						<p>Joven, apasionado por las tecnologias y las artes.</p>
						<p>Actualmente me encuentro estudiando la preparatoria, y escribo este blog como forma de expresión.</p>
					</div>
					<a href="http://eepurl.com/4WsED" class="btn">Suscribete <span class="glyphicon glyphicon-envelope"></span></a>
				</div>
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) :endif; ?>
			</aside>