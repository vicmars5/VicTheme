<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"/>
	<title><?php the_title_attribute(); ?> -por Víctor Agustín Díaz Méndez</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"/>
	<link href='http://fonts.googleapis.com/css?family=Alegreya:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/comentarios.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/post.css"/>
	
	<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"><header style="background-image: url(<?php echo atrib_imagen_destacada('full'); ?>);">
				<div class="mascara">
					<div class="redes"><a href="https://twitter.com/MarsVic5" class="twitter-follow-button rs" data-show-count="false" data-lang="es">Seguir a @MarsVic5</a><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNegroBlog&amp;width&amp;layout=button&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px; width:150px; " allowTransparency="true"></iframe></div>
					<h2><?php the_title(); ?></h2>
				</div>
			</header></div>
			<article class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
				<section class="principal">
					<div class="detalle">
						<span class="glyphicon glyphicon-calendar"></span><?php the_date(); ?>
						<span class="glyphicon glyphicon-user"></span><?php the_author(); ?>
						<span class="glyphicon glyphicon-bookmark"></span><?php the_category(); ?>
					</div>

					<?php the_content(); ?>

					<div class="navigation-post">
						<!--a href="#" class="before"><span class="glyphicon glyphicon-chevron-left"></span>Siguiente</a>
						<a href="#" class="next">Anterior<span class="glyphicon glyphicon-chevron-right"></span></a-->

					<?php  next_post_link( '%link', 'Siguiente'); ?>
					<?php  previous_post_link( '%link', 'Anterior'); ?>
					</div>
				</section>
			</article>
			<!--Si se encuentran post -->
				<?php endwhile; else: ?>
				<!--Si no se encontraron articulos-->
				<h2>No se encontraron articulos</h2>
				<?php endif; ?>


<?php get_sidebar(); ?>

			<article class="col-sm-12 col-xs-12 col-md-8 col-lg-8">
				<section class="comments">
					<?php comments_template(); ?>
				</section>
			</article>

<?php include(TEMPLATEPATH.'/sidebar-b.php'); ?>

<?php get_footer(); ?>