
		
	<!--<nav><a href="">Víctor A Díaz</a></nav>-->
	<nav><h1>El Blog del Negro - por: Victor Agustín Díaz Méndez</h1> <?php  //En el caso de que se deseara implementar
		
		wp_nav_menu(array(
			'container' => false,
			'items_wrap' => '<ul>%3$s</ul>',
			'menu_id' => 'Menu'
		));
 ?><!--<ul>
 	<li><a href="/wordpress/"><img src="<?php bloginfo('template_url'); ?>/icon/logo.svg" style="height: 1em;" />Agustin Diaz</a></li>
 </ul>--></nav>
	<div class="container">
		<div class="row-fluid">