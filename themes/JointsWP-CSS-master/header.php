<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="stylesheet" href="fonte.css" type="text/css" charset="utf-8" />
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>

		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		 <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<div class="row">

								
							 </div>
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /partials directory -->
						 <?php // get_template_part( 'partials/nav', 'top-offcanvas' ); ?>
								 
						<div id="inner-header" class="row">
						
						
							
							 <div class="large-12 medium-12 columns">
								

								
						</div>
							
							 <!-- This navs will be applied to the main, under the logo 
								  To see additional nav styles, visit the /partials directory -->
								  
							 <?php// get_template_part( 'partials/nav', 'main-offcanvas' ); ?>
	
						</div> <!-- end #inner-header -->

	<div class="radio">
			<div class="row">
			  <div class="small-12 large-5 medium-3 columns"><a href="http://noniresort.com.br/?page_id=29"><img src="<?php echo get_bloginfo('template_directory');?>/library/images/logo-radio-cafe-la-music-beach-park.jpg" alt="Rádio Café La Music" /></a></div>
			  <div class="small-12 large-3 medium-5 columns"><p>Escute aqui o último set exclusivo do Programa Café de La Music Todos os sábados das 18h às 19h.<br><a href="http://noniresort.com.br/?page_id=29">Download Playlist</a></p></div>
			  <div class="small-12 large-4 medium-4 columns"><div class="pl"><?php echo do_shortcode('[sc_embed_player_template1 fileurl="http://#.mp3" autoplay="no" loops="true"]'); ?></div></div>
			</div>
	</div>
					</header> <!-- end .header -->
