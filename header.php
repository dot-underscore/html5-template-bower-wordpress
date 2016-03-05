<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="DamnRight.nl">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link type="text/css" rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>" media="screen">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo ('name'); ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/global.css" media="screen">


	<?php wp_head();?>
</head>