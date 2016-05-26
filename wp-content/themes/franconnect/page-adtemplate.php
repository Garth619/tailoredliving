<?php
/**
 * Template Name: Ad Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

 ?>
 
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php the_field('title');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script src="https://use.typekit.net/fae3bee.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php the_field('tracking_code');?>
<?php the_field('google_analytics');?>
</head>

<body <?php body_class(); ?>>
	
	<div class="header">
		<div class="inner_header">
			<div class="logo_wrapper">
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
				
				<span class="location_name"><?php the_field('location_name', 'option'); ?></span><!-- location_name -->
			</div><!-- logo_wrapper -->
				<a class="phone_number" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a><!-- phone_number -->
			
			</div><!-- inner_header -->
	</div><!-- header -->
	
	<div class="main">
		
		<div id="content">
		
			<h1><?php the_field('title');?></h1>
			
			<?php get_template_part( 'loop', 'page' ); ?>

		</div><!-- content -->
		
		<div id="form" class="sidebar">
			
			
				
				<h1>Schedule Your<br/>
In-Home Consultation</h1>

				
				<?php $form_object = get_field('form');
						gravity_form_enqueue_scripts($form_object['id'], true);
						gravity_form($form_object['id'], false, false, false, '', true, 12); 
					?>
				
				

			
			
		</div><!--sidebar -->
		
	</div><!-- main -->


	



<div class="sticky_footer">
	
	<a href="#form" class="schedule">Schedule Your In-Home Consultation</a>
	
	
	
</div><!-- sticky_footer -->

<div class="desktop_footer">
	
	<div class="inner_footer">
		<span>&copy; 2016 Budget Blinds, Inc. | All Rights Reserved</span>
	</div><!-- inner_footer -->

</div><!-- desktop_footer -->

		


<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/stickysidebar.js"></script>

<script type="text/javascript">
	
	jQuery(document).ready(function(){
	jQuery('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = jQuery(target);

	    jQuery('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	
	<?php if(!is_handheld()):?>
	
		jQuery(".sidebar").stick_in_parent();
	
	
	<?php endif;?>
	
	
	
	
	
});
	
</script>

</body>
</html>
