<?php
/*
Template Name: Download
*/
?>




<div class="bgformulario">

<?php get_header(); ?>

			<div class="lateral">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logo-noni-resort.jpg" alt="None Resort Home" /></a>	</div>
			</div>
			
			<div id="content">  
			
				<div id="inner-content" class="row">
						<div id="main" class="large-12 medium-12 small-12 columns">

							  	<h6 class="txtdownloads"> Download Playlist</h6>
						</div>
			
				    <div class="large-11 medium-11 small-12 columns" role="main">
				
							<div class="playlists">	
								<?php /*
								// the query to set the posts per page to 3
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
								$args = array('posts_per_page' => 3, 'cat' => 2, '&paged='.$paged);
								query_posts($args); */?>

								<?php 	query_posts( array( 'paged' => $paged, 'posts_per_page' => 3, 'cat' => 2)); ?>

								<!-- the loop -->
								<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

										 <ul style="list-style: none;">
												 <li><fieldset><legend><?php the_title(); ?></legend>

								                   	<div class="small-12 medium-2 large-2 columns"><p><?php the_content(); ?></p></div>
								                    <div class="small-12 medium-6 large-6 columns"><div class="playerr"><p><?php the_field('player'); ?></p></div></div>
								                    <div class="small-12 medium-4 large-4 columns"><a href="<?php the_field('url_de_download'); ?>" class="button expand">Download Playlist</a></div>
								                
								                </li></fieldset>		
						           		 </ul>
								<?php endwhile; ?>

										 <div class="large-12 medium-12 small-12 columns">
										 	<div class="paginacao">
											<?php wp_pagenavi(); ?>
											</div>		
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
			

    				</div> <!-- end #main -->
				    
				    

			</div> <!-- end #inner-content -->
   		</div> <!-- end #content -->
</div>


<?php get_footer(); ?>