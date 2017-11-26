<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if (is_single() || is_page()) { wp_title('',true); } elseif(is_front_page()) { bloginfo('description'); } else { bloginfo('description'); } ?> | <?php bloginfo('name');?></title>
	
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    
	<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    
	<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    
	<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	
	<link rel="stylesheet" href="css/font.css" type="text/css"/>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container_full social_icon_bg social_area_full">
		<div class="fix container">
			<div class="social_area">
				<div id="social_icon">
					<div class="social_icon floatleft">
						<ul>
							<li class="linkedin"><a href="#"></a></li>
							<li class="twitter"><a href="#"></a></li>
							<li class="pinterest"><a href="#"></a></li>
							<li class="g"><a href="#"></a></li>
							<li class="rss"><a href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="social_link floatright">
					<ul>
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">RSS Feeds</a></li>
						<li><a href="#">Archived News</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container_full content_bg">
		<div class="fix container">
			<header id="header"> 
				<div class="fix logo">
						<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1> </br>
						<p><?php bloginfo('description'); ?></p>
					<div class="search_box floatright">
						<input type="text" />
						<input type="submit" />
					</div>
				</div>
				<div class="minus">
					
				</div>
				
				<nav class="fix menu">
					<?php
					$menu = array(
						'theme_location' => 'primary'
					);
					wp_nav_menu($menu); ?>
				</nav>
			</header>
		</div>
	</div>