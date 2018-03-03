<!-- <?echo basename(__FILE__); ?>  -->
<html>
	<head>
		<title>IDM 6630 - Development Docker Container</title>
		<?php wp_head(); ?>
	</head>

	<body>
		 <header>
		 	<h1> This is my website!!</h1>
		 	<h2> Pretty cool, RIGHT!</h2>
		 	<h2><?php echo get_bloginfo ('name'); ?></h2>
			<?php echo get_bloginfo ('decription'); ?>
		<?php get_template_part('nav'); ?>

		 </header>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->
