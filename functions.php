<?php 
	
	register_nav_menus(array(
		'menu' => 'Menu Superior',
		'menu' => 'Menu Recomendados'
	));

	//Miniaturas de imagen
	add_theme_support('post-thumbnails');
	add_image_size('slider_thumbs',1800,1800,true);
	add_image_size('miniatura',850,850,true);

	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="posts">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );

	//obtener el url de la imagen destacada del post
	function atrib_imagen_destacada($tamaño) {
	    global $post;
	    $thumbID = get_post_thumbnail_id( $post->ID );
	    $imgDestacada = wp_get_attachment_image_src( $thumbID, $tamaño); // Sustituir por thumbnail, medium, large o full
	    return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
	}
	//Para excerpts
	function theme_excerpt_length($length){
	   return 25; //el número aquí es nueva cantidad de palabras en el excerpt
	}
	add_filter('excerpt_length','theme_excerpt_length');
	function theme_excerpt_more($more){
	   return "<a title=\"Leer el resto de la noticia\" href=\"".get_permalink()."\"> [leer más »]</a>";
	}
	add_filter('excerpt_more','theme_excerpt_more');
 ?>