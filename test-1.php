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
	
	<div class="container_full">
		<div class="fix container">
			<div id="wrapper">
                <div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="images/Audi.jpg" alt="" />
						<img src="images/bmw-i8.jpg" alt="" />
						<img src="images/maybach1.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container_full">
		<div class="fix container">
			<h2 class="content_h">YOUR TITLE HERE</h2>
				<div class="column_wrapper">
					<div class="single_column column1 floatleft">
						<img src="images/column_img.png" alt=""><a href=""></a></img>
						<?php 
					if(have_posts()) :
						while(have_posts()) : the_post();
					?>
					<article>
						<h2><a href=""><?php the_title(); ?></a></h2>
					</article>
					<?php endwhile;
					else :
					echo 'No Post Found';
					endif; ?>
					</div>
					<div class="single_column column2 floatleft">
						<img src="images/column_img.png" alt=""><a href="#"></a></img>
						<?php 
					if(have_posts()) :
						while(have_posts()) : the_post();
					?>
					<article>
						<h2><a href=""><?php the_title(); ?></a></h2>
					</article>
					<?php endwhile;
					else :
					echo 'No Post Found';
					endif; ?>
					</div>
					<div class="single_column column3 floatleft">
						<img src="images/column_img.png" alt=""><a href="#"></a></img>
						<?php 
					if(have_posts()) :
						while(have_posts()) : the_post();
					?>
					<article>
						<h2><a href=""><?php the_title(); ?></a></h2>
					</article>
					<?php endwhile;
					else :
					echo 'No Post Found';
					endif; ?>
					</div>
					<div class="single_column column4 floatleft">
						<img src="images/column_img.png" alt=""><a href="#"></a></img>
						<h2>Lorem ipsum dolor</h2>
						<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iac.</p>
					</div>
					<div class="single_column column5 floatleft">
						<img src="images/column_img.png" alt=""><a href="#"></a></img>
						<h2>Lorem ipsum dolor</h2>
						<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iac.</p>
					</div>
					<div class="single_column column6 floatleft">
						<img src="images/column_img.png" alt=""><a href="#"></a></img>
						<h2>Lorem ipsum dolor</h2>
						<p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iac.</p>
					</div>
				</div>
		</div>
	</div>
	<div class="container_full">
		<div class="fix container">
			<div class="content_bottom_wrapper">
				<div class="left_content floatleft">
					<h2 class="title">YOUR TITLE HERE</h2>
					<div class="column_left">
						<img src="images/column_img2.png" alt=""><a href="#"></a></img>
						<h2>Title Goes Here</h2>
						<p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt.</p>
						<p class="read_more"><a href="#">Read More »</a></p>
					</div>
				</div>
				<div class="right_content floatright">
					<h2 class="title">YOUR TITLE HERE</h2>
					<div class="quto">
						<img src="images/quto.png" alt=""><a href="#"></a></img>
						<h2>Tommy Tanker - CEO</h2></br>
						<p class="project"><a href="#">View This Project »</a></p>
						<p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. Idenim semper pellente velis felit ac nullam pretium morbi lacus.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container_full">
		<div class="fix container shout_bg">
			<div class="shout_wrapper">
				<div class="shout_left floatleft">
					<h2>Orciinterdum Corper Elit Nam ?</h2>
					<p>Orciinterdum condimen urabitur laoreet met praesenean et iac !</p>
				</div>
				<div class="shout_right floatright">
					<p><a href="#">CONTACT US TODAY</a></p>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>