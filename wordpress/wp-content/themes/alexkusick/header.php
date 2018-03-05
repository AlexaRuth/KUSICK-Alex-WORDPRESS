<!-- <?echo basename(__FILE__); ?>  -->
<html>
	<head>
		<title>IDM 6630 - Development Docker Container</title>
		<?php wp_head(); ?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Junge|Poppins:500" rel="stylesheet">
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


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">