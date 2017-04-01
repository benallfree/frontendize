<!DOCTYPE html>
<html>

<head>
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Include Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<!-- Include FontAwesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('page-' . $post->post_name); ?>>

<header id="hero">
	<h1 class="typewrite">Taut</h1>
	<p class="typewrite" data-period="1000" data-type='[ "Because Slack Lacks", "We are sorry, Slack lawyers, we did not mean it!" ]'>Because Slack lacks.<span class="wrap"></span></p>
</header>