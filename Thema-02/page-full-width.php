<?php
/*
Template Name: Teste Full
*/
?>
<div class="radio">
	<div class="large-3 medium-3 small-12 columns" ><div class="topo-radio"><img src="http://www.noniresort.com.br/radio/logo-cafe-radio.png" width="45px" height="45px">
		<p>Rádio Café De La Musique  | <a href="http://noniresort.com.br/?page_id=29"> Download Playlist </a></p></div> </div>
	<div class="large-2 medium-2 small-12 columns" ><div class="radio-beach-park"><img src="http://www.noniresort.com.br/radio/logo-radio2.png"></div></div>
	<div class="large-4 medium-4 small-12 columns" ><p>Escute aqui o último set do Programa Rádio Café De La Music | Todos os sábados das 8h às 19hs.</p></div>
	<div class="large-3 medium-3 small-12 columns" ><div class="player"><?php echo do_shortcode('[sc_embed_player_template1 fileurl="http://noniresort.com.br/radio/programa-i-love-sunset.mp3" autoplay="true" loops="true"]'); ?>
</div></div>
</div>

</div>

<?php get_header(); ?>


<div class="lateral">
								<div class="logo"><a href="http://noniresort.com.br/?page_id=7"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logo-noni-resort.jpg" alt="None Resort Home" /></a></div>
							</div>
			<?php echo do_shortcode( '[vegas id=16 fade=9000 delay=6000 arrows=no autoplay=yes poster=no random=yes]' ) ?>
			
			<div id="content">

			
				<div id="inner-content" class="row">

						  <div id="main" class="large-12 medium-4 small-12 columns" role="main">
						  	
								<h1 style="text-align:right; color:#fff;padding-top: 30px;font-size:50px;">Prepare-se para viver <br>novas experiências.</h1></div>

						  	<div class="menus">
						  		 <ul class="small-block-grid-3">
									  <li><a href="http://noniresort.com.br/?page_id=11"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-noni-arena-bg.png" alt="Clique Aqui" /></a></li>
									  <li><a href="http://noniresort.com.br/?page_id=5"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-cafe-02bg.png" alt="Clique Aqui" /></a></li>
									  <li><a href="http://noniresort.com.br/?page_id=13"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-cafe-bg.png" alt="Clique Aqui" /></a></li>

								</ul>
						 	 </div>
    				</div> <!-- end #main -->

						<div class="large-4 medium-4 small-4 columns" ></div>

						<div class="lateral02"></div>

						<?php // get_template_part( 'partials/loop', 'page' ); ?>
					    								    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
<?php
