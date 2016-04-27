<?php
/*
Template Name:  BEACH RESORT
*/
?>

<div class="bgformulario">


<?php get_header(); ?>
			<div class="lateral">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logo-noni-resort.jpg" alt="None Resort Home" /></a>	</div>
			</div>
			
			<div id="content">
			
				<div id="inner-content" class="row">
					<div id="main" class="large-12 medium-12 small-12 columns" role="main">

						  	<h3 class="txthome"> Preencha o formulário abaixo e receba informações exclusivas.</h3>
					</div>
			
				    <div class="large-12 medium-12 small-12 columns" role="main">
					
						<?php echo do_shortcode('[contact-form-7 id="26" title="Noni-Beach-Resort"]') ?>
					    					
    				</div> <!-- end #main -->
				    
				    

				</div> <!-- end #inner-content -->
   		</div> <!-- end #content -->

<?php get_footer(); ?>