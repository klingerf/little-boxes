<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if(is_single()) { ?>
	<title><?php bloginfo('name'); ?> &raquo; <?php echo str_ireplace("<br />", " | ", $post->post_title); ?></title>
<?php } else { ?>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<?php } ?>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/little-boxes.js"></script>
</head>
<body>
<div id="container">
	<div id="header">
		<div class="box bg1">
			<h1><a href="http://www.kevinlingerfelt.com">Kevin Lingerfelt</a></h1>
		 	<div class="pic"><a href="http://www.kevinlingerfelt.com"><img src="<?php bloginfo('template_directory'); ?>/images/kl<?php echo rand(1,4) ?>.jpg" alt="Kevin Lingerfelt" /></a></div>
		</div>
		<!--
		<div class="box">
		 	php get_sidebar();
		</div>
		-->
	</div><!-- End #header -->
