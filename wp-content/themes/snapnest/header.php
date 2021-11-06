<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Snapnest Photography: Architectural Photography</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <?php wp_head();?>
	
	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<!-- <h1 id="colorlib-logo"><a href="index.html">Balay</a></h1> -->
			<div class="logo">
                </a><img src="<?php bloginfo('template_directory');?>/images/logo/white_transparent_logo.png">
            </div>
			<nav id="colorlib-main-menu" role="navigation">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu',
					)
				);
				?>
				
			</nav>

			<div class="colorlib-footer">
				<ul>
					<li><a href="https://www.facebook.com/SnapNest-Photography-184614395586142"><i class="icon-facebook2"></i></a></li>
					<!-- <li><a href="#"><i class="icon-behance"></i></a></li> -->
					<li><a href="https://www.instagram.com/snapnest_photography/"><i class="icon-instagram"></i></a></li>
					<li><a href="https://twitter.com/SnapnestP?s=09/"><i class="icon-twitter2"></i></a></li>
				</ul>
			</div>

		</aside>