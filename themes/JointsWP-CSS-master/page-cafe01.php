<?php
/*
Template Name: CAFE-LA-MUSIQUE
*/
?>

<div class="bgformulario">
<?php get_header(); ?>

			<div class="lateral">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-cafe-02bg.png" alt="None Resort Home" /></a>	</div>
			</div>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
			
				    <div class="large-12 medium-8 small-12 columns"><h3 class="txthome"> Preencha o formulário abaixo e receba informações exclusivas.</h3>
					
						<?php echo do_shortcode('[contact-form-7 id="22" title="Formulario-Cafe-la-musique-cumbuco"]') ?>
					    					
    				</div> <!-- end #main -->
				    
				   

				</div> <!-- end #inner-content -->
    				
			</div> <!-- end #content -->
</div>

<?php get_footer(); ?>