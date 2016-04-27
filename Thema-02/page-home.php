<?php

/*
Template Name: home
*/

?>

<?php get_header(); ?>

<div class="lateral">
								<div class="logo"><a href="http://noniresort.com.br"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logo-noni-resort.jpg" alt="None Resort Home" /></a></div>
							</div>
			<?php echo do_shortcode( '[vegas id=41 fade=9000 delay=5000 arrows=no autoplay=yes poster=no random=yes]' ) ?>  
			
			<div id="content">

			
				<div id="inner-content" class="row">

						  <div id="main" class="large-12 medium-4 small-12 columns" role="main">
						  	
								<p class="txthome">Prepare-se para viver <br>novas experiências.</p></div>

						  	<div class="menus">
						  		 <ul class="small-block-grid-3">
									  <li><a href="http://noniresort.com.br/?p=48"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-noni-arena-bg.png" alt="Clique Aqui" /></a></li>
									  <li><a href="http://cafedelamusiquecumbuco.com.br/"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-cafe-02bg.png" alt="Clique Aqui" /></a></li>
									  <li><a href="http://noniresort.com.br/?p=51"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-cafe-bg.png" alt="Clique Aqui" /></a></li>

								</ul>
						 	 </div>
    				</div> <!-- end #main -->

						<div class="large-4 medium-4 small-4 columns" ></div>

						<div class="lateral02"></div>

						<?php // get_template_part( 'partials/loop', 'page' ); ?>
					    								    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>