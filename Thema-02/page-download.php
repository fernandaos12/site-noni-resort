<?php
/*
Template Name: Download
*/
?>


<style type="text/css">
	body{overflow: scroll;}

::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
 
::-webkit-scrollbar-button:start:decrement,
::-webkit-scrollbar-button:end:increment  {
  display: none;
}
 
::-webkit-scrollbar-track-piece  {
  background-color: rgba(0, 0, 0, 0);;
  -webkit-border-radius: 6px;
}
 
::-webkit-scrollbar-thumb:vertical {
  background-color: #f1cebb;
  -webkit-border-radius: 6px;
}

.rodape-cosbel{margin-left: 30px;}
.part{margin-left: 60px;}

</style>

<div class="bgformulario">

<?php get_header(); ?>

			<div class="lateral">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logo-noni-resort.jpg" alt="None Resort Home" /></a>	</div>
			</div>
			<?php echo do_shortcode( '[vegas id=54 fade=9000 delay=6000 arrows=no autoplay=yes poster=no random=yes]' ) ?>  
			
			<div id="content">  
			
				<div id="inner-content" class="row">
						<div id="main" class="large-12 medium-12 small-12 columns">

							  	<h6 class="txtdownloads"> Download Playlist</h6>
						</div>
			
				    <div class="large-11 medium-11 small-12 columns" role="main">
				
								
								<?php /*
								// the query to set the posts per page to 3
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
								$args = array('posts_per_page' => 3, 'cat' => 2, '&paged='.$paged);
								query_posts($args); */?>

								<?php 	query_posts( array( 'paged' => $paged, 'posts_per_page' => 2, 'cat' => 2)); ?>

								<!-- the loop -->
								<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

								<div >

										 <ul style="list-style: none;">
												 <li><fieldset><legend><?php the_title(); ?></legend>

								                   	
								                    <div class="small-12 medium-6 large-6 columns"><div class="playerr"><p><?php the_field('player'); ?></p></div></div>
								                    <div class="small-12 medium-4 large-4 columns"><a href="<?php the_field('url_de_download'); ?>" class="button expand">Download Playlist</a></div>
								                
								                </li></fieldset>		
						           		 </ul>
						           		 </div>
								<?php endwhile; ?>
										<?php wp_pagenavi(); ?>
										<!-- <div class="large-12 medium-12 small-12 columns"><div class="paginacao"><?php wp_pagenavi(); ?></div>	-->	
										</div>

							</div>
								

						<!-- pagination -->
			<!--			<div class="page">
						<div class="small-12 medium-2 large-2 columns">
						<?php next_posts_link(); ?>
						<?php previous_posts_link(); ?>
						<?php else : ?>
						<!-- No posts found -->
					<!--	<?php endif; ?></div></div> -->
							
						<?php// get_template_part( 'partials/loop', 'page' ); ?>
			

    				</div> 
				<!-- If you are using version 5.5 or greater you can use <ul>'s and <li>'s for Accordion markup --> 


<!-- Also works with <dl>'s and <dt>'s in place of <ul>'s and <li>'s. --> 



	




    				<!-- end #main -->
				    
				    

			</div> <!-- end #inner-content -->
   		</div> <!-- end #content -->
</div>


<?php get_footer(); ?>