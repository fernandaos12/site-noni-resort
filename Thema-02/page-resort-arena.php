<?php
/*
Template Name:  RESORT-ARENA
*/
?>

<div class="bgformulario">
<style type="text/css">@media only screen and (min-width: 64.063em){
 .large-12 {
      width: 97%!important;
      margin-left: 121px;
  }

  .txthome {
      font-size: 40px!important;
      text-align: left!important;

  }

  .interna p {

    font-size: 40px!important;

}
}
.formgeral{
  background-image:url("http://noniresort.com.br/images/bg-branco.png");
  color:  #7B327F;
  font-size: 16px;
  text-transform: uppercase;
  padding: 30px 30px 10px 30px;
  margin-bottom: 20px;
  border-radius: 10px;
  margin-left: 0px!important;
  background: rgba(0, 0, 0, 0.16);
}


@media only screen and (max-device-width: 667px) and (min-device-width: 320px){
	.txthome {
	  padding-top: 222px!important;
	  margin-bottom: 22px!important;
	  font-size: 29px!important;
	  text-align: center!important;
	}

	.lateral {
	    text-align: center;
	}

	.row h3 {
	    margin-top: 76px!important;
	    text-align: center!important;
	}


	.redes-sociais{
		z-index: 999999;
	    margin: 337px 113px!important;
	    position: absolute;

	}

	.txthome{    
	  padding-top: 239px!important;
	  margin-bottom: 22px!important;
	  font-size: 22px!important;
	}
	  
	.txthome p{
	  font-size: 22px!important;
	}



}
.formgeral1{
  background-image:url("http://noniresort.com.br/images/bg-branco.png");
  color:  #7B327F;
  font-size: 16px;
  text-transform: uppercase;
  padding: 30px 30px 10px 30px;
  margin-bottom: 20px;
  border-radius: 10px;
  margin-left: 0px!important;
  background: rgba(0, 0, 0, 0.16);
}
.formgeral2{
  background-image:url("http://noniresort.com.br/images/bg-branco.png");
  color:  #7B327F;
  font-size: 16px;
  text-transform: uppercase;
  padding: 30px 30px 10px 30px;
  margin-bottom: 20px;
  border-radius: 10px;
  margin-left: 0px!important;
  background: rgba(0, 0, 0, 0.16);
}



</style>
<?php get_header(); ?>
			<div class="lateral">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logos-noni-arena-bg.png" alt="None Resort Home" /></a>
			</div>

			<div class="redes-sociais">
				<ul>						
					<li>
						<a target="_blank" title="Facebook" href="https://www.facebook.com/cafedelamusiquecumbuco/">
						<img class="social-icon social-icon-facebook" width="31" height="31" alt="Facebook" src="http://www.amaisonline.com.br/wp-content/themes/scroller/images/icones/facebook-w.png">
						</a>
					</li>
			
					<li>
						<a target="_blank" title="Instagram" href="https://www.instagram.com/cafedelamusiquecumbucooficial/   ">
						<img class="social-icon social-icon-rss" width="31" height="31" alt="Instagram" src="http://www.amaisonline.com.br/wp-content/themes/scroller/images/icones/instagram-w.png">
						</a>
					</li>					
				</ul>			
     		</div>


			</div>

			<div id="content">
			
				<div id="inner-content" class="row">				

    				<div class="large-12 medium-8 small-12 columns">

				    <h3 class="txthome interna"> Preencha o formulário abaixo 
				    <p>e receba informações exclusivas em primeira mão.</p></h3>
					
						<?php echo do_shortcode('[contact-form-7 id="56" title="Formulario-NONI-RESORT-ARENA"]') ?>
					    					
    				</div> <!-- end #main -->
				    <?php get_footer(); ?>
				    

				</div> <!-- end #inner-content -->

    		</div> <!-- end #content -->


  </div> 



