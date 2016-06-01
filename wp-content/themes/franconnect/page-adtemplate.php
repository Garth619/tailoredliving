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
<link href='https://fonts.googleapis.com/css?family=Oswald|Lato' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/cycle2.js"></script>

<?php the_field('tracking_code');?>
<?php the_field('google_analytics');?>
</head>

<body <?php body_class(); ?>>
	
	<div class="header">
		<div class="inner_header">
			<div class="logo_wrapper">
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/tl-logo.jpg"/>
				
				<span class="location_name"><?php the_field('location_name', 'option'); ?></span><!-- location_name -->
			</div><!-- logo_wrapper -->
				<a class="phone_number" href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a><!-- phone_number -->
			
			</div><!-- inner_header -->
	</div><!-- header -->
	
	<div class="main">
		
		<div id="content">
			
			<div class="new_banner">
				
				<h1><?php the_field('title');?></h1>
				
			</div><!-- new_banner -->
		
			
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
			
			<div class="slideshow_wrapper">
				
				<div id="custom-caption" class="center"></div>
				
				<div id=prev>&lt;Prev </div>
        <div id=next> Next&gt;</div>
			
				
				
				<div class="cycle-slideshow" data-cycle-timeout=0 data-cycle-prev="#prev" data-cycle-next="#next" data-cycle-swipe=true data-cycle-swipe-fx=fade data-cycle-caption="#custom-caption" data-cycle-caption-template="Solution {{slideNum}} of {{slideCount}}" data-cycle-slides="> .slide">
					
					<!-- data-cycle-auto-height=container -->
	    
	    
	    <div class="slide">
		    
		    <img class="img_slide" src="<?php bloginfo('template_directory');?>/images/slide.jpg"/>
		    <div class="my_captions">
			    
			    <h1>1. Organized Work Spaces:</h1>
			    <p>Use open shelves in conjunction with cabinets for the most efficient storage. Open shelves leave everyday items readily available, while the cabinets work better for storage and hiding the clutter. This picture perfect laundry station also functions as an amazing workbench with plenty of counter&nbsp;space!</p>
			    
		    </div><!-- my_captions -->
		    
	    </div><!-- slide -->
	    
	    
	    <div class="slide">
		    
		    <img class="img_slide" src="<?php bloginfo('template_directory');?>/images/slide2.jpg"/>
		    <div class="my_captions">
			    
			    <h1>2. Custom Garage Cabinets:</h1>
			    <p>Getting everything up off the floor and behind closed doors keeps your garage looking immaculate all year round. Our customized garage cabinets can be perfectly tailored to fit exactly what will be inside. Our cabinets will maximize your storage space and free up room to park all of your&nbsp;toys.</p>
			    
		    </div><!-- my_captions -->
		    
	    </div><!-- slide -->
	    
	    
	    <div class="slide">
		    
		    <img class="img_slide" src="<?php bloginfo('template_directory');?>/images/slide3.jpg"/>
		    <div class="my_captions">
			    
			    <h1>3. Garage Accessories</h1>
			    <p>Our garage accessories provide new and innovative ways to give your clutter a place. We have everything including gridwall storage, overhead storage racks, bike hoists, baskets for sporting goods, slatwall panels and so much more. Pick and choose your favorite to customize your garage with exactly what you&nbsp;need!</p>
			    
		    </div><!-- my_captions -->
		    
	    </div><!-- slide -->
	    
	    
	    <div class="slide">
		    
		    <img class="img_slide" src="<?php bloginfo('template_directory');?>/images/slide4.jpg"/>
		    <div class="my_captions">
			    
			    <h1>4. Garage Floor</h1>
			    <p>Part of organization is keeping the garage clean and user-friendly. Our PremiereOne® garage flooring is strong enough to withstand daily wear but, stylish enough to keep your garage looking neat and tidy. With a wide variety of color and finish options there is a floor for&nbsp;everyone.</p>
			    
		    </div><!-- my_captions -->
		    
	    </div><!-- slide -->
	    

									 
									 </div><!-- cycle slideshow -->
									 
			</div><!-- slideshow_wrapper -->

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
