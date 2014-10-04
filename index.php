<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"/>
	<title>El Blog del Negro -Por Víctor Agustín Díaz Méndez</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css"/>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/index.css"/>
	

	<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
			
			<!--Importar portada-->
			<?php include(TEMPLATEPATH.'/show.php'); ?>
			<!--Importar portada-->
			

			


			<section class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
				<!--Para obtener post-->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

				<article class="post">
					<a href="<?php the_permalink(); ?>"><div class="portada col-sm-12 col-xs-12 col-md-6 col-lg-6" style="background-image: url(<?php echo atrib_imagen_destacada('medium');//the_post_thumbnail();?>);"></div></a>
					<div class="vista col-sm-12 col-xs-12 col-md-6 col-lg-6">
						<div class="detalle">
							<span class="glyphicon glyphicon-calendar"></span><?php the_date(); ?>
							<span class="glyphicon glyphicon-user"></span><?php the_author(); ?>
							<span class="glyphicon glyphicon-bookmark"></span><?php the_category(); ?>
						</div>
						<div class="titulo"><h2><?php the_title(); ?></h2></div>
						<div class="desc"><?php the_excerpt(40); ?></div>
						<div class="centrar"><div class="c"><div class="btn leer"><a href="<?php the_permalink(); ?>">Leer <img src="<?php bloginfo('template_url'); ?>/icon/leer.svg" class="icon"/></a></div></div></div>
					</div>				
				</article>

				<!--Si se encuentran post -->
				<?php endwhile; else: ?>
				<!--Si no se encontraron articulos-->
				<h2>No se encontraron articulos</h2>
				<?php endif; ?>

				
			</section>
			<aside class="paginacion col-sm-12 col-xs-12 col-md-12 col-lg-12">
				<p>
					<?php previous_posts_link('<span class="glyphicon glyphicon-chevron-left"></span>Posts Nuevos'); ?>
					<?php next_posts_link('Posts Anteriores<span class="glyphicon glyphicon-chevron-right"></span>'); ?>
				</p>
			</aside>
<?//php get_sidebar(); ?>

<?php get_footer(); ?>